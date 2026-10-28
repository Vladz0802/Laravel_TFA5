<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    // Shows the Customer Accounts page (/customers).
    public function index()
    {
        // Static array used as a temporary data source (no database yet).
        $customers = [
            ['id' => 1, 'name' => 'Maria Santos',    'email' => 'maria.santos@example.com',    'phone' => '0917-111-2222', 'city' => 'Makati'],
            ['id' => 2, 'name' => 'Juan Dela Cruz',  'email' => 'juan.delacruz@example.com',   'phone' => '0918-222-3333', 'city' => 'Quezon City'],
            ['id' => 3, 'name' => 'Ana Reyes',       'email' => 'ana.reyes@example.com',       'phone' => '0919-333-4444', 'city' => 'Taguig'],
            ['id' => 4, 'name' => 'Carlo Mendoza',   'email' => 'carlo.mendoza@example.com',   'phone' => '0920-444-5555', 'city' => 'Pasig'],
            ['id' => 5, 'name' => 'Liza Villanueva', 'email' => 'liza.villanueva@example.com', 'phone' => '0921-555-6666', 'city' => 'Manila'],
        ];

        return view('customers', ['customers' => $customers]);
    }
}
