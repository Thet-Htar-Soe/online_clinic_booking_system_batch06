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
     * To save doctor
     * @param StoreDoctorRequest $request request with inputs
     * @return Object $doctor saved doctor
     */
    public function store(StoreDoctorRequest $request)
    {
        $name = request()->name;
        $doctor_id = "1";
        $email = request()->email;
        $password = request()->password;
        $degree = request()->degree;
        $department = request()->department;
        $experience = request()->experience;
        $specialist = request()->specialist;
        $dob = request()->dob;
        $phone = request()->phone;
        $gender = request()->gender;
        $address = request()->address;
        $about_me = request()->about_me;
        $profile_img = request()->profile_img;
        DoctorDetail::create([
            'doctor_id' => $doctor_id,
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'degree' => $degree,
            'department' => $department,
            'experience' => $experience,
            'specialist' => $specialist,
            'dob' => $dob,
            'phone' => $phone,
            'gender' => $gender,
            'address' => $address,
            'about_me' => $about_me,
            'profile_img' => $profile_img,
        ]);
        return $name;
    }
     /**
     * To show doctor detail by id
     * @param string $id doctor id
     */
    public function show($id)
    {
        $doctor = Doctor::where('id', $id)->first();
        return $doctor;
    }
}
