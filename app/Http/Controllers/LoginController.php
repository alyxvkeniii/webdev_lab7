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
    // Validate login credentials
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required|min:5',
    ]);

    if ($validator->fails()) {
        return redirect()->route('login')->withErrors($validator)->withInput();
    }

    // Check if the credentials match any entry in the login table
    $user = \DB::table('login')->where('email', $request->email)->first();

    if ($user && \Hash::check($request->password, $user->password)) {
        // Successful login
        return redirect()->intended('/dashboard');
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
            'email' => 'required|email|max:255|unique:login,email',
            'password' => 'required|min:5|confirmed',
        ]);
    
        if ($validator->fails()) {
            return redirect()->route('sign-up')->withErrors($validator)->withInput();
        }
    
        // Insert the new user into the database
        \DB::table('login')->insert([
            'email' => $request->email,
            'password' => bcrypt($request->password), // Hash the password
            'created_at' => now(), // Optionally include timestamps
            'updated_at' => now(),
        ]);
    
        // Redirect to the dashboard after successful sign-up
        return redirect('/dashboard')->with('success', 'Account created successfully!');
    }
}