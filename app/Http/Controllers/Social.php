<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Social extends Controller
{
    // Function to show Social Page
    public function index()
    {
        return view('pages.social');
    }
}
