<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\PropertyImages;

class PropertyImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [
            [
                'property_id' => '1',
                'images' => [
                    'IMG-20230321-WA0002.jpg',
                    'IMG-20230321-WA0003.jpg',
                    'IMG-20230321-WA0004.jpg',
                ],
            ],
            [
                'property_id' => '2',
                'images' => [
                    'IMG-20230321-WA0005.jpg',
                    'IMG-20230321-WA0006.jpg',
                    'IMG-20230321-WA0007.jpg',
                ],
            ],
            [
                'property_id' => '3',
                'images' => [
                    'IMG-20230321-WA0008.jpg',
                    'IMG-20230321-WA0009.jpg',
                    'IMG-20230321-WA0010.jpg',
                ],
            ]
        ];

        foreach ($images as $image) {
            PropertyImages::create([
                'property_id' => $image['property_id'],
                'images' => json_encode($image['images']),
            ]);
        } 
    }
}
