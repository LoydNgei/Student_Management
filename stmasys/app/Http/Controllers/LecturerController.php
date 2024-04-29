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

        $course = Lecturer::get('course_taught');

        // Fetch courses from the DB and group by year
        $coursesByYear = Lecturer::orderBy('year')->get()->groupBy('year');

        $years = [1, 2, 3, 4];

        return view('lecturers.home', compact('lecturers', 'years', 'coursesByYear'));
    }
}
