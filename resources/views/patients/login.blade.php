@extends('layouts.patient')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/patients/home.css') }}" />
@endsection
@section('content')
    <section class="patient-bg py-5">
        <div class="container mt-1">
            <div class="row">
                <div class="col-5 ps-5">
                    <h3 class="pb-4 patient-cmn-ttl pt-5">Everytime Along With Hope</h3>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="********">
                    </div>
                    <div class="">
                        <a href="#" class="btn btn-primary d-block mb-3">Login</a>
                        <a href="login.html" class="text-decoration-none">Forget Password?</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
