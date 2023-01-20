<?php

namespace App\Dao\Patient;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
        $patients = Patient::first()->paginate(10);
        return $patients;
    }

    /**
     * To show patient by id
     * @param $id
     * @return View patients
     */
    public function show($id)
    {
        $patient = Patient::findOrFail($id);
        return $patient;
    }

    /**
     * To submit patient create 
     * @param $request
     * @return View patients 
     */
    public function store($request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = Hash::make($request->password);
        $phone = $request->phone;
        $age = $request->age;
        $gender = $request->gender;
        $address = $request->address;
        $blood_type = $request->blood_type != '0' ? $request->blood_type : null;

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
     * Show patients edit
     * @param $id
     * @return View patients
     */
    public function edit($id)
    {
        $patient = Patient::where('id', $id)->firstOrFail();
        return $patient;
    }

    /**
     * Submit patient update
     * @param $request
     * @param $id
     * @return View patients
     */
    public function update($request, $id)
    {
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $age = $request->age;
        $gender = $request->gender;
        $address = $request->address;
        $blood_type = $request->blood_type;

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
     * @param $id
     * @return View patients
     */
    public function delete($id)
    {
        $msg = Patient::where('id', $id)->delete();
        return $msg;
    }

    /**
     * To submit patient login 
     * @param $request
     * @return View patients 
     */
    public function login($request)
    {
        $patient = Patient::where('email', $request->email)->first();
        if (collect($patient)->isNotEmpty()) {
            if (Hash::check($request->password, $patient->password)) {
                return $patient;
            } 
        }
    }
}
