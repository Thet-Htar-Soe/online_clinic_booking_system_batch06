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
     * @param $id
     * @return View patients
     */
    public function show($id);

    /**
     * To submit patient create 
     * @param $request
     * @return View patients 
     */
    public function store($request);

    /**
     * Show patients edit
     * @param $id
     * @return View patients
     */
    public function edit($id);

    /**
     * Submit patient update
     * @param $request
     * @param $id
     * @return View patients
     */
    public function update($request, $id);

    /**
     * To delete patient by id
     * @param $id
     * @return View patients
     */
    public function delete($id);
}
