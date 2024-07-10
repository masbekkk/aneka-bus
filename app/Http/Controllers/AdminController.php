<?php

namespace App\Http\Controllers;

use App\Models\BusRoute;
use App\Models\TicketBus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax())
        {
            if ($request->has('source') && $request->has('destination') && $request->has('tgl')) {
                $tickets = TicketBus::with('source', 'destination', 'type_bus')
                    ->where('route_source', $request->source)
                    ->where('route_destination', $request->destination)
                    ->where('departure_date', $request->tgl)
                    ->get();
            }
            return response()->json(['tiket' => $tickets]);
        }
        $validator = Validator::make($request->all(), [
            'source' => 'required|integer',
            'destination' => 'required|integer',
            'tgl' => 'required|date|after_or_equal:today',
        ]);

        if ($validator->fails()) {
            return redirect()->route('landing-page')
                ->withErrors($validator)
                ->withInput();
        }
        if ($request->has('source') && $request->has('destination') && $request->has('tgl')) {
            $tickets = TicketBus::with('source', 'destination')
                ->where('route_source', $request->source)
                ->where('route_destination', $request->destination)
                ->where('departure_date', $request->tgl)
                ->get();
        } else return redirect()->route('landing-page');

        $routeName = BusRoute::where('id', $request->source)->orWhere('id', $request->destination)->get();
        $departure_date = $request->tgl;
        // dd($tickets);
        return view('admin.ticket.pilih-tiket', compact('tickets', 'departure_date', 'routeName'));
    }

    public function show($id, Request $request)
    {
        $ticket = TicketBus::with('type_bus')->findOrFail($id);
        
        return view('admin.ticket.detail', compact('ticket'));
    }

    public function create()
    {
        // $ticket = TicketBus::with('type_bus')->findOrFail($id);
        // return view('ticket-bus.detail', compact('ticket'));
    }
}
