<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Todo extends Controller
{
    // Function to show Todo Page
    public function index()
    {
        return view('app.todo');
    }
}
