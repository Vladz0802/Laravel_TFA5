<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    // The same sample users that TFA5 kept in a static array.
    public function run(): void
    {
        $users = [
            ['username' => 'admin',    'full_name' => 'Admin User'],
            ['username' => 'cashier1', 'full_name' => 'Pedro Ramos'],
            ['username' => 'cashier2', 'full_name' => 'Grace Lim'],
            ['username' => 'manager',  'full_name' => 'Rico Bautista'],
            ['username' => 'stock1',   'full_name' => 'Nina Castillo'],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
