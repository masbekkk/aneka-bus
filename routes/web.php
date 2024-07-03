<?php

use App\Http\Controllers\TicketBusController;
use App\Models\BusRoute;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $routes = BusRoute::all();
    return view('landing-page.index', compact('routes'));
})->name('landing-page');

// Route::get('/beli-tiket-bus', function () {
//     return view('ticket-bus.index');
// })->name('tiket-page');

Route::resource('tiket-bus', TicketBusController::class);
