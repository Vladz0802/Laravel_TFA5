<?php

namespace App\Http\Controllers;

use App\Models\Customer;

class CustomerController extends Controller
{
    // Shows the Customer Accounts page (/customers).
    public function index()
    {
        // Eloquent gets every row from the customers table (replaces the static array).
        $customers = Customer::all();

        return view('customers', ['customers' => $customers]);
    }
}
