<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BusReservationController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\TicketBusController;
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
