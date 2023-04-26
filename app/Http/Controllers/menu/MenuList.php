<?php

namespace App\Http\Controllers\menu;

use App\Http\Controllers\Controller;

class MenuList extends Controller
{
    // Function to display the menu list
    public function index()
    {
        // Get All ProductsController
        $products = \App\Models\Products::all();
        return view("pages.product.list")->with(compact("products"));
    }
}
