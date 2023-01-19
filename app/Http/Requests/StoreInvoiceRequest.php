<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInvoiceRequest extends FormRequest
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
            'grand_total' => "required",
            'doctor_charges' => "required",
        ];
    }
    public function messages()
    {
        return [
            'grand_total.required' => 'Enter Total!',
            'doctor_charges.required' => 'Enter Doctor Charges!',
        ];
    }
}
