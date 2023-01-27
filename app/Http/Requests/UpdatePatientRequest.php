<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePatientRequest extends FormRequest
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
            'email' => 'required',
            'phone' => 'required|numeric|regex:/^([0]){1}([9]){1}([0-9]){9}/u|digits:11',
            'age' => 'required|digits:2',
            'gender' => 'required',
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
            'name.required' => 'Enter a name!',
            'email.required' => 'Enter an email!',
            'phone.required' => 'Enter phone',
            'phone.numeric' => 'Invalid Phone Number!!!',
            'phone.regex' => 'Invalid Phone Format!!!',
            'age.required' => 'Enter Age!',
            'age.digits' => 'Invalid Age!',
            'address.required' => 'Enter address',
            'gender.required' => 'Enter gender',
        ];
    }
}
