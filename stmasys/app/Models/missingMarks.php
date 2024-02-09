<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class missingMarks extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'Reg No',
        'Unit Name and Course Code',
        'description'
    ];
    
}
