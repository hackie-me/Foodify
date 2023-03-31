<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sales extends Controller
{
    // Function to show Sales Page
    public function index()
    {
        return view('pages.sales');
    }
}
