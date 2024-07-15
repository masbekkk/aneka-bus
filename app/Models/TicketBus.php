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
        'booked_seats',
    ];

    public function source()
    {
        return $this->belongsTo(BusRoute::class, 'route_source', 'id');
    }

    public function destination()
    {
        return $this->belongsTo(BusRoute::class, 'route_destination', 'id');
    }

    public function type_bus()
    {
        return $this->belongsTo(TypeBus::class, 'type_bus_id', 'id');
    }

    public function bus_reservation()
    {
        return $this->hasMany(BusReservation::class, 'ticket_bus_id', 'id');
    }
}
