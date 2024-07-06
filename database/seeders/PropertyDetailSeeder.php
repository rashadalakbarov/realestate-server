<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\PropertyDetail;

class PropertyDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $details = [
            [
                'property_id' => '1',
                'room_count' => '5',
                'floor' => '',
                'floor_count' => '2',
                'land_area' => '12',
                'repair' => '1',
                'build_type' => '',
            ],
            [
                'property_id' => '2',
                'room_count' => '',
                'floor' => '3',
                'floor_count' => '',
                'land_area' => '7.2',
                'repair' => '1',
                'build_type' => '',
            ],
            [
                'property_id' => '3',
                'room_count' => '4',
                'floor' => '',
                'floor_count' => '1',
                'land_area' => '3',
                'repair' => '1',
                'build_type' => '',
            ]
        ];

        foreach ($details as $detail) {
            PropertyDetail::create([
                'property_id' => $detail['property_id'],
                'room_count' => $detail['room_count'],
                'floor' => $detail['floor'],
                'floor_count' => $detail['floor_count'],
                'land_area' => $detail['land_area'],
                'repair' => $detail['repair'],
                'build_type' => $detail['build_type'],
            ]);
        } 
    }
}
