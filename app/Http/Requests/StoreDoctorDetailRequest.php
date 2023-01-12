<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDoctorDetailRequest extends FormRequest
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
            'doctor_id' => "required",
            'name' => "required|min:3|max:100",
            'email' => "required",
            'password' => "required",
            'degree' => "required",
            'department' => "required",
            'experience' => "required",
            'specialist' => "required",
            'dob' => "date|nullable",
            'phone' => "min:11|max:13|nullable",
            'gender' => "max:1",
            'address' => "nullable",
            'about_me' => "nullable",
            'profile_img' => "nullable"
        ];
    }
}
