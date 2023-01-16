<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
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
            "patientName" => "required",
            "doctorName" => "required"
        ];
    }

    public function messages() 
    {
        return [
            "patientName.required" => "Please Enter Your Name!!!",
            "doctorName.required" => "Please Choose Doctor!!!",
        ];
    }
}
