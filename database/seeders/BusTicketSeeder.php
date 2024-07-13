<?php

namespace Database\Seeders;

use App\Models\TicketBus;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusTicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Set the start date as today
        $startDate = Carbon::now();
        // Set the end date as 31 December 2024
        $endDate = Carbon::create(2024, 12, 31);

        // Iterate from the start date to the end date
        for ($date = $startDate; $date->lte($endDate); $date->addDay()) {
            TicketBus::create([
                'route_source' => 1,
                'route_destination' => 3,
                'type_bus_id' => 1,
                'departure_date' => $date->toDateString(),
                'departure_time' => '19:45:00',
                'arrive_time' => '06:00:00',
                'boarding_location' => 'Perwakilan Aneka Transport (Maccini Sawah), Perwakilan Terminal Daya',
                'drop_location' => 'Kantor Perwakilan Aneka (Kompleks Terminal Tipe A Simbuang)',
                'price' => 260000,
                // 'booked_seats' => implode(',', range(11, 14)),
            ]);

            TicketBus::create([
                'route_source' => 1,
                'route_destination' => 3,
                'type_bus_id' => 2,
                'departure_date' => $date->toDateString(),
                'departure_time' => '19:45:00',
                'arrive_time' => '06:00:00',
                'boarding_location' => 'Perwakilan Aneka Transport (Maccini Sawah), Perwakilan Terminal Daya',
                'drop_location' => 'Kantor Perwakilan Aneka (Kompleks Terminal Tipe A Simbuang)',
                'price' => 260000,
                // 'booked_seats' => implode(',', range(11, 15)),
            ]);

            TicketBus::create([
                'route_source' => 3,
                'route_destination' => 1,
                'type_bus_id' => 1,
                'departure_date' => $date->toDateString(),
                'departure_time' => '19:45:00',
                'arrive_time' => '06:00:00',
                'drop_location' => 'Perwakilan Aneka Transport (Maccini Sawah), Perwakilan Terminal Daya',
                'boarding_location' => 'Kantor Perwakilan Aneka (Kompleks Terminal Tipe A Simbuang)',
                'price' => 260000,
                // 'booked_seats' => implode(',', range(11, 15)),
            ]);

            TicketBus::create([
                'route_source' => 3,
                'route_destination' => 1,
                'type_bus_id' => 2,
                'departure_date' => $date->toDateString(),
                'departure_time' => '19:45:00',
                'arrive_time' => '06:00:00',
                'drop_location' => 'Perwakilan Aneka Transport (Maccini Sawah), Perwakilan Terminal Daya',
                'boarding_location' => 'Kantor Perwakilan Aneka (Kompleks Terminal Tipe A Simbuang)',
                'price' => 260000,
                // 'booked_seats' => implode(',', range(11, 15)),
            ]);

            TicketBus::create([
                'route_source' => 1,
                'route_destination' => 2,
                'type_bus_id' => 3,
                'departure_date' => $date->toDateString(),
                'departure_time' => '19:30:00',
                'arrive_time' => '06:00:00',
                'boarding_location' => 'Perwakilan Aneka Transport (Maccini Sawah), Perwakilan Terminal Daya',
                'drop_location' => 'Kantor Perwakilan Aneka (Ruko Kompleks Terminal Dangge)',
                'price' => 230000,
                // 'booked_seats' => implode(',', range(11, 15)),
            ]);

            TicketBus::create([
                'route_source' => 1,
                'route_destination' => 2,
                'type_bus_id' => 4,
                'departure_date' => $date->toDateString(),
                'departure_time' => '19:30:00',
                'arrive_time' => '06:00:00',
                'boarding_location' => 'Perwakilan Aneka Transport (Maccini Sawah), Perwakilan Terminal Daya',
                'drop_location' => 'Kantor Perwakilan Aneka (Ruko Kompleks Terminal Dangge)',
                'price' => 230000,
                // 'booked_seats' => implode(',', range(11, 15)),
            ]);


            TicketBus::create([
                'route_source' => 2,
                'route_destination' => 1,
                'type_bus_id' => 3,
                'departure_date' => $date->toDateString(),
                'departure_time' => '19:30:00',
                'arrive_time' => '05:00:00',
                'boarding_location' => 'Kantor Perwakilan Aneka (Ruko Kompleks Terminal Dangge)',
                'drop_location' => 'Perwakilan Aneka Transport (Maccini Sawah), Perwakilan Terminal Daya',
                'price' => 230000,
                // 'booked_seats' => implode(',', range(11, 15)),
            ]);

            TicketBus::create([
                'route_source' => 2,
                'route_destination' => 1,
                'type_bus_id' => 4,
                'departure_date' => $date->toDateString(),
                'departure_time' => '19:30:00',
                'arrive_time' => '05:00:00',
                'boarding_location' => 'Kantor Perwakilan Aneka (Ruko Kompleks Terminal Dangge)',
                'drop_location' => 'Perwakilan Aneka Transport (Maccini Sawah), Perwakilan Terminal Daya',
                'price' => 230000,
                // 'booked_seats' => implode(',', range(11, 15)),
            ]);
        }
    }
}
