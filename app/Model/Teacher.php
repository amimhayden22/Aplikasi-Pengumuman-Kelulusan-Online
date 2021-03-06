<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';
    protected $fillable = [
        'name', 'grade_id'
    ];

    public function grades()
    {
        return $this->belongsTo('App\Model\Grade', 'grade_id');
    }
}
