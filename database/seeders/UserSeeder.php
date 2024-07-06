<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Administration',
                'username' => 'admin',
                'status' => '0',
                'email' => 'admin@homez.com',
                'password' => 'admin',
            ],
            [
                'name' => 'micheal datson',
                'username' => 'user',
                'status' => '1',
                'email' => 'micheal.datson@gmail.com',
                'password' => 'password',
            ],
            [
                'name' => 'john alex',
                'username' => 'worker',
                'status' => '2',
                'email' => 'john.alex@homez.com',
                'password' => 'password',
            ]
        ];

        foreach ($users as $user) {
            User::create([
                'name' => $user['name'],
                'username' => $user['username'],
                'status' => $user['status'],
                'email' => $user['email'],
                'password' => Hash::make($user['password']),
            ]);
        } 
    }
}
