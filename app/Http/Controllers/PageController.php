<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    // Shows the landing page (/).
    public function home()
    {
        return view('home');
    }

    // Shows the about page (/about).
    public function about()
    {
        return view('about');
    }
}
