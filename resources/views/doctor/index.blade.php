@extends('layouts.base')
@section('css')
<link rel="stylesheet" href="{{ asset('css/doctor/home.css') }}">
@endsection
@section('content')
<div class="container">
    <span>Doctor/Doctor List</span>
    <div class="row my-3">
        <div class="col-12">
            <h4 class="text-blue">
                <i class="fa-solid fa-user-nurse"></i>
                Doctor List
                <a class="float-end text-decoration-none text-blue" href="">
                    <i class="fa-solid fa-plus"></i>
                    Add New Doctor
                </a>
            </h4>
            <hr>
            <table class="table table-hover table-bordered" id="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Profile</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tr>
                    <td>1</td>
                    <td><img src="{{ asset('img/img_doctor.jpg') }}" class="listImg" style="width: 50px; height: 50px;" alt="profile"></td>
                    <td>Kyaaw Gyi</td>
                    <td>kyawgyi@gmail.com</td>
                    <td>09123456789</td>
                    <td class="text-nowrap">
                        <a href="#" class="btn btn-outline-info btn-sm">
                            <i class="fas fa-info"></i>
                        </a>
                        <a href="#" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure to delete?')">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection