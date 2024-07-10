<?php

use App\Http\Controllers\BusReservationController;
use App\Http\Controllers\TicketBusController;
use App\Models\BusRoute;
use App\Models\TicketBus;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return range(1, 23);
    $routes = BusRoute::all();
    return view('landing-page.index', compact('routes'));
})->name('landing-page');

Route::get('/coba', function () {
    return view('coba');
});

Route::get('/coba3', function () {
    // dd("ok");
    return view('coba3');
});

Route::get('/seat', function () {
    return view('ticket-bus.seat');
});

Route::get('/coba2', function () {
    return view('coba2');
});
Route::get('/coba4', function () {
    return view('coba4');
});

Route::get('/coba5/{id}', function ($id) {
    $ticket = TicketBus::with('type_bus', 'bus_reservation')->findOrFail($id);
        $seats = collect(explode(',',$ticket->type_bus->seats));
        $booked = explode(',', $ticket->booked_seats);
        return view('coba5', compact('ticket', 'booked', 'seats'));
});

Route::get('/pilih-kursi', function () {
    return view('ticket-bus.pilih-kursi');
});

Route::get('/passenger', function () {
    return view('ticket-bus.passenger');
});

Route::resource('tiket-bus', TicketBusController::class);
Route::get('choose-seat/tiket-bus/{id}', [TicketBusController::class, 'chooseSeat'])->name('choose-seat.ticket-bus');

Route::get('/detail-passenger/{id}', [BusReservationController::class, 'show'])->name('detail-passenger.ticket-bus');
