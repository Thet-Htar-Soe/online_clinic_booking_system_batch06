<?php

namespace App\Imports;

use App\Models\Medicine;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class MedicinesImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $medicines = new Medicine([
            "name" => $row['name'],
            "classification" => $row['classification'],
            "symptom" => $row['symptom'],
            "treatment" => $row['treatment'],
            "quantity" => $row['quantity'],
            "price" => $row['price'],
        ]);
        return $medicines;
    }

    public function rules(): array
    {
        return [
            "name" => "required",
            "classification" => "required",
            "symptom" => "required",
            "treatment" => "required",
            "quantity" => "required",
            "price" => "required",
        ];
    }

    public function customValidationMessages()
    {
        return [
            "name.required" => "Name Field Is Required!!!",
            "classification.required" => "Classification Field Is Required!!!",
            "symptom.required" => "Symptom Field Is Required!!!",
            "treatment.required" => "Treatment Field Is Required!!!",
            "quantity.required" => "Quantity Field Is Required!!!",
            "price.required" => "Price Field Is Required!!!",
        ];
    }
}
