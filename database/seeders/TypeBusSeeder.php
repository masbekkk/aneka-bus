<?php

namespace Database\Seeders;

use App\Models\TypeBus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeBusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        TypeBus::create([
            'name' => 'AT01 - Premier Ultimate Class',
            'seats' => implode(',', range(1, 20)),
            'women_seats' => implode(',', range(17, 20)),
            'men_seats' => implode(',', range(1, 10)),
        ]);

        TypeBus::create([
            'name' => 'AT02 - Sleeper Suite Combi Bus',
            'seats' => implode(',', range(1, 24)),
            'women_seats' => implode(',', range(17, 18)),
            'men_seats' => implode(',', range(1, 10)),
        ]);

        TypeBus::create([
            'name' => 'AT03 - Sleeper Suite Combi Bus',
            'seats' => implode(',', range(1, 24)),
            'women_seats' => implode(',', range(17, 18)),
            'men_seats' => implode(',', range(1, 10)),
        ]);

        TypeBus::create([
            'name' => 'AT04 - Sleeper Suite Combi Bus',
            'seats' => implode(',', range(1, 24)),
            'women_seats' => implode(',', range(17, 18)),
            'men_seats' => implode(',', range(1, 10)),
        ]);
    }
}
