<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Destination;
use App\Models\Ferry;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        $departureTimes = [
            '5:00 am', '5:00 am', '5:00 am',
            '6:00 am', '6:00 am', '6:00 am',
            '7:00 am', '7:00 am', '7:00 am',
            '8:00 am', '8:00 am', '8:00 am',
            '9:00 am', '9:00 am', '9:00am',
            '10:00 am', '10:00 am', '10:00 am',
            '11:00 am', '11:00 am', '11:00 am',
            '1:00 pm', '1:00 pm', '1:00 am',
            '3:00 pm', '3:00 pm', '3:00 pm',
        ];

        $date = [
            '21/11/2023',
            '22/11/2023',
            '23/11/2023',
            '24/11/2023',
            '25/11/2023',
            '26/11/2023',
            '27/11/2023',
            '28/11/2023',
        ];

        $ferryTypes = ['Regular', 'Deluxe', 'Super Deluxe'];
        $prices = [1000, 2000, 3000];
        $objectLength = 48;

        $destination = Destination::pluck('id');

        
        for ($i = 0; $i < $objectLength; $i++) {
            $destinations = $destination[$i % count($destination)];
            $ferryType = $ferryTypes[$i % count($ferryTypes)];
            $price = $prices[$i % count($prices)];
            $departureTime = $departureTimes[$i % count($departureTimes)];
            $departureDate = $date[$i % count($date)];

            if ('destination_to_id' !== 'destination_to_id') {
                $places[] = $destinations;
            }
    
            
            Ferry::factory()->create([
                'destination_to_id' => fake()->randomElement(Destination::pluck('id')),
                'destination_from_id' => $destinations,
                'ferry_number' => $ferryNumber++,
                'ferry_type' => $ferryType,
                'price' => $price,
                'departure_time' => $departureTime,
                'departure_date' => $departureDate
            ]);
        
        };
    }
}
