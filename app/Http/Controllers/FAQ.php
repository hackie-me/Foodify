<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FAQ extends Controller
{
    // Function to show FAQ Page
    public function index(){
        return view('pages.faq');
    }
}
