<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Products extends Controller
{
    // Function to Display the Add Product Page
    public function showProductAddPage()
    {
        return view("pages.product.add");
    }
}
