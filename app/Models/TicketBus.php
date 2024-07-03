<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketBus extends Model
{
    use HasFactory;

    protected $table = 'ticket_bus';

    protected $fillable = [
        'route_source',
        'route_destination',
        'type_bus',
        'departure_time',
        'arrive_time',
        'boarding_location',
        'drop_location',
        'price',
    ];
}
