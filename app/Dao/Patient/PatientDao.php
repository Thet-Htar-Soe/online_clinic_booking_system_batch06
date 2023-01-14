<?php

namespace App\Dao\Patient;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Contracts\Dao\Patient\PatientDaoInterface;

/**
 * Data accessing object for patient
 */
class PatientDao implements PatientDaoInterface
{
    /**
     * To show create patient view
     * 
     * @return View patients
     */
    public function index()
    {
        $patients =  Patient::latest()->paginate(10);
        return $patients;
    }

    /**
     * To show patient by id
     * @return View patients
     */
    public function show($id)
    {
        $patient = Patient::findOrFail($id);
        return $patient;
    }

    /**
     * To submit patient create 
     * @param Request $request
     * @return View patients 
     */
    public function store(Request $request)
    {
        $name = request()->name;
        $email = request()->email;
        $password = request()->password;
        $phone = request()->phone;
        $age = request()->age;
        $gender = request()->gender;
        $address = request()->address;
        $blood_type = request()->blood_type;

        Patient::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'phone' => $phone,
            'age' => $age,
            'gender' => $gender,
            'address' => $address,
            'blood_type' => $blood_type,
        ]);
        return $name;
    }

    /**
     * To submit patient login 
     * @param Request $request
     * @return View patients 
     */
    public function login(Request $request)
    {
        $patient = Patient::where('email', $request->input('email'))->first();
        return $patient;
    }

    /**
     * Show patients edit
     * 
     * @return View patients
     */
    public function edit($id)
    {
        $patient = Patient::where('id', $id)->firstOrFail();
        return $patient;
    }

    /**
     * Submit patient update
     * @param Request $request
     * @param $patientId
     * @return View patients
     */
    public function update($request, $id)
    {
        $name = request()->name;
        $email = request()->email;
        $phone = request()->phone;
        $age = request()->age;
        $gender = request()->gender;
        $address = request()->address;
        $blood_type = request()->blood_type;
        
        Patient::where('id', $id)->update([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'age' => $age,
            'gender' => $gender,
            'address' => $address,
            'blood_type' => $blood_type,
        ]);
        return $name;
    }

    /**
     * To delete patient by id
     * @return View patients
     */
    public function delete($id)
    {
        $msg = Patient::where('id', $id)->delete();
        return $msg;
    }
}
