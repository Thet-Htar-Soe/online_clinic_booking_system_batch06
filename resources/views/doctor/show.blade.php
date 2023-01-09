@extends('layouts.base')
@section('content')
<div class="container">
    <span>Doctor/Doctor Detail</span>
    <div class="row justify-content-center my-3">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="card shadow px-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mb-1">
                            <img class="detailImage shadow" src="{{ asset('img/img_doctor.jpg') }}" alt="" width="200px" height="200px" class="p-3">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 bg-blue text-light text-start m-auto">
                            <h1 class="text-center">Dr.Mary</h1>
                            <h5 class="text-center">(Dental)</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 bg-blue text-light px-5 py-3 docor-detail">
                            <i class="fa-solid fa-circle-check"></i><span>Doctor ID:</span>00123
                            <hr>
                            <i class="fa-solid fa-circle-user"></i><span>Full Name:</span>Kyaw Gyi
                            <hr>
                            <i class="fa-solid fa-at"></i><span>Email:</span>kg@gmail.com
                            <hr>
                            <i class="fa-solid fa-graduation-cap"></i><span>Degree:</span>B.Sc(Hons) Computing
                            <hr>
                            <i class="fa-solid fa-building"></i><span>Department:</span>Dental
                            <hr>
                            <i class="fa-solid fa-star"></i><span>Specialist:</span>Dental
                            <hr>
                            <i class="fa-solid fa-address-card"></i><span>Address:</span>CC-50, Nawarat Street, MyoThit, Pyin Oo Lwin
                            <hr>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-blue px-5 py-3 docor-detail">
                            <i class="fa-solid fa-calendar-day"></i><span>Date of Birth:</span>18-3-1999
                            <hr>
                            <i class="fa-solid fa-phone"></i><span>Phone:</span>09123456789
                            <hr>
                            <i class="fa-solid fa-mars-and-venus"></i><span>Gender:</span>Male
                            <hr>
                            <i class="fa-solid fa-layer-group"></i><span>Blood Group:</span>A+
                            <hr>
                            <i class="fa-solid fa-calendar-check"></i><span>Register Date:</span>7-1-2023
                            <hr>
                            <i class="fa-solid fa-list-ol"></i><span>Experience:</span>5
                            <hr>
                            <i class="fa-solid fa-book"></i><span>About Doctor:</span>Nice Doctor
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection