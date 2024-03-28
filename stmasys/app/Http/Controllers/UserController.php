<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Show Login Form

    public function showLoginForm() {
        return view('users.login');
    }


    // Show Register Form

    public function showRegistrationForm() {
        return view('users.register');
    }


    // Register User

    public function registerForm(Request $request) {
        $formFields = $request->validate([
            'registration_number' => 'required',
            'password' => 'required',
            'confirm_password' => 'required'
        ]);


        // Create a new User instance

        $user = new User();
        $user->registration_number = $formFields['registration_number'];
        $user->password = bcrypt($formFields['password']);
        $user->confirm_password = $formFields['confirm_password'];
        $user->save();

        // Redirect the user after registration
        return redirect->route('login')->with('message', 'User Registered successfully');
    }


    // Log in process

    public function loginForm(Request $request) {
        $formFields = $request->validate([
            'registration_number' => 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            return redirect('/')->with('message', 'You are now logged in');
        }
        return back()->withErrors('Invalid credentials');

    }
}
