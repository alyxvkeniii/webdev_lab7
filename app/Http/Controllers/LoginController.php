<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $TestInfo = [
            [
                'email' => 'Hello@gmail.com',
                'password' => 'password',
            ],
            [
                'email' => 'Hi@gmail.com',
                'password' => 'password1',
            ],
            [
                'email' => 'Hey@gmail.com',
                'password' => 'password2',
            ],
        ];

        // Validate login credentials
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:5',
        ]);

        if ($validator->fails()) {
            return redirect()->route('login')->withErrors($validator)->withInput();
        }

        // Check if the credentials match any entry in TestInfo
        foreach ($TestInfo as $user) {
            if ($request->email === $user['email'] && $request->password === $user['password']) {
                // Successful login
                return redirect()->intended('/dashboard');
            }
        }

        // Failure to login
        return back()->withErrors(['email' => 'Wrong Email or Password'])->withInput();
    }

    public function showSignUpForm()
    {
        return view('sign-up');
    }

    public function signUp(Request $request)
    {
        // Validate the incoming data
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
            'password' => 'required|min:5|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->route('sign-up')->withErrors($validator)->withInput();
        }

        // Redirect to the dashboard after successful sign-up
        return redirect('/dashboard');
    }
}
