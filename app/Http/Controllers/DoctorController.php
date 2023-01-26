<?php

namespace App\Http\Controllers;

use App\Contracts\Services\Doctor\DoctorServiceInterface;
use App\Enums\GenderType;
use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class DoctorController extends Controller
{
    private $doctorInterface;

    public function __construct(DoctorServiceInterface $doctorServiceInterface)
    {
        $this->doctorInterface = $doctorServiceInterface;
        $this->middleware('checkUser', ['only' => [
            'show'
        ]]);
        $this->middleware('admin', ['only' => [
            'create','store'
        ]]);
        $this->middleware('doctor', ['only' => [
            'edit','destroy'
        ]]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = $this->doctorInterface->index();
        return view('doctor.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDoctorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDoctorRequest $request)
    {
        $this->doctorInterface->store($request);
        Alert::toast('Successfully registered doctor!', 'success')->position('bottom-end');
        return redirect(route('doctor.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor = $this->doctorInterface->show($id);
        return view('doctor.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = $this->doctorInterface->edit($id);
        return view('doctor.edit', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDoctorRequest  $request
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDoctorRequest $request, $id)
    {
        $this->doctorInterface->update($request, $id);
        Alert::toast('Successfully updated your information!', 'success')->position('bottom-end');
        return redirect()->route('doctor.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->doctorInterface->destroy($id);
        Session::flush();
        Alert::toast('Successfully Delected Your Account!', 'success')->position('bottom-end');
        return redirect('/doctor_signup');
    }
}
