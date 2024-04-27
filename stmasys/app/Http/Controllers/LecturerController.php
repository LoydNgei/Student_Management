<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecturer;
use App\Models\Course;

class LecturerController extends Controller
{
    public function index() {
        // Fetch lecturers
        $lecturers = Lecturer::paginate(6);

        // Fetch courses from the DB and group by year
        $coursesByYear = Lecturer::orderBy('year')->get()->groupBy('year');

        // $course = Lecturer::

        return view('lecturers.home', compact('lecturers', 'coursesByYear'));
    }
}
