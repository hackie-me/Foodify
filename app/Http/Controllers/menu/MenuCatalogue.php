<?php

namespace App\Http\Controllers\menu;

use App\Http\Controllers\Controller;
use App\Models\Products;

class MenuCatalogue extends Controller
{
    // Function to show the catalogue page
    public function index()
    {
        // Get All Products
        $products = Products::all();
        return view("pages.product.catalogue")->with(compact("products"));
    }
}
