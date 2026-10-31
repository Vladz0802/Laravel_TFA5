<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    // The same sample customers that TFA5 kept in a static array.
    public function run(): void
    {
        $customers = [
            ['full_name' => 'Maria Santos',    'email' => 'maria.santos@example.com',    'phone' => '0917-111-2222'],
            ['full_name' => 'Juan Dela Cruz',  'email' => 'juan.delacruz@example.com',   'phone' => '0918-222-3333'],
            ['full_name' => 'Ana Reyes',       'email' => 'ana.reyes@example.com',       'phone' => '0919-333-4444'],
            ['full_name' => 'Carlo Mendoza',   'email' => 'carlo.mendoza@example.com',   'phone' => '0920-444-5555'],
            ['full_name' => 'Liza Villanueva', 'email' => 'liza.villanueva@example.com', 'phone' => '0921-555-6666'],
        ];

        foreach ($customers as $customer) {
            Customer::create($customer);
        }
    }
}
