<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecturers;

class LecturerController extends Controller
{
    public function index($lecturer) {
        return view('lecturers.home');
    }
}
