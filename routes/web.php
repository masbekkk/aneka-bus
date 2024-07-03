<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing-page.index');
})->name('landing-page');

Route::get('/beli-tiket-bus', function () {
    return view('ticket-bus.index');
})->name('tiket-page');
