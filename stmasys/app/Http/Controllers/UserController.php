<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Show Login Form
    public function login() {
        return view('users.login');
    }

    // Show Register Form
    public function registration() {
        return view('users.register');
    }


    // Log in process

    public function loginPost(Request $request) {
        $formFields = $request->validate([
            'registration_number' => 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            return redirect('/home');
        }
        return back('/login')->withErrors('Invalid credentials');
    }


    // Register User
    public function registrationPost(Request $request) {
        $formFields = $request->validate([
            'registration_number' => 'required',
            'password' => 'required',
            'confirm_password' => 'required'
        ]);

        // Create a new User instance
        $user = new User();
        $user->registration_number = $formFields['registration_number'];
        $user->password = Hash::make($formFields['password']);
        $user->confirm_password = $formFields['confirm_password'];
        $user->save();

        if (!$user) {
            return back('/register')->withErrors('Registration failed. Try Again');
        }
        return redirect()->route('login')->with('message', 'User Registered successfully');
    }



    // Logout

    public function logout() {
        session:flush();
        Auth::logout();
        return redirect('/login');
    }
}