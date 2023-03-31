<?php

namespace App\Http\Controllers\menu;

use App\Http\Controllers\Controller;

class MenuGrid extends Controller
{
    // Function to show the menu grid
    public function index()
    {
        return view("pages.product.grid");
    }
}
