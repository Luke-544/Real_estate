<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Replace with your User model namespace

class SignupController extends Controller
{
    public function showSignupForm()
    {
        return view('signup'); // Replace 'signup' with your signup blade view name
    }

    public function signup(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create a new user record
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Optionally, you can authenticate the user after registration
        // auth()->login($user);

        // Redirect or return a response as needed
        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }
}
