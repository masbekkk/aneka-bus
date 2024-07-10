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
            'seats' => implode(',', range(1, 23)),
            'women_seats' => implode(',', range(17, 23)),
            'men_seats' => implode(',', range(1, 10)),
        ]);
    }
}
