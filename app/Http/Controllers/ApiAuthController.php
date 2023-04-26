<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class ApiAuthController extends Controller
{
    /*
    Authentication Functions for Customers
    -------------------------------------
    1. doCustomerLogin
    2. doCustomerRegister
    3. doCustomerLogout
    4. doCustomerForgotPassword
    5. doCustomerResetPassword
    */
    // Function to do Log in for Customer
    public function doCustomerLogin(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string',
                'remember_me' => 'boolean',
                'role_id' => 'required',
            ]);

            // Only Customer can log in
            if ($request->role_id != 3) {
                return response(['error' => 'Unauthorised']);
            }

            if (auth()->attempt($request->only('email', 'password'), $request->filled('remember_me'))) {
                $user = auth()->user();
                $token = $user->createToken('admin')->accessToken;
                return response(['user' => $user, 'token' => $token]);
            } else {
                return response(['error' => 'Unauthorised']);
            }
        } catch (Exception $e) {
            return response(['error' => $e->getMessage()], 422);
        }

    }

    // Function to do Register for Customer
    public function doCustomerRegister(Request $request)
    {
        try {
            $request->validate([
                'first_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required'],
                'role_id' => ['required'],
            ]);

            // generate random username for user
            $username = $request['first_name'] . $request['last_name'] . rand(100, 999);
            // make username lowercase
            $username = strtolower($username);

            // create user
            $user = User::create([
                'first_name' => $request['first_name'],
                'last_name' => $request['last_name'],
                'username' => $username,
                'role_id' => 3,
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);

            // create token
            $token = $user->createToken('admin')->accessToken;
            return response(['user' => $user, 'token' => $token]);
        } catch (Exception $e) {
            return response(['error' => $e->getMessage()], 422);
        }
    }

    // Function to do Log out for Customer
    public function doCustomerLogout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    // Function to do Forgot Password for Customer
    public function doCustomerForgotPassword(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user) {
            $token = app('auth.password.broker')->createToken($user);
            $user->sendPasswordResetNotification($token);
            return response()->json([
                'message' => 'Reset password link sent on your email id.'
            ]);
        }
        return response()->json([
            'message' => 'Email not found.'
        ], 404);
    }

    // Function to do Reset Password for Customer
    public function doCustomerResetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $passwordReset = PasswordReset::where([
            ['token', $request->token],
            ['email', $request->email]
        ])->first();

        if (!$passwordReset) {
            return response()->json([
                'message' => 'This password reset token is invalid.'
            ], 404);
        }

        $user = User::where('email', $passwordReset->email)->first();
        if (!$user) {
            return response()->json([
                'message' => 'We can not find a user with that email address.'
            ], 404);
        }

        $user->password = Hash::make($request->password);
        $user->save();
        $passwordReset->delete();

        $user->notify(new PasswordResetSuccess($passwordReset));

        return response()->json($user);
    }

}
