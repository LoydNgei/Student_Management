<?php

namespace App\Http\Controllers;
use App\Models\Inquiry;

use Illuminate\Http\Request;

class InquiryController extends Controller
{
    // The query form to be filled

    public function inquiry() {
        return view('lecturers.queries');
    }

    public function inquirypost(Request $request) {
        $formFields = $request->validate([
            'name'=>'required',
            'email'=> 'required',
            'registration_number' => 'required',
            'message'=> 'required'
        ]);

        $inquiry = new Inquiry();
        $inquiry->name = $formFields['name'];
        $inquiry->email = $formFields['email'];
        $inquiry->registration_number = $formFields['registration_number'];
        $inquiry->message = $formFields['message'];
        $inquiry->save();

        if (!$inquiry) {
            return back('/inquirypost')->withErrors('Invalid response. Try again!');
        }

        return redirect()->route('home')->with('Message', 'Your query has been submitted successfully');
    }
}
