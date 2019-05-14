<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Results extends Model
{
    protected $fillable =[
        'student_name',
        'student_number',
        'student_marks'
    ];
}
