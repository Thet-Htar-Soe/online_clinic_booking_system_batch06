<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMedicineRequest extends FormRequest
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
            "name" => "required",
            "classification" => "required",
            "symptom" => "required",
            "treatment" => "required",
            "quantity" => "required",
            "price" => "required",
            "category_id" => "required",
        ];
    }

    public function messages() 
    {
        return [
            "name.required" => "Please Enter Brand Name!!!",
            "classification.required" => "Please Enter Classification!!!",
            "symptom.required" => "Please Enter Symptom!!!",
            "treatment.required" => "Please Enter Treatment!!!",
            "quantity.required" => "Please Enter Quantity!!!",
            "price.required" => "Please Enter Price!!!",
            "category_id.required" => "Please Choose Category!!!",
        ];
    }
}
