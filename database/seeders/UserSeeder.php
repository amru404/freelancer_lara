<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'role' => 1,
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'user',
            'role' => 0,
            'email' => 'user@gmail.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'company',
            'role' => 2,
            'email' => 'company@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
