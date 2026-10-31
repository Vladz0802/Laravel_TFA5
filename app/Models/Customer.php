<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // Columns that can be filled in with Customer::create([...]).
    protected $fillable = ['full_name', 'email', 'phone'];
}
