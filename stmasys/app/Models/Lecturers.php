<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;

    protected $fillable = [
        'lecturer_name',
        'course_taught'
    ];

    public static function createDummyData()
    {
        // Dummy data for 9 lecturers
        $dummyData = [
            ['lecturer_name' => 'John Doe', 'course_taught' => 'Computer Science'],
            ['lecturer_name' => 'Jane Smith', 'course_taught' => 'Mathematics'],
        ];
    }
}
