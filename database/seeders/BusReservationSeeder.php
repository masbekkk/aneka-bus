<?php

namespace Database\Seeders;

use App\Models\BusReservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bus_reservation = BusReservation::all();
        foreach($bus_reservation as $reservation)
        {
            // $reservation::findOrFail()
            $reservation->update([
                'no_order' => 'AT' . str_pad($reservation->id, 5, '0', STR_PAD_LEFT)
            ]);
         
        }
    }
}
