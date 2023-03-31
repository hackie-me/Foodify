<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Email extends Controller
{
    // Function to show Email Page
    public function index()
    {
        return view('app.email');
    }
}
