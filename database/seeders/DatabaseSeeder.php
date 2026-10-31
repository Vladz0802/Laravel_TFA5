<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    // `php artisan db:seed` runs this, which runs the two seeders below.
    public function run(): void
    {
        $this->call([
            CustomerSeeder::class,
            UserSeeder::class,
        ]);
    }
}
