<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDoctorRequest extends FormRequest
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
            'name' => "required|regex:/^[a-zA-Z ]*$/",
            'email' => "required|email",
            'degree' => "required",
            'department' => "required",
            'experience' => "required|numeric",
            'specialist' => "required",
            'date' => "required|date|before:today",
            'phone' => "nullable",
            'gender' => "required|max:1",
            'address' => "nullable",
            'about_me' => "nullable",
            'picture' => "image|mimes:jpeg,jpg,png|max:2048",
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
            'date.required' => "Enter Date Of Birth!",
            'date.before' => "Your Date Of Birth Is Invalid!",
            'gender.required' => "Select Gender!",
            'is_active.required' => "Select Status!",
        ];
    }
}
