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
