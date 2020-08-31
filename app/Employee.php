<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name',
        'current_salary',
        'image',
        'job_title',
        'job_type',
        'job_status',
    ];
}
