<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarksController extends Controller
{
    public function create() {
        return view('components.enquiryform');
    }
}
