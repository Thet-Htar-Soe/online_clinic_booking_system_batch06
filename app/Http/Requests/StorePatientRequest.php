<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePatientRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:patients',
            'password' => 'required',
            'phone' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'address' => 'required'
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Enter Name!',
            'email.required' => 'Enter Email!',
            'email.unique' => 'Email Already Exist!',
            'password.required' => 'Enter Password!',
            'phone.required' => 'Enter Phone!',
            'age.required' => 'Enter Age!',
            'address.required' => 'Enter Address!',
            'gender.required' => 'Enter Gender!',
        ];
    }
}
