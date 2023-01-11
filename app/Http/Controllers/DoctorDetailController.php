<?php

namespace App\Http\Controllers;

use App\Models\DoctorDetail;
use App\Http\Requests\StoreDoctorDetailRequest;
use App\Http\Requests\UpdateDoctorDetailRequest;

class DoctorDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDoctorDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDoctorDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DoctorDetail  $doctorDetail
     * @return \Illuminate\Http\Response
     */
    public function show(DoctorDetail $doctorDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DoctorDetail  $doctorDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(DoctorDetail $doctorDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDoctorDetailRequest  $request
     * @param  \App\Models\DoctorDetail  $doctorDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDoctorDetailRequest $request, DoctorDetail $doctorDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DoctorDetail  $doctorDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(DoctorDetail $doctorDetail)
    {
        //
    }
}
