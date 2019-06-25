<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class ThirtyPercentMark extends Model
{
    const SEMESTER = [
        1 => '1st Semester',
        2 => '2nd Semester',
        3 => '3rd Semester',
        4 => '4th Semester',
        5 => '5th Semester',
        6 => '6th Semester',
        7 => '7th Semester',
        8 => '8th Semester',
    ];

    public static function getSemester($semester)
    {
        return self::SEMESTER[$semester];
    }
}
