<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'                  => 'required|min:2|max:50',
            'email'                 => 'required|email|unique:students',
            'password'              => 'required|min:6',
            'avatar'                => 'required|image|mimes:jpeg,png,jpg|max:300',
            'batch'                 => 'required|min:2',
            'class_roll'            => 'required|numeric',
            'exam_roll'             => 'required|numeric',
            'registration_no'       => 'required|min:2|unique:students',
            'gender'                => 'required|numeric',
            'phone_no'              => 'required|min:6',
            'blood_group'           => 'required|numeric',
            'religion'              => 'required|min:3',
            'dob'                   => 'required',
            'nationality'           => 'required|min:3',

            'ssc_board'             => 'required|min:3',
            'ssc_institute'         => 'required|min:3',
            'ssc_group'             => 'required|min:3',
            'ssc_year'              => 'required|numeric|digits:4',
            'ssc_roll'              => 'required|numeric',
            'ssc_result'            => 'required',
            'hsc_board'             => 'required',
            'hsc_institute'         => 'required',
            'hsc_group'             => 'required',
            'hsc_year'              => 'required|numeric|digits:4',
            'hsc_roll'              => 'required|numeric',
            'hsc_result'            => 'required',

            'guardian_name'         => 'required|min:2|max:50',
            'guardian_contact'      => '',
            'relationship'          => '',

            'present_village'       => 'required|min:3',
            'present_post_office'   => '',
            'present_post_code'     => '',
            'present_upazila'       => 'required|min:3',
            'present_district'      => 'required|min:3',
            'permanent_village'     => 'required|min:3',
            'permanent_post_office' => '',
            'permanent_post_code'   => '',
            'permanent_upazila'     => 'required|min:3',
            'permanent_district'    => 'required|min:3',
        ];
    }
}
