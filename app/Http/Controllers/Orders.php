<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Orders extends Controller
{
    // Function to show the orders page
    public function index(){
        return view("pages.orders");
    }
}
