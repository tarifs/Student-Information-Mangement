<?php

namespace App\Models\Admin;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use Notifiable;

    const BLOOD_GROUP = [
        '1' => 'A+',
        '2' => 'A-',
        '3' => 'B+',
        '4' => 'B-',
        '5' => 'O+',
        '6' => 'O-',
        '7' => 'AB+',
        '8' => 'AB-',
    ];

    const GENDER = [
        '1' => 'Male',
        '2' => 'Female',
        '3' => "Other's",
    ];

    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'batch',
        'class_roll',
        'exam_roll',
        'registration_no',
        'gender',
        'phone_no',
        'blood_group',
        'religion',
        'dob',
        'nationality'
    ];

    /**
     * Get the Address record associated with the model.
     */
    public function address()
    {
        return $this->hasOne(Address::class);
    }

    /**
     * Get the Guardian record associated with the model.
     */
    public function guardian()
    {
        return $this->hasOne(Guardian::class);
    }

    /**
     * Get the EducationalQualification record associated with the model.
     */
    public function educationalQualification()
    {
        return $this->hasOne(EducationalQualification::class);
    }

    public function getAvatarAttribute($value)
    {
        return asset('uploads/avatar/' . $value);
    }

    public function getGender()
    {
        return self::GENDER[$this->gender];
    }

    public function getBloodGroup()
    {
        return self::BLOOD_GROUP[$this->blood_group];
    }

}
