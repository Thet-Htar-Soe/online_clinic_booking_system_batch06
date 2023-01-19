<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\LoginRequest;
use App\Contracts\Services\Patient\PatientServiceInterface;

class PatientController extends Controller
{
    /**
     * patient interface 
     * */
    private $patientInterface;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PatientServiceInterface $patientServiceInterface)
    {
        $this->patientInterface = $patientServiceInterface;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = $this->patientInterface->index();
        return view('patients.list', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePatientRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePatientRequest $request)
    {
        $this->patientInterface->store($request);
        return redirect('/patients/login')->with('info', 'Sign Up Successfully');
    }

    /**
     * Display the specified resource.
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = $this->patientInterface->show($id);
        return view('patients.show', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = $this->patientInterface->edit($id);
        return view('patients.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePatientRequest $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePatientRequest $request, $id)
    {
        $this->patientInterface->update($request, $id);
        return redirect()->route('patients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->patientInterface->delete($id);
        return redirect()->route('patients.index')->with('info', 'Deleted Successfully');
    }
}
