<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456789'), // Use Hash::make for password hashing
            'role_id' => 1,
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('123456789'), // Use Hash::make for password hashing
            'role_id' => 0, // Assuming a different role ID for regular users
        ]);

        User::create([
            'name' => 'company',
            'email' => 'company@gmail.com',
            'password' => Hash::make('123456789'), // Use Hash::make for password hashing
            'role_id' => 2, // Assuming a different role ID for regular users
        ]);
    }
}
