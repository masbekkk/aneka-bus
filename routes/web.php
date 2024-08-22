<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BusReservationController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\RouteBusController;
use App\Http\Controllers\TicketBusController;
use App\Http\Controllers\TypeBusController;
use App\Models\BusRoute;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return ['Laravel' => app()->version()];
// });

require __DIR__ . '/auth.php';
require __DIR__ . '/coba.php';

Route::get('/', function () {
    $routes = BusRoute::orderBy('route_name', 'ASC')->get();
    return view('landing-page.index', compact('routes'));
})->name('landing-page');

Route::get('/armada-kami', function () {
    return view('landing-page.armada-kami');
})->name('armada-kami');

Route::get('/pusat-bantuan', function () {
    return view('landing-page.pusat-bantuan');
})->name('pusat-bantuan');

Route::get('/admin', function () {
    $routes = BusRoute::all();
    return view('admin.ticket.index', compact('routes'));
});

Route::middleware('auth')->group(function () {
    Route::get('/admin-order/detail-passenger/{id}', [AdminController::class, 'passenger'])->name('admin.detail-passenger');
    Route::resource('admin-order', AdminController::class)->except(['show']);
    Route::get('/admin-order/{id}', [TicketBusController::class, 'chooseSeat'])->name('admin-order.show');

    Route::resource('bus-reservation', BusReservationController::class);
    Route::resource('passenger', PassengerController::class);
    Route::get('/cetak-tiket/{id}', [BusReservationController::class, 'cetak_tiket'])->name('admin-order.cetak-tiket');
});

Route::resource('tiket-bus', TicketBusController::class);
Route::get('choose-seat/tiket-bus/{id}', [TicketBusController::class, 'chooseSeat'])->name('choose-seat.ticket-bus');
Route::get('/detail-passenger/{id}', [BusReservationController::class, 'show'])->name('detail-passenger.ticket-bus');

// Edit

Route::get('index-tiket', [TicketBusController::class, 'all_ticket'])->name('admin.index-all-tiket');
Route::get('show-tiket/{id}', [TicketBusController::class, 'edit_ticket'])->name('admin.tiket.edit');
Route::put('edit-tiket/{id}', [TicketBusController::class, 'departure_arrive_edit'])->name('admin.edit.tiket');

Route::put('/tickets/update-times', [TicketBusController::class, 'updateTimes'])->name('tickets.update-times');
Route::get('/tickets/update-times', [TicketBusController::class, 'update_tiket'])->name('tickets.index-times');

Route::get('/ticket-add', [TicketBusController::class, 'add_ticket'])->name('ticket.add');
Route::post('/ticket-add', [TicketBusController::class, 'store_ticket'])->name('ticket.store_ticket');

// New Ticket
Route::get('/create-new-ticket', [TicketBusController::class, 'createNewTicket'])->name('create.newticket');
Route::post('/store-new-ticket', [TicketBusController::class, 'storeNewTicket'])->name('store.newticket');

// Type Bus
Route::get('/index-type-bus', [TypeBusController::class, 'index'])->name('index.typebus');
Route::get('/create-type-bus', [TypeBusController::class, 'create'])->name('add.typebus');
Route::post('/create-type-bus', [TypeBusController::class, 'store'])->name('store.typebus');


//Route Bus
Route::get('/index-route-bus', [RouteBusController::class, 'index'])->name('index.routebus');
Route::get('/create-route-bus', [RouteBusController::class, 'create'])->name('create.routebus');
Route::post('/create-route-bus', [RouteBusController::class, 'store'])->name('store.routebus');

