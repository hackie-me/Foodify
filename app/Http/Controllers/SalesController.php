<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    // Function to show SalesController Page
    public function index()
    {
        return view('pages.sales');
    }
}
