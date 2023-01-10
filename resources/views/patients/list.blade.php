@extends('layouts.base')
@section('content')
    <div class="container">
        <span>
            <a class="text-decoration-none text-secondary" href="#">Patient</a>
            <a class="text-decoration-none text-secondary" href="#">/Patient List</a>
        </span>
        <div class="row my-3">
            <div class="col-12">
                <h4 class="text-blue">
                    <i class="fa-solid fa-user-nurse"></i>
                    Patient List
                    <a class="float-end text-decoration-none text-blue" href="#">
                        <i class="fa-solid fa-plus"></i>
                        Add New Patient
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
                        </tr>
                    </thead>
                    <tr>
                        <td>1</td>
                        <td><img src="{{ asset('img/img_user.png') }}" class="listImg" style="width: 35px; height: 35px;" alt="profile"></td>
                        <td>Patient One</td>
                        <td>patientone@gmail.com</td>
                        <td>09123456789</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection