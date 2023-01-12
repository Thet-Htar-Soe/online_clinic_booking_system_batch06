@extends('layouts.base')
@section('css')
<link rel="stylesheet" href="{{ asset('css/admin/home.css') }}">
@endsection
@section('content')
<div class="container">
    <span>
        <a class="text-decoration-none text-secondary" href="#">Admin</a>
        <a class="text-decoration-none text-secondary" href="#">/Admin Detail</a>
    </span>
    <div class="row justify-content-center my-3">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="card shadow px-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mb-1 ">
                            <img class="detailImage shadow" src="{{ asset('img/img_admin.jpg') }}" alt="" width="200px" height="200px" class="p-3">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 bg-blue text-light text-start m-auto">
                            <h1 class="text-center">{{ $admin->name }}</h1>
                            <h5 class="text-center">(Admin)</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 bg-blue text-light px-5 py-3 admin_detail">
                            <i class="fa-solid fa-circle-user"></i><span>Full Name:</span>{{ $admin->name }}
                            <hr>
                            <i class="fa-solid fa-at"></i><span>Email:</span>{{ $admin->email }}
                            <hr>
                            <i class="fa-solid fa-crown"></i><span>Role:</span>Admin
                            <hr>
                            <i class="fa-solid fa-calendar-day"></i><span>Date of Birth:</span>18-3-1999
                            <hr>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-blue px-5 py-3 admin_detail">
                            <i class="fa-solid fa-phone"></i><span>Phone:</span>09123456789
                            <hr>
                            <i class="fa-solid fa-address-card"></i><span>Address:</span>CC-50, Nawarat Street, MyoThit, Pyin Oo Lwin
                            <hr>
                            <i class="fa-solid fa-calendar-check"></i><span>Register Date:</span>7-1-2023
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
