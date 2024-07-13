<?php

namespace Database\Seeders;

use App\Models\BusRoute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusRouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BusRoute::create([
            'route_name' => 'Makassar'
        ]);

        BusRoute::create([
            'route_name' => 'Palopo'
        ]);

        BusRoute::create([
            'route_name' => 'Mamuju'
        ]);

        BusRoute::create([
            'route_name' => 'Selayar'
        ]);
    }
}
