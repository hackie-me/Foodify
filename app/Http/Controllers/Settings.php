<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Settings extends Controller
{
    // Function to view settings Page
    public function index(){
        return view('pages.settings');
    }

    // Function to update Email Configuration
    public function updateEmailConfig(Request $request){
        $request->validate([
            'host' => 'required',
            'port' => 'required',
            'username' => 'required',
            'password' => 'required',
            'encryption' => 'required',
            'from_address' => 'required|email',
            'from_name' => 'required',
        ]);

        config([
            'mail.host' => $request->host,
            'mail.port' => $request->port,
            'mail.username' => $request->username,
            'mail.password' => $request->password,
            'mail.encryption' => $request->encryption,
            'mail.from.address' => $request->from_address,
            'mail.from.name' => $request->from_name,
        ]);

        return redirect()->back()->with('success', 'Email Configuration Updated Successfully');
    }

}
