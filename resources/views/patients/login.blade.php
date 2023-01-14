@extends('layouts.patient')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/patients/home.css') }}" />
@endsection
@section('content')
    <section class="patient-bg py-5">
        <div class="container mt-1">
            <div class="row">
                <div class="col-5">
                    <h3 class="pb-4 patient-cmn-ttl pt-5">Everytime Along With Hope</h3>
                    @if (session('info'))
                        <div class="alert alert-info">
                            {{ session('info') }}
                        </div>
                    @endif
                    @include('common.errors')
                </div>
                <form action="{{ route('patients.login') }}" method="post">
                    @csrf
                    <div class="col-5">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="********">
                        </div>
                        <div class="d-flex">
                            <button type="submit" class="btn btn-primary me-3">Login</button>
                            <a href="{{ route('patients.create') }}" class="btn btn-outline-primary">Didn't have an
                                account?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
