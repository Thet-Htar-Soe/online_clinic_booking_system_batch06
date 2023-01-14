<?php

namespace App\Contracts\Dao\Patient;

use Illuminate\Http\Request;

/**
 * Interface for Data Accessing Object of patient
 */
interface PatientDaoInterface
{
    /**
     * To show patient view
     * 
     * @return View patients
     */
    public function index();

    /**
     * To show patient by id
     * @return View patients
     */
    public function show($id);
}
