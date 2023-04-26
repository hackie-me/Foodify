<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FAQController extends Controller
{
    // Function to show FAQController Page
    public function index(){
        return view('pages.faq');
    }
}
