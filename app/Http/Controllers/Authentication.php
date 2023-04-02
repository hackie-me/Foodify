<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Authentication extends Controller
{
    // Function to view Login page
    public function viewLoginPage()
    {
        return view('pages.auth.login');
    }

    // Function to view Registration page
    public function viewRegistrationPage()
    {
        return view('pages.auth.register');
    }

    // Function to view Lockscreen Page
    public function viewLockscreenPage()
    {
        return view('pages.auth.lockscreen');
    }

    // Function to do Login
    public function doLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->intended();
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    // Function to do Register
    public function doRegister(Request $request)
    {

        $user = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string'],
        ]);

        // generate random username for user
        $username = $request['first_name'] . $request['last_name'] . rand(100, 999);
        // make username lowercase
        $username = strtolower($username);
        $user = (new User)->create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'username' => $username,
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        Auth::login($user, $remember = true);

        return redirect()->intended();
    }

    // Function to Log-out user
    public function doLogout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
