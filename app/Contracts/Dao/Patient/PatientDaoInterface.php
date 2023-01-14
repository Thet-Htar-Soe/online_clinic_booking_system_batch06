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
