@extends('layouts.patient')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/patients/home.css') }}" />
@endsection
@section('content')
    @include('sweetalert::alert')
    <section class="patient-bg py-5">
        <div class="container mt-1">
            <div class="row">
                <div class="col-md-5 col-sm-8">
                    <h3 class="pb-4 patient-cmn-ttl pt-5">Everytime Along With Hope</h3>
                </div>
                <form action="{{ route('patient.login') }}" method="POST">
                    @csrf
                    <div class="col-md-5 col-sm-8">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="name@example.com" value="{{ Request::old('email') }}">
                            @error('email')
                                <small class="text-danger small">{{ $errors->first('email') }}</small>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="********" value="{{ Request::old('password') }}">
                            @error('password')
                                <small class="text-danger small">{{ $errors->first('password') }}</small>
                            @enderror
                            @if (session('wrongPsw'))
                                <small class="text-danger small">{{ session('wrongPsw') }}</small>
                            @endif
                        </div>
                        <div class="d-flex">
                            <button type="submit" class="btn btn-primary me-3">Login</button>
                            <a href="{{ route('patients.create') }}" class="btn btn-outline-primary">Didn't have an
                                account?</a>
                        </div>
                        @if (session('info'))
                            <small class="text-danger small">{{ session('info') }}</small>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
