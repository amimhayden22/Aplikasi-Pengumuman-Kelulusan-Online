<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = [
        'nisn', 'name', 'date_of_birth', 'gender', 'attachment', 'grade_id'
    ];
}
