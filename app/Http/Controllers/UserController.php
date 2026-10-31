<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    // Shows the User Accounts page (/users).
    public function index()
    {
        // Eloquent gets every row from the users table (replaces the static array).
        $users = User::all();

        return view('users', ['users' => $users]);
    }
}
