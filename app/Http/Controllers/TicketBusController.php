<?php

namespace App\Http\Controllers;

use App\Models\BusRoute;
use App\Models\TicketBus;
use App\Models\TypeBus;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Framework\Attributes\Ticket;

class TicketBusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
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
        $routes = BusRoute::orderBy('route_name', 'ASC')->get();
        // dd($tickets);
        return view('ticket-bus.index', compact('tickets', 'departure_date', 'routeName', 'routes'));

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
        $ticket = TicketBus::with('type_bus', 'source', 'destination')->findOrFail($id);
        $img = [];
        $directory = '';
        $source_id = $ticket->source->id;
        $destination_id = $ticket->destination->id;
        if (($source_id == 1 && $destination_id == 3) || ($source_id == 3 && $destination_id == 1)) {
            $directory = 'mks-mamuju/';
        } else if (($source_id == 1 && $destination_id == 2) || ($source_id == 2 && $destination_id == 1)) {
            $directory = 'mks-palopo/';
        }
        $img = range(1, 10);
        return view('ticket-bus.detail', compact('ticket', 'img', 'directory'));
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
        $ticket = TicketBus::with(['type_bus', 'bus_reservation.passenger'])->findOrFail($id);
        // dd($ticket);
        $seats = collect(explode(',', $ticket->type_bus->seats));
        $premier_seats = range(1, 9);
        $sleeper_seats = range(1, 15);
        $reservation = $ticket?->bus_reservation;
        // dd($booked);
        $men_seats = [];
        $women_seats = [];
        if ($reservation) {
            foreach ($reservation as $order) {
                $booked = $order->passenger;
                if ($booked) {
                    foreach ($booked as $seat) {
                        if ($seat->gender == 'male')
                            $men_seats[] = $seat->no_kursi;
                        else if ($seat->gender == 'female')
                            $women_seats[] = $seat->no_kursi;
                    }
                }
            }
        }

        // return $women_seats;
        // return $men_seats;
        // return in_array("Sleeper-2", $men_seats);
        $dateTime = Carbon::parse($ticket->departure_date . $ticket->departure_time);
        $timeToAdd = $ticket->arrive_time; // HH:mm:ss format
        // Convert the time string to a Carbon interval
        list($hours, $minutes, $seconds) = explode(':', $timeToAdd);
        $arrive_date = $dateTime->addHours(intval($hours))->addMinutes(intval($minutes))->addSeconds(intval($seconds))->format('Y-m-d');

        $var_return = [
            'ticket', 'seats', 'men_seats', 'women_seats', 'arrive_date', 'premier_seats', 'sleeper_seats'
        ];
        if (request()->route()->named('admin-order.show')) {
            return view('admin.ticket.pilih-kursi', compact($var_return));
        } else
            return view('ticket-bus.seat', compact($var_return));
    }

    // Edit Ian Ale
    public function all_ticket() {
    $tiket = TicketBus::with('source', 'destination', 'type_bus')->paginate(20);
    return view('admin.ticket.index_all_tiket')->with('tiket', $tiket);
    }


    public function edit_ticket($id){
        $tiket = TicketBus::with('source','destination','type_bus')->findOrFail($id);
        return view('admin.ticket.edit_tiket')->with('tiket', $tiket);
    }


    public function updateTimes(Request $request) {
        $asal = $request->route_source;
        $tujuan = $request->route_destination;
        $new_departure_time = $request->departure_time;
        $new_arrive_time = $request->arrive_time;


        DB::statement('UPDATE ticket_bus SET departure_time = ?, arrive_time = ? WHERE route_source = ? AND route_destination = ?', [
            $new_departure_time,
            $new_arrive_time,
            $asal,
            $tujuan
        ]);

        return redirect()->back()->with('success', 'Waktu keberangkatan dan kedatangan berhasil diperbarui untuk semua tiket.');
    }

    public function update_tiket(){
        $routes = BusRoute::all();
        return view('admin.ticket.time_tiket', compact('routes'));
    }

    public function add_ticket(){
        return view('admin.ticket.add_ticket');
    }

    public function store_ticket(Request $request)
{

    $routeSource = BusRoute::create(
        ['route_name' => $request->route_source_name]
    );

    $routeDestination = BusRoute::create(
        ['route_name' => $request->route_destination_name]
    );

    $seats = range(1, (int)$request->seats);
    $seatsFormatted = implode(',', $seats);

    $womenSeats = range(1, (int)$request->women_seats);
    $womenSeatsFormatted = implode(',', $womenSeats);

    $lastWomanSeats= end($womenSeats);

    $menSeats = range($lastWomanSeats+1, (int)$request->men_seats + $lastWomanSeats );
    $menSeatsFormatted = implode(',', $menSeats);

    $typeBus = TypeBus::create([
        'name' => $request->type_bus_name,
        'seats' => $seatsFormatted,
        'women_seats' => $womenSeatsFormatted,
        'men_seats' => $menSeatsFormatted
    ]);

    $startDate = Carbon::now();
    $endDate = Carbon::create(2024, 12, 31);

    for ($date = $startDate; $date->lte($endDate); $date->addDay()) {
        TicketBus::create([
            'route_source' => $routeSource->id,
            'route_destination' => $routeDestination->id,
            'type_bus_id' => $typeBus->id,
            'departure_date'=> $date->toDateString(),
            'departure_time'=> $request->departure_time,
            'arrive_time'=> $request->arrive_time,
            'boarding_location'=> $request->boarding_location,
            'drop_location'=> $request->drop_location,
            'price'=> $request->price,
        ]);
    }
    return redirect()->back();
}

    public function createNewTicket(){
        $route = BusRoute::all();
        $typeBus = TypeBus::all();

        return view('admin.ticket.add_new_ticket')
        ->with('route', $route)
        ->with('typebus', $typeBus);
    }

    public function storeNewTicket(Request $request){

        $startDate = Carbon::now();
        $endDate = Carbon::create(2024, 12, 31);

        for ($date = $startDate; $date->lte($endDate); $date->addDay()) {
            TicketBus::create([
                'route_source' => $request->route_source,
                'route_destination' => $request->route_destination,
                'type_bus_id' => $request->type_bus_id,
                'departure_date'=> $date->toDateString(),
                'departure_time'=> $request->departure_time,
                'arrive_time'=> $request->arrive_time,
                'boarding_location'=> $request->boarding_location,
                'drop_location'=> $request->drop_location,
                'price'=> $request->price,
            ]);
        }
        return redirect()->back();
    }

}
