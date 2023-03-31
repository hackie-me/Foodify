<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Invoice extends Controller
{
    // Function to show the invoice page
    public function index()
    {
        return view('pages.invoice.list');
    }

    // Function to show the invoice Details page
    public function showInvoiceDetails(int $id)
    {
        return view('pages.invoice.details');
    }
}
