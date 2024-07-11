<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;

    protected $fillable = ['reservation_id', 'name', 'gender', 'no_hp', 'no_kursi'];

    public function pemesanan()
    {
        return $this->belongsTo(BusReservation::class, 'reservation_id', 'id');
    }
}

