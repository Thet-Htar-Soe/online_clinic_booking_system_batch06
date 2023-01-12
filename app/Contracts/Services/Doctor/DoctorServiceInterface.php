<?php

namespace App\Contracts\Services\Doctor;

use App\Http\Requests\StoreDoctorRequest;

/**
 * Interface for doctor service
 */
interface DoctorServiceInterface
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
