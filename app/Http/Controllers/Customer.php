<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Customer extends Controller
{
    // Function to show Customers List
    public function index()
    {
        return view('pages.customers.list');
    }

    // Function to show Customers Review Page
    public function showCustomerReview($id)
    {
        return view('pages.customers.review');
    }
}
