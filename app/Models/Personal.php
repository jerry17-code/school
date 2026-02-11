<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table = 'personals';

    protected $fillable = [
        'name',
        'city',
        'email',
        'phone',
    ];
}
