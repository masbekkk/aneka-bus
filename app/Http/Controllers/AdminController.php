<?php

namespace App\Http\Controllers;

use App\Models\BusRoute;
use App\Models\TicketBus;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            if ($request->has('source') && $request->has('destination') && $request->has('tgl')) {
                $tickets = TicketBus::with('source', 'destination', 'type_bus')
                    ->where('route_source', $request->source)
                    ->where('route_destination', $request->destination)
                    ->where('departure_date', $request->tgl)
                    ->get();
            }
            return response()->json(['tiket' => $tickets]);
        }
        $routes = BusRoute::orderBy('route_name', 'ASC')->get();
        return view('admin.ticket.order', compact('routes'));
        // $validator = Validator::make($request->all(), [
        //     'source' => 'required|integer',
        //     'destination' => 'required|integer',
        //     'tgl' => 'required|date|after_or_equal:today',
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->route('landing-page')
        //         ->withErrors($validator)
        //         ->withInput();
        // }
        // if ($request->has('source') && $request->has('destination') && $request->has('tgl')) {
        //     $tickets = TicketBus::with('source', 'destination')
        //         ->where('route_source', $request->source)
        //         ->where('route_destination', $request->destination)
        //         ->where('departure_date', $request->tgl)
        //         ->get();
        // } else return redirect()->route('landing-page');

        // $routeName = BusRoute::where('id', $request->source)->orWhere('id', $request->destination)->get();
        // $departure_date = $request->tgl;
        // // dd($tickets);
        // return view('admin.ticket.pilih-tiket', compact('tickets', 'departure_date', 'routeName'));
    }

    public function create()
    {
       
    }

    public function show($id)
    {
        // dd("sini pasti show");
        $ticket = TicketBus::with('type_bus', 'bus_reservation')->findOrFail($id);
        $seats = collect(explode(',', $ticket->type_bus->seats));
        $booked = explode(',', $ticket->booked_seats);
        $men_seats = explode(',', $ticket->type_bus->men_seats);
        $women_seats = explode(',', $ticket->type_bus->women_seats);

        $dateTime = Carbon::parse($ticket->departure_date . $ticket->departure_time);
        $timeToAdd = $ticket->arrive_time; // HH:mm:ss format
        // Convert the time string to a Carbon interval
        list($hours, $minutes, $seconds) = explode(':', $timeToAdd);
        $arrive_date = $dateTime->addHours(intval($hours))->addMinutes(intval($minutes))->addSeconds(intval($seconds))->format('Y-m-d');
        // return $arrive_date;

        return view('admin.ticket.pilih-kursi', compact('ticket', 'booked', 'seats', 'men_seats', 'women_seats', 'arrive_date'));
        // $ticket = TicketBus::with('type_bus')->findOrFail($id);

        // return view('admin.ticket.detail', compact('ticket'));
    }

    public function passenger($id, Request $request)
    {
        // return $request->seat;
        $validator = Validator::make($request->all(), [
            'seat' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin-order.show', ['id' => $id])
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
        return view('admin.ticket.passenger', compact('selectedSeat', 'ticket', 'totalPrice', 'totalSeat'));
    }
}
