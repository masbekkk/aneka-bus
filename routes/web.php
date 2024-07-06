<?php

use App\Http\Controllers\TicketBusController;
use App\Models\BusRoute;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $routes = BusRoute::all();
    return view('landing-page.layouts', compact('routes'));
    $routes = BusRoute::all();
    return view('landing-page.index', compact('routes'));
})->name('landing-page');

Route::get('/coba', function () {
    return view('coba');
});

Route::get('/coba2', function () {
    return view('coba2');
});

Route::get('/pilih-kursi', function () {
    return view('ticket-bus.pilih-kursi');
});

Route::resource('tiket-bus', TicketBusController::class);
