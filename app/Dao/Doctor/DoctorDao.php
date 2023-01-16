<?php

namespace App\Dao\Doctor;

use App\Contracts\Dao\Doctor\DoctorDaoInterface;
use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
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
        $doctors = Doctor::paginate(5);
        return $doctors;
    }
    public function store($request)
    {
        $doctor = Doctor::create([]);

        DoctorDetail::create([
            'doctor_id' => $doctor->id,
            'name' => request()->name,
            'email' => request()->email,
            'password' => request()->password,
            'degree' => request()->degree,
            'department' => request()->department,
            'experience' => request()->experience,
            'specialist' => request()->specialist,
            'dob' => request()->date,
            'phone' => request()->phone,
            'gender' => request()->gender,
            'address' => request()->address,
            'about_me' => request()->about_me,
            'profile_img' => request()->profile_img,
        ]);
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
    /**
     * To edit doctor by id
     * @param string $id doctor id
     * * @return Object $doctor saved doctor
     */
    public function edit($id)
    {
        $doctor = Doctor::where('id', $id)->first();
        return $doctor;
    }
    /**
     * To update doctor by id
     * @param UpdateDoctorRequest $request request with inputs
     * @param string $id doctor id
     * @return Object $doctor doctor Object
     */
    public function update($request, $id)
    {
        if (!$request->picture) {
            $imageName = "";
        } else {
            $imageName = time() . '.' . $request->picture->extension();
            $request->picture->move(public_path('doctors'), $imageName);
        }

        DoctorDetail::where('doctor_id', $id)->update([
            'name' => request()->name,
            'email' => request()->email,
            'degree' => request()->degree,
            'department' => request()->department,
            'experience' => request()->experience,
            'specialist' => request()->specialist,
            'dob' => request()->date,
            'phone' => request()->phone,
            'gender' => request()->gender,
            'address' => request()->address,
            'about_me' => request()->about_me,
            'profile_img' => $imageName,
        ]);
    }
    /**
     * To delete doctor by id
     * @param string $id doctor id
     * @param string $id deleted doctor id
     */
    public function destroy($id)
    {
        Doctor::where('id', $id)->delete();
    }
}
