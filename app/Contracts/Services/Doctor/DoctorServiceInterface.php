<?php

namespace App\Contracts\Services\Doctor;

use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;

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
    /**
     * To edit doctor by id
     * @param string $id doctor id
     * * @return Object $doctor saved doctor
     */
    public function edit($id);

    /**
     * To update doctor by id
     * @param UpdateDoctorRequest $request request with inputs
     * @param string $id doctor id
     * @return Object $doctor Doctor Object
     */
    public function update(UpdateDoctorRequest $request, $id);
    /**
     * To delete doctor by id
     * @param string $id doctor id
     * @param string $id deleted doctor id
     */
    public function destroy($id);
}
