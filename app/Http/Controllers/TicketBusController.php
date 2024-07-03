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
        //
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
        $request->validate([
            'route_source' => 'required',
            'route_destination' => 'required'
        ]);
        $tickets = TicketBus::with('source', 'destination')->where('route_source', $request->route_source)->where('route_destination', $request->route_destination)->get();
        // dd($ticket);
        return view('ticket-bus.index', compact('tickets'));
    }

    /**
     * Display the specified resource.
     */
    public function show(TicketBus $ticket)
    {
        //
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
}
