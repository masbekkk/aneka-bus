<?php

namespace App\Http\Controllers;

use App\Models\BusReservation;
use App\Models\TicketBus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BusReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
        
        $seats = implode(',',$request->seat);
        $selectedSeat = explode(',', $seats);
        $totalSeat = count($selectedSeat);
        $totalPrice = $totalSeat * $ticket->price;

        if (array_intersect($selectedSeat, explode(',',$ticket->booked_seats))) {
            return redirect()->route('choose-seat.ticket-bus', ['id' => $id])
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
