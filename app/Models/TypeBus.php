<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeBus extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'seats', 'women_seats', 'men_seats'];

    public function bus_ticket()
    {
        return $this->hasMany(TicketBus::class, 'type_bus_id', 'id');
    }
}
