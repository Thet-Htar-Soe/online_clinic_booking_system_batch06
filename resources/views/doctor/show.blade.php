@extends('layouts.base')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/doctor/home.css') }}">
@endsection
@section('content')
    <div class="container">
        <span>
            <a class="text-decoration-none text-secondary" href="{{ route('doctor.index') }}">Doctor</a>
            <a class="text-decoration-none text-secondary" href="#">/Doctor Detail</a>
        </span>
        <div class="row justify-content-center my-3">
            <div class="col-lg-9 col-md-9 col-sm-10 col-xs-12">
                <div class="card shadow px-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mb-1">
                                @if (!$doctor->doctorDetail->profile_img)
                                    <img class="detailImage shadow" src="{{ asset('doctors/img_doctor_avatar.jpg') }}"
                                        alt="" width="200px" height="200px" class="p-3">
                                @else
                                    <img class="detailImage shadow" src='/doctors/{{ $doctor->doctorDetail->profile_img }}'
                                        alt="" width="200px" height="200px" class="p-3">
                                @endif
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 bg-blue text-light text-start m-auto py-3">
                                <h1 class="text-center">{{ $doctor->doctorDetail->name }}</h1>
                                <h5 class="text-center">({{ $doctor->doctorDetail->specialist }})</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bg-blue doctor-detail">
                                <table class="table table-borderless text-light">
                                    <tr>
                                        <td>
                                            <span class="text-nowrap"><i
                                                    class="px-1 fa-solid fa-circle-check"></i>ID:</span>
                                        </td>
                                        <td>
                                            {{ $doctor->id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="text-nowrap"><i
                                                    class="px-1 fa-solid fa-circle-user"></i>Name:</span>
                                        </td>
                                        <td>
                                            {{ $doctor->doctorDetail->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="text-nowrap"><i class="px-1 fa-solid fa-at"></i>Email:</span>
                                        </td>
                                        <td>
                                            {{ $doctor->doctorDetail->email }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="text-nowrap"><i
                                                    class="px-1 fa-solid fa-graduation-cap"></i>Degree:</span>
                                        </td>
                                        <td>
                                            {{ $doctor->doctorDetail->degree }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="text-nowrap"><i
                                                    class="px-1 fa-solid fa-building"></i>Department:</span>
                                        </td>
                                        <td>
                                            {{ $doctor->doctorDetail->department }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="text-nowrap"><i
                                                    class="px-1 fa-solid fa-star"></i>Specialist:</span>
                                        </td>
                                        <td>
                                            {{ $doctor->doctorDetail->specialist }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="text-nowrap"><i
                                                    class="px-1 fa-solid fa-address-card"></i>Address:</span>
                                        </td>
                                        <td>
                                            @if (!$doctor->doctorDetail->address)
                                                unknown
                                            @else
                                                {{ $doctor->doctorDetail->address }}
                                            @endif
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-blue doctor-detail">
                                <table class="table text-blue">
                                    <tr>
                                        <td>
                                            <span class="text-nowrap"><i class="px-1 fa-solid fa-calendar-day"></i>Date of
                                                Birth:</span>
                                        </td>
                                        <td>
                                            {{ date('d-m-Y', strtotime($doctor->doctorDetail->dob)) }}
                                        </td>
                                    <tr>
                                    <tr>
                                        <td>
                                            <span class="text-nowrap"><i class="px-1 fa-solid fa-phone"></i>Phone:</span>
                                        </td>
                                        <td>
                                            @if (!$doctor->doctorDetail->phone)
                                                unknown
                                            @else
                                                {{ $doctor->doctorDetail->phone }}
                                            @endif
                                        </td>
                                    <tr>
                                    <tr>
                                        <td>
                                            <span class="text-nowrap"><i
                                                    class="px-1 fa-solid fa-mars-and-venus"></i>Gender:</span>
                                        </td>
                                        <td>
                                            {{ $doctor->doctorDetail->gender }}
                                        </td>
                                    <tr>
                                    <tr>
                                        <td>
                                            <span class="text-nowrap"><i
                                                    class="px-1 fa-solid fa-calendar-check"></i>Register
                                                Date:</span>
                                        </td>
                                        <td>
                                            {{ date('d-m-Y', strtotime($doctor->doctorDetail->created_at)) }}
                                        </td>
                                    <tr>
                                    <tr>
                                        <td>
                                            <span class="text-nowrap"><i
                                                    class="px-1 fa-solid fa-list-ol"></i>Experience:</span>
                                        </td>
                                        <td>
                                            {{ $doctor->doctorDetail->experience }}
                                        </td>
                                    <tr>
                                    <tr>
                                        <td>
                                            <span class="text-nowrap"><i class="px-1 fa-solid fa-book"></i>About
                                                Doctor:</span>
                                        </td>
                                        <td>
                                            @if (!$doctor->doctorDetail->about_me)
                                                unknown
                                            @else
                                                {{ $doctor->doctorDetail->about_me }}
                                            @endif
                                        </td>
                                    <tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
