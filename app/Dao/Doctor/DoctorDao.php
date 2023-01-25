<?php

namespace App\Dao\Doctor;

use App\Contracts\Dao\Doctor\DoctorDaoInterface;
use App\Enums\DoctorGender;
use App\Models\Doctor;
use App\Models\DoctorDetail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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
        $doctors = Doctor::paginate(config('data.pagination'));
        return $doctors;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDoctorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store($request)
    {
        $doctor = Doctor::create([
            'is_active' => $request->is_active,
        ]);

        DoctorDetail::create([
            'doctor_id' => $doctor->id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'degree' => $request->degree,
            'department' => $request->department,
            'experience' => $request->experience,
            'specialist' => $request->specialist,
            'dob' => $request->date,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'address' => $request->address,
            'about_me' => $request->about_me,
            'profile_img' => $request->profile_img,
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
        $doctor = Doctor::where('id', $id)->firstorFail();
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
        if ($request->hasFile('picture')) {
            Storage::delete("public/doctors/" . $request->picture);
            $imageName = uniqid() . "image." . $request->file('picture')->extension();
            $request->picture->move(public_path('doctors'), $imageName);
        } else {
            $imageName = $request->image;
        }
        Doctor::where('id', $id)->update([
            'is_active' => $request->is_active,
        ]);
        DoctorDetail::where('doctor_id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'degree' => $request->degree,
            'department' => $request->department,
            'experience' => $request->experience,
            'specialist' => $request->specialist,
            'dob' => $request->date,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'address' => $request->address,
            'about_me' => $request->about_me,
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
    
    /**
     * To submit doctor login 
     * @param $request
     * @return View doctors 
     */
    public function login($request)
    {
        $doctor = DoctorDetail::where('email', $request->email)->first();
        if (collect($doctor)->isNotEmpty()) {
            if (Hash::check($request->password, $doctor->password)) {
                return $doctor;
            }
        }
    }
}
