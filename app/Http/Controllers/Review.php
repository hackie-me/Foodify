<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Review extends Controller
{
    // Function to show Reviews Page
    public function index()
    {
        return view('pages.customers.review');
    }
}
