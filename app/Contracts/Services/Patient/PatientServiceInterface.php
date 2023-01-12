<?php

namespace App\Contracts\Services\Patient;

use Illuminate\Http\Request;

/**
 * Interface for patient service
 */
interface PatientServiceInterface
{
    /**
     * To show create patient view
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
