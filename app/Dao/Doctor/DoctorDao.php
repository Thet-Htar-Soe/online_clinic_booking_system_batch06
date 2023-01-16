<?php

namespace App\Dao\Doctor;

use App\Contracts\Dao\Doctor\DoctorDaoInterface;
use App\Http\Requests\StoreDoctorRequest;
use App\Models\Doctor;
use App\Models\DoctorDetail;

/**
 * Data accessing object for doctor
 */
class DoctorDao implements DoctorDaoInterface
{
     /**
     * To get doctor list
     * @return $doctors
     */
    public function index()
    {
        $doctors =  Doctor::paginate(5);
        return $doctors;
    }
     /**
     * To show doctor detail by id
     * @param string $id doctor id
     */
    public function show($id)
    {
        $doctor = Doctor::where('id', $id)->firstOrFail();
        return $doctor;
    }
}
