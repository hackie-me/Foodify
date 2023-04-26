<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialController extends Controller
{
    // Function to show SocialController Page
    public function index()
    {
        return view('pages.social');
    }
}
