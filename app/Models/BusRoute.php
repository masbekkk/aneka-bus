<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusRoute extends Model
{
    use HasFactory;

    protected $fillable = ['route_name'];

    public function ticket_source()
    {
        return $this->hasMany(TicketBus::class, 'route_source', 'id');
    }

    public function ticket_destination()
    {
        return $this->hasMany(TicketBus::class, 'route_destination', 'id');
    }
}
