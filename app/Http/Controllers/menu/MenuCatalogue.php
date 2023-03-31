<?php

namespace App\Http\Controllers\menu;

use App\Http\Controllers\Controller;

class MenuCatalogue extends Controller
{
    // Function to show the catalogue page
    public function index()
    {
        return view("pages.product.catalogue");
    }
}
