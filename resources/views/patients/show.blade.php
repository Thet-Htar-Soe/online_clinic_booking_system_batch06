@extends('layouts/patient')
@section('content')
    <div class="container">
        @include('sweetalert::alert')
        <div class="row justify-content-center align-items-center">
            <div class="col-8">
                <div class="card px-3">
                    <div class="card-body">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-8 text-dark px-5 py-3 doctor-detail">
                                <div class="d-flex justify-content-center mb-3">
                                    <img src="{{ asset('img/img_user.png') }}" alt="" width="200px" height="200px"
                                        class="p-3">
                                </div>
                                <div class="ms-lg-5">
                                    <p class="mt-2">Patient ID: {{ $patient->id }}</p>
                                    <hr>
                                    <p>Patient Name: {{ $patient->name }}</p>
                                    <hr>
                                    <p>Email: {{ $patient->email }}</p>
                                    <hr>
                                    <p>Phone: {{ $patient->phone }}</p>
                                    <hr>
                                    <p>Age: {{ $patient->age }}</p>
                                    <hr>
                                    <p>Gender: {{ $patient->gender }}</p>
                                    <hr>
                                    <p>Address: {{ $patient->address }}</p>
                                    <hr>
                                    <p>Blood Type: {{ $patient->blood_type }}</p>
                                    <hr>
                                    <a href="{{ route('patients.edit', ['patient' => $patient->id]) }}"
                                        class="btn btn-primary mt-3 btn-sm text-center">Edit</a>
                                    <form class="d-inline-block"
                                        action="{{ route('patients.destroy', ['patient' => $patient->id]) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-secondary btn-sm mt-3"
                                            onclick="return confirm('Are you sure you want to delete?')">Delete
                                            Account</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
