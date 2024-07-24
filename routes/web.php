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

Route::middleware('auth')->group(function () {
    Route::get('/', function() {
        return redirect()->route('admin-order.index');
    });
    Route::get('/admin-order/detail-passenger/{id}', [AdminController::class, 'passenger'])->name('admin.detail-passenger');
    Route::resource('admin-order', AdminController::class)->except(['show']);
    Route::get('/admin-order/{id}', [TicketBusController::class, 'chooseSeat'])->name('admin-order.show');

    Route::resource('bus-reservation', BusReservationController::class);
    Route::resource('passenger', PassengerController::class);
    Route::get('/cetak-tiket/{id}', [BusReservationController::class, 'cetak_tiket'])->name('admin-order.cetak-tiket');
});

// Route::resource('tiket-bus', TicketBusController::class);
Route::get('choose-seat/tiket-bus/{id}', [TicketBusController::class, 'chooseSeat'])->name('choose-seat.ticket-bus');
