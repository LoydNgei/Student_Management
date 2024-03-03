<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Create Form

    public function showform() {
        return view('users.register');
    }


    // Register User
    public function register(Request $request) {
        $formFields = $request->validate([
            'registration_number' => 'required',
            'password' => 'required'
        ]);

        // Create a new User instance

        $user = new User();
        $user->registration_number = $formFields['registration_number'];
        $user->password = bycrpt($formFields['password']);
        $user->save();

        // Redirect the user after registration
        return redirect('/')->with('message', 'User Registered successfully');
    }


    public function login(Request $request) {
        $formFields = $request->validate([
            'Registration Number' => 'required',
            'password' => 'required' 
        ]);

        if(auth()->attempt($formFields)) {
            return redirect('/')->with('message', 'You are now logged in');
        }
        return back()->withErrors('Invalid credentials');

    }


}
