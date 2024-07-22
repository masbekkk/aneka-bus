<?php

namespace App\Http\Controllers;

use App\Models\BusReservation;
use App\Models\Passenger;
use App\Models\TicketBus;
use PDF;
// use Barryvdh\DomPDF\PDF;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use TCPDF;

class BusReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // dd(url()->full());
        $request->validate([
            'source' => 'required',
            'destination' => 'required'
        ]);
        if (request()->ajax()) {
            $trx = BusReservation::with(['passenger', 'ticket_bus.type_bus', 'ticket_bus.source', 'ticket_bus.destination'])
                ->whereHas('ticket_bus.source', function ($query) use ($request) {
                    $query->where('id', $request->source);
                })
                ->whereHas('ticket_bus.destination', function ($query) use ($request) {
                    $query->where('id', $request->destination);
                })
                ->orderBy('created_at', 'DESC')
                ->get();

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
        // dd("ga kan? store");
        $validator = Validator::make($request->all(), [
            'nama_pemesan' => 'required|string|max:255',
            // 'email_pemesan' => 'required|email|max:255',
            'wa_pemesan' => 'required|string|max:15',
            'departure_location' => 'required|string',
            'drop_location' => 'required|string',
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
            $reservation->departure_location = $request->departure_location;
            $reservation->drop_location = $request->drop_location;
            $reservation->type = 'admin-booking';
            $reservation->payment_method = 'admin';
            $reservation->payment_method = 'admin';
            $reservation->payment_channel = 'admin';
            $reservation->total = $request->total_price;
            $reservation->status = 1;
            $reservation->status_desc = 'SUCCESS';
            $reservation->ticket_bus_id = $request->ticket_bus_id;
            $reservation->no_order = 'ANKABUS-' . $reservation->id . '-ADM-ORDER';
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
            $reservation->no_order = 'ANKABUS-' . $reservation->id . '-ADM-ORDER';
            $reservation->save();
            // $updateReservation = BusReservation::findOrFail($reservation->id)->update([
            //     'no_order' => 'ANKABUS-' . $reservation->id . '-ADM-ORDER',
            //     'uuid' => $reservation['no_order'] . '-' . Str::uuid()
            // ]);
            $updatedSeats = implode(',', $booked_seats);
            $ticket->update([
                'booked_seats' => $updatedSeats
            ]);

            DB::commit();
            return redirect()->route('admin-order.cetak-tiket', ['id' => $reservation->id])->with('success', 'Berhasil booking!');
            // return redirect()->route('admin-order.index')->with('success', 'Berhasil booking!');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()->withErrors(['error' => 'Error: ' . $e->getMessage()]);
        }

        // 
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
            return redirect()->route('admin-order.show', ['id' => $id])
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
        try {
            $busReservation->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Data Deleted Successfully!',
                'data' => null
            ], Response::HTTP_OK);
        } catch (Exception $e) {
            $errorMessage = $e->getMessage();
            Log::error('Error delete reservation data: ' . $errorMessage);
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete',
                'data' => null,
                'errors' => $errorMessage,
            ], 500);
        }
    }
    public function cetak_tiket($id)
    {
        $reservation = BusReservation::with('ticket_bus', 'passenger')->findOrFail($id);
        //view ticket
        $dateTime = Carbon::parse($reservation->ticket_bus->departure_date . $reservation->ticket_bus->departure_time);
        $timeToAdd = $reservation->ticket_bus->arrive_time; // HH:mm:ss format
        // Convert the time string to a Carbon interval
        list($hours, $minutes, $seconds) = explode(':', $timeToAdd);
        $arrive_date = $dateTime->addHours(intval($hours))->addMinutes(intval($minutes))->addSeconds(intval($seconds))->format('Y-m-d');
        $departure_date = Carbon::parse($reservation->ticket_bus->departure_date)->locale('id')->translatedFormat('l, d F Y');
        $arrival_date = Carbon::parse($arrive_date)->locale('id')->translatedFormat('l, d F Y');

        $passengers = $reservation->passenger;

        return view('ticket-bus.cetak-tiket', compact('reservation', 'passengers', 'arrival_date', 'departure_date'));
        // Load the view with the data
        //         $pdf = PDF::loadView('ticket-bus.cetak-tiket', compact('reservation', 'passengers', 'arrive_date'));

        //         // Set paper size to A6
        //         $pdf->setPaper('a6', 'portrait');
        //         $pdf->render();

        // // Output the generated PDF (1 = download and 0 = preview)
        // return $pdf->stream("ticket.pdf", ["Attachment" => 0]);



        // Create new PDF document
        // $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, 'A6', true, 'UTF-8', false);

        // Set document information
        // $pdf->SetCreator(PDF_CREATOR);
        // $pdf->SetAuthor('Your Name');
        // $pdf->SetTitle('A6 PDF Example');
        // $pdf->SetSubject('A6 PDF');
        // $pdf->SetKeywords('TCPDF, PDF, A6');

        // Set default header data
        // $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' A6 PDF', PDF_HEADER_STRING);

        // Set header and footer fonts
        // $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        // $pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // Set default monospaced font
        // $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // Set margins
        // $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        // $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        // $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // // Set auto page breaks
        // $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // // Set image scale factor
        // $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // // Set font
        // $pdf->SetFont('helvetica', '', 10);

        // // Add a page
        // $pdf->AddPage();

        // // Get the HTML content from the view
        // $html = view('ticket-bus.cetak-tiket', compact('reservation', 'passengers', 'arrive_date'))->render();

        // // Output the HTML content
        // $pdf->writeHTML($html, true, false, true, false, '');

        // // Close and output PDF document
        // $pdf->Output('a6_example.pdf', 'I');
    }
}
