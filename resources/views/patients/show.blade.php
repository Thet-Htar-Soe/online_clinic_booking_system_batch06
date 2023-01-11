@extends('layouts/patient')
@section('content')
    <div class="container">
        <div class="card px-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-8 offset-sm-2 col-xs-8 text-center text-dark px-5 py-3 doctor-detail">
                        <div class="d-flex justify-content-center mb-3">
                            <img src="{{ asset('img/img_user.png') }}" alt="" width="200px" height="200px" class="p-3">
                        </div>
                        <p class="mt-2">Patient ID: 00123</p>
                        <hr>
                        <p>Patient Name: Patient One</p>
                        <hr>
                        <p>Email: patientone@gmail.com</p>
                        <hr>
                        <p>Password: patientone#1234</p>
                        <hr>
                        <p>Phone: 09784569851</p>
                        <hr>
                        <p>Age: 32</p>
                        <hr>
                        <p>Gender: Male</p>
                        <hr>
                        <p>Address: CC-50, Nawarat Street, MyoThit, Pyin Oo Lwin</p>
                        <hr>
                        <p>Blood Type: A</p>
                        <hr>
                        <a href="#" class="btn btn-primary mt-3 text-center">Edit</a>
                    </div>
                </div>
            </div>
        </div>        
    </div>
@endsection
