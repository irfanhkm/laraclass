<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';

    protected $casts = [
        'date_in' => 'date'
    ];

    protected $fillable = ['name', 'age', 'date_in', 'address'];
}
