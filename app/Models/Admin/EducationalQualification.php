<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class EducationalQualification extends Model
{
    protected $fillable = [
        'student_id',
        'ssc_board',
        'ssc_institute',
        'ssc_group',
        'ssc_year',
        'ssc_roll',
        'ssc_result',
        'hsc_board',
        'hsc_institute',
        'hsc_group',
        'hsc_year',
        'hsc_roll',
        'hsc_result',
    ];
    public function getSscBoardAttribute($value)
    {
        return ucwords($value);
    }
    public function getHscBoardAttribute($value)
    {
        return ucwords($value);
    }
    public function getSscGroupAttribute($value)
    {
        return ucwords($value);
    }
    public function getHscGroupAttribute($value)
    {
        return ucwords($value);
    }
}
