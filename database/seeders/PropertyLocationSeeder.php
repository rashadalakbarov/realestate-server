<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\PropertyLocation;

class PropertyLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            [
                'property_id' => '1',
                'country' => '8',
                'state' => '2',
                'city' => '5',
                'location' => 'Şüvəlan qəs',
            ],
            [
                'property_id' => '2',
                'country' => '8',
                'state' => '4',
                'city' => '7',
                'location' => 'Lermontov küç',
            ],
            [
                'property_id' => '3',
                'country' => '8',
                'state' => '9',
                'city' => '20',
                'location' => 'Ülütürk küç',
            ]
        ];

        foreach ($locations as $location) {
            PropertyLocation::create([
                'property_id' => $location['property_id'],
                'country' => $location['country'],
                'state' => $location['state'],
                'city' => $location['city'],
                'location' => $location['location'],
            ]);
        } 
    }
}
