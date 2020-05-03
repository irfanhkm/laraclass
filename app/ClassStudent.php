<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassStudent extends Model
{
    protected $table = 'class_student';

    public function class()
    {
        return $this->belongsTo(ClassTable::class, 'class_id', 'id');
        // return $this->belongsTo(ClassTable::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }
}
