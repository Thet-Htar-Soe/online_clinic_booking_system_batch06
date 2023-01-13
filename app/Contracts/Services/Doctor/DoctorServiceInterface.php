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
     * To show doctor detail by id
     * @param string $id doctor id
     */
    public function show($id);
}
