<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\ProfileUser;

class ProfileUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'İsmayıl',
                'phone' => '0778597512',
                'status' => '0',
                'email' => 'ismail@gmail.com',
            ],
            [
                'name' => 'Akşin',
                'phone' => '0123478591',
                'status' => '0',
                'email' => 'aksin.fateh@gmail.com',
            ],
            [
                'name' => 'MS Group',
                'phone' => '0552740908',
                'status' => '1',
                'email' => 'ms-group@gmail.com',
            ]
        ];

        foreach ($users as $user) {
            ProfileUser::create([
                'name' => $user['name'],
                'phone' => $user['phone'],
                'status' => $user['status'],
                'email' => $user['email'],
            ]);
        } 
    }
}
