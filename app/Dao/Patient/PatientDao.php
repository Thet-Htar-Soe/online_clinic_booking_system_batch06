<?php

namespace App\Dao\Patient;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Contracts\Dao\Patient\PatientDaoInterface;

/**
 * Data accessing object for patient
 */
class PatientDao implements PatientDaoInterface
{
    /**
     * To show create patient view
     * 
     * @return View patients
     */
    public function index()
    {
        $patients =  Patient::all();
        return $patients;
    }

    /**
     * To show patient by id
     * @return View patients
     */
    public function show($id)
    {
        $patient = Patient::findOrFail($id);
        return $patient;
    }
}
