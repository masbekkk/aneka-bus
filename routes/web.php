<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BusReservationController;
use App\Http\Controllers\TicketBusController;
use App\Models\BusRoute;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return ['Laravel' => app()->version()];
// });

require __DIR__.'/auth.php';
require __DIR__.'/coba.php';

Route::get('/', function () {
    $routes = BusRoute::all();
    return view('landing-page.index', compact('routes'));
})->name('landing-page');

Route::get('/admin', function () {
    $routes = BusRoute::all();
    return view('admin.ticket.index', compact('routes'));
});

Route::get('/admin-order', function () {
    $routes = BusRoute::all();
    return view('admin.ticket.order', compact('routes'));
})->name('admin-order');

Route::resource('admin-tiket', AdminController::class);
Route::get('/detail-passenger/admin/{id}', [AdminController::class, 'passenger'])->name('admin.detail-passenger');

Route::resource('tiket-bus', TicketBusController::class);
Route::get('choose-seat/tiket-bus/{id}', [TicketBusController::class, 'chooseSeat'])->name('choose-seat.ticket-bus');

Route::resource('bus-reservation', BusReservationController::class);
Route::get('/detail-passenger/{id}', [BusReservationController::class, 'show'])->name('detail-passenger.ticket-bus');
