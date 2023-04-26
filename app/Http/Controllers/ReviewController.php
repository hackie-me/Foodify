<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    // Function to show Reviews Page
    public function index()
    {
        return view('pages.customers.review');
    }
}
