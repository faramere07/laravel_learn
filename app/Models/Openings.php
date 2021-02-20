<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Openings extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'startTime',
        'endTime',
        'category',
        'description',
        'salary',
        'jobType',
    ];
}
