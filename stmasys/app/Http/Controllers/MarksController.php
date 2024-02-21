<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarksController extends Controller
{
    // The query form to be filled

    public function create() {
        return view('lecturers.queries');
    }
}
