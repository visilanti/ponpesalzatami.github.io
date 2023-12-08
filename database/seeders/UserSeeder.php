<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            'name' => 'silvia',
            'email' => 'silvia21@gmail.com',
            'password' => \bcrypt('silvia21')
        ];

        User::insert($user);
    }
}
