<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    // Shows the User Accounts page (/users).
    public function index()
    {
        // Static array used as a temporary data source (no database yet).
        $users = [
            ['id' => 1, 'username' => 'admin',    'name' => 'Admin User',      'role' => 'Administrator', 'status' => 'Active'],
            ['id' => 2, 'username' => 'cashier1', 'name' => 'Pedro Ramos',     'role' => 'Cashier',       'status' => 'Active'],
            ['id' => 3, 'username' => 'cashier2', 'name' => 'Grace Lim',       'role' => 'Cashier',       'status' => 'Active'],
            ['id' => 4, 'username' => 'manager',  'name' => 'Rico Bautista',   'role' => 'Manager',       'status' => 'Active'],
            ['id' => 5, 'username' => 'stock1',   'name' => 'Nina Castillo',   'role' => 'Inventory',     'status' => 'Inactive'],
        ];

        return view('users', ['users' => $users]);
    }
}
