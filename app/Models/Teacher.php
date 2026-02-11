<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'name',
        'city',
        'email',
        'phone',
        'school_name',
        'joining_date',
        'subjects',
        'salary'
    ];
}
