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
            'name' => "required|regex:/^[a-zA-Z ]*$/",
            'email' => "required|unique:doctor_details|email",
            'password' => "required",
            'degree' => "required|regex:/^[A-Za-z. -]*$/",
            'department' => "required",
            'experience' => "required|numeric",
            'specialist' => "required",
            'date' => "required|date",
            'phone' => "nullable|numeric|digits:11",
            'gender' => "required|max:1",
            'address' => "nullable",
            'about_me' => "nullable",
        ];
    }
}
