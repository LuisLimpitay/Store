<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run()
    {
        User::create([
            'name' => 'Axel Foli',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('55555555'),

        ]);
    }
}
