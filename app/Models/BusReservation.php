<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusReservation extends Model
{
    use HasFactory;

    public function ticket_bus()
    {
        return $this->belongsTo(TicketBus::class, 'id', 'ticket_bus_id');
    }
}
