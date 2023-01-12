<?php

namespace App\Contracts\Dao\Doctor;

use App\Http\Requests\StoreDoctorRequest;

/**
 * Interface for Data Accessing Object of doctor
 */
interface DoctorDaoInterface
{
   /**
     * To get doctor list
     * @return $doctors
     */
    public function index();

     /**
     * To save doctor
     * @param StoreDoctorRequest $request request with inputs
     * @return Object $doctor saved doctor
     */
    public function store(StoreDoctorRequest $request);

    /**
     * To show doctor detail by id
     * @param string $id doctor id
     */
    public function show($id);
}
