<?php

use App\Http\Controllers\TicketBusController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/ticket-add', [TicketBusController::class, 'store_ticket'])->name('store_ticket');
