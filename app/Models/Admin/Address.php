<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'student_id',
        'present_village',
        'present_post_office',
        'present_post_code',
        'present_upazila',
        'present_district',
        'permanent_village',
        'permanent_post_office',
        'permanent_post_code',
        'permanent_upazila',
        'permanent_district',
    ];
}
