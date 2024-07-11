<?php

namespace App\Http\Controllers;

use App\Models\BusReservation;
use App\Models\Passenger;
use App\Models\TicketBus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BusReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $trx = BusReservation::with('passenger', 'ticket_bus.type_bus', 'ticket_bus.source', 'ticket_bus.destination')->orderBy('created_at', 'DESC')->get();
        //     return response()->json(['data' => $trx]);
        if (request()->ajax()) {
            $trx = BusReservation::with('passenger')->orderBy('created_at', 'DESC')->get();
            return response()->json(['data' => $trx]);
        } else return view('admin.transaction.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_pemesan' => 'required|string|max:255',
            'email_pemesan' => 'required|email|max:255',
            'wa_pemesan' => 'required|string|max:15',
            'passengers' => 'required|array',
            'passengers.*.nama_penumpang' => 'required|string|max:255',
            'passengers.*.gender' => 'required|in:male,female',
            'passengers.*.telepon' => 'required|string|max:15',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        DB::beginTransaction();

        try {
            $ticket = TicketBus::findOrFail($request->ticket_bus_id);
            $booked_seats = explode(',', $ticket->booked_seats);

            $reservation = new BusReservation();
            $reservation->passenger_name = $request->nama_pemesan;
            $reservation->passenger_email = $request->email_pemesan;
            $reservation->passenger_phone = $request->wa_pemesan;
            $reservation->type = 'admin-booking';
            $reservation->payment_method = 'admin';
            $reservation->payment_method = 'admin';
            $reservation->payment_channel = 'admin';
            $reservation->total = $request->total_price;
            $reservation->status = 1;
            $reservation->status_desc = 'SUCCESS';
            $reservation->ticket_bus_id = $request->ticket_bus_id;
            $reservation->save();

            foreach ($request->passengers as $key => $passenger) {
                Passenger::create([
                    'reservation_id' => $reservation->id,
                    'name' => $passenger['nama_penumpang'],
                    'gender' => $passenger['gender'],
                    'no_hp' => $passenger['telepon'],
                    'no_kursi' => $key
                ]);
                if (!in_array($key, $booked_seats)) {
                    $booked_seats[] = $key;
                }
            }
            $updateReservation = BusReservation::findOrFail($reservation->id)->update([
                'no_order' => 'ANKABUS-' . $reservation->id . '-ADM-ORDER',
                'uuid' => $reservation['no_order'] . '-' . Str::uuid()
            ]);
            $updatedSeats = implode(',', $booked_seats);
            $ticket->update([
                'booked_seats' => $updatedSeats
            ]);

            DB::commit();

            return redirect()->route('admin-order')->with('success', 'Berhasil booking!');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()->withErrors(['error' => 'Error: ' . $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, Request $request)
    {
        // return $request->seat;
        $validator = Validator::make($request->all(), [
            'seat' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('choose-seat.ticket-bus', ['id' => $id])
                ->withErrors($validator)
                ->withInput();
        }
        $ticket = TicketBus::with('type_bus')->findOrFail($id);

        $seats = implode(',', $request->seat);
        $selectedSeat = explode(',', $seats);
        $totalSeat = count($selectedSeat);
        $totalPrice = $totalSeat * $ticket->price;

        if (array_intersect($selectedSeat, explode(',', $ticket->booked_seats))) {
            return redirect()->route('admin-tiket.show', ['id' => $id])
                ->withErrors('Kursi yang Kamu Pilih Sudah Terisi!');
        }
        return view('ticket-bus.passenger', compact('selectedSeat', 'ticket', 'totalPrice', 'totalSeat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BusReservation $busReservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BusReservation $busReservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BusReservation $busReservation)
    {
        //
    }
}
