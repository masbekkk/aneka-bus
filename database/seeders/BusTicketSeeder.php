<?php

namespace Database\Seeders;

use App\Models\TicketBus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusTicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TicketBus::create([
            'route_source' => 1,
            'route_destination' => 3,
            'type_bus_id' => 1,
            'departure_date' => '2024-07-10',
            'departure_time' => '19:45:00',
            'arrive_time' => '06:00:00',
            'boarding_location' => 'Perwakilan Aneka Transport, Maccini Sawah',
            'drop_location' => 'Kantor Perwakilan Aneka, Kompleks Terminal Tipe A Simbuang',
            'price' => 260000,
            'booked_seats' => implode(',', range(11, 15)),
        ]);

        TicketBus::create([
            'route_source' => 1,
            'route_destination' => 3,
            'type_bus_id' => 1,
            'departure_date' => '2024-07-10',
            'departure_time' => '19:45:00',
            'arrive_time' => '06:00:00',
            'boarding_location' => 'Perwakilan Terminal Daya',
            'drop_location' => 'Kantor Perwakilan Aneka, Kompleks Terminal Tipe A Simbuang',
            'price' => 260000,
            'booked_seats' => implode(',', range(11, 15)),
        ]);

        TicketBus::create([
            'route_source' => 1,
            'route_destination' => 3,
            'type_bus_id' => 1,
            'departure_date' => '2024-07-10',
            'departure_time' => '19:45:00',
            'arrive_time' => '06:00:00',
            'boarding_location' => 'Perwakilan Aneka Transport, Maccini Sawah',
            'drop_location' => 'Kantor Perwakilan Aneka, Kompleks Terminal Tipe A Simbuang',
            'price' => 260000,
            'booked_seats' => implode(',', range(11, 15)),
        ]);

        TicketBus::create([
            'route_source' => 1,
            'route_destination' => 3,
            'type_bus_id' => 1,
            'departure_date' => '2024-07-10',
            'departure_time' => '19:45:00',
            'arrive_time' => '06:00:00',
            'boarding_location' => 'Perwakilan Terminal Daya',
            'drop_location' => 'Kantor Perwakilan Aneka, Kompleks Terminal Tipe A Simbuang',
            'price' => 260000,
            'booked_seats' => implode(',', range(11, 15)),
        ]);

        TicketBus::create([
            'route_source' => 1,
            'route_destination' => 2,
            'type_bus_id' => 1,
            'departure_date' => '2024-07-10',
            'departure_time' => '19:30:00',
            'arrive_time' => '06:00:00',
            'boarding_location' => 'Perwakilan Aneka Transport, Maccini Sawah',
            'drop_location' => 'Kantor Perwakilan Aneka, Ruko Kompleks Terminal Dangge',
            'price' => 230000,
            'booked_seats' => implode(',', range(11, 15)),
        ]);

        TicketBus::create([
            'route_source' => 1,
            'route_destination' => 2,
            'type_bus_id' => 1,
            'departure_date' => '2024-07-10',
            'departure_time' => '19:30:00',
            'arrive_time' => '06:00:00',
            'boarding_location' => 'Perwakilan Terminal Daya',
            'drop_location' => 'Kantor Perwakilan Aneka, Ruko Kompleks Terminal Dangge',
            'price' => 230000,
            'booked_seats' => implode(',', range(11, 15)),
        ]);
    }
}
