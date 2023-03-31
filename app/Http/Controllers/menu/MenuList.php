<?php

namespace App\Http\Controllers\menu;

use App\Http\Controllers\Controller;

class MenuList extends Controller
{
    // Function to display the menu list
    public function index()
    {
        return view("pages.product.list");
    }
}
