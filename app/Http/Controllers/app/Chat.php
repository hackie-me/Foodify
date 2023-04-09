<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Chat extends Controller
{
    // Function to show Chat Page
    public function index()
    {
        return view('app.chat.index');
    }
}
