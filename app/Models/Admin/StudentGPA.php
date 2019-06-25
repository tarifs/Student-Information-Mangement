<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class StudentGPA extends Model
{
    public function student()
    {
        return $this->belongsTo('App\Models\Admin\Student');
    }
}
