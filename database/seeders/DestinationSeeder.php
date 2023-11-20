<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Destination;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Destination::factory()->create([
            'place' => 'Manila'
        ]);
        Destination::factory()->create([
            'place' => 'Cagayan'
        ]);
        Destination::factory()->create([
            'place' => 'Davao'
        ]);
        Destination::factory()->create([
            'place' => 'Cebu'
        ]);
        Destination::factory()->create([
            'place' => 'Palawan'
        ]);
        Destination::factory()->create([
            'place' => 'Siargao'
        ]);
        Destination::factory()->create([
            'place' => 'Iloilo'
        ]);
        Destination::factory()->create([
            'place' => 'Boracay'
        ]);
        Destination::factory()->create([
            'place' => 'Bohol'
        ]);
        Destination::factory()->create([
            'place' => 'Surigao'
        ]);
    }
}
