<?php

namespace App\Http\Controllers;

use App\Models\TicketBus;
use Illuminate\Http\Request;

class TicketBusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = TicketBus::with('source', 'destination')->where('route_source', 1)->where('route_destination', 3)->get();
        // dd($tickets);
        return view('ticket-bus.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //    return $request->departure_date;
        $request->validate([
            'route_source' => 'required|integer',
            'route_destination' => 'required|integer',
            'departure_date' => 'required|date'
        ]);
        $tickets = TicketBus::with('source', 'destination')
        ->where('route_source', $request->route_source)
        ->where('route_destination', $request->route_destination)
        ->where('departure_date', $request->departure_date)
        ->get();
        // dd($ticket);
        return view('ticket-bus.index', compact('tickets'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        dd("ok");
        $ticket = TicketBus::with('type_bus')->findOrFail($id);
        return view('ticket-bus.detail', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TicketBus $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TicketBus $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TicketBus $ticket)
    {
        //
    }

    public function chooseSeat($id)
    {
        $ticket = TicketBus::with('type_bus', 'bus_reservation')->findOrFail($id);
        $seats = collect(explode(',',$ticket->type_bus->seats));
        $booked = explode(',', $ticket->booked_seats);
        // dd($booked);
        return view('ticket-bus.seat', compact('ticket', 'booked', 'seats'));
    }
}
