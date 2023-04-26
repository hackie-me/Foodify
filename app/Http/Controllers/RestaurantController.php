<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    // Function to show the restaurant page
    public function index()
    {
        return view('pages.restaurants');
    }
}
