<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDoctorRequest extends FormRequest
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
            'name' => "required",
            'email' => "required|email|unique:doctor_details",
            'password' => "required",
            'degree' => "required",
            'department' => "required",
            'experience' => "required|numeric",
            'specialist' => "required",
            'date' => "required|date|before:today",
            'phone' => "nullable|digits:11|regex:/^([0]){1}([9]){1}([0-9]){9}/u",
            'gender' => "required",
            'address' => "nullable",
            'about_me' => "nullable",
            'is_active' => "required",
        ];
    }
    public function messages()
    {
        return [
            'name.required' => "Enter Name!",
            'email.required' => "Enter Email!",
            'password.required' => "Enter Password!",
            'degree.required' => "Enter Degree!",
            'department.required' => "Choose Department!",
            'experience.required' => "Enter Experience!",
            'specialist.required' => "Choose Specialist!",
            'date.required' => "Enter Date of Birth!",
            'date.before' => "Your Date Of Birth Is Invalid!",
            'phone.digits' => "Enter only 11 Digits!",
            'gender.required' => "Select Gender!",
            'is_active.required' => "Select Status!",
        ];
    }
}
