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

    /**
     * To submit patient create 
     * @param Request $request
     * @return View patients 
     */
    public function store(Request $request);

    /**
     * To submit patient login 
     * @param Request $request
     * @return View patients 
     */
    public function login(Request $request);

    /**
     * Show patients edit
     * 
     * @return View patients
     */
    public function edit($id);

    /**
     * Submit patient update
     * @param Request $request
     * @param $patientId
     * @return View patients
     */
    public function update($request, $id);

    /**
     * To delete patient by id
     * @return View patients
     */
    public function delete($id);
}
