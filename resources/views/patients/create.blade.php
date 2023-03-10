@extends('layouts.patient')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/patients/home.css') }}" />
@endsection
@section('content')
    <section class="py-5 py-sm-2">
        <div class="container mt-1">
            <h3 class="pt-3 pb-4 patient-cmn-ttl">Warmly Welcome To Hope</h3>
            <form action="{{ route('patients.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="mb-lg-3 mb-md-3 mb-sm-3">
                            <label for="name" class="form-label">Name <span>*</span></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="name"
                                value="{{ old('name') }}">
                            @error('name')
                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-lg-3 mb-md-3 mb-sm-3">
                            <label for="email" class="form-label">Email address <span>*</span></label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ old('email') }}" placeholder="name@example.com">
                            @error('email')
                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-lg-3 mb-md-3 mb-sm-3">
                            <label for="password" class="form-label">Password <span>*</span></label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="********">
                            @error('password')
                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-lg-3 mb-md-3 mb-sm-3">
                            <label for="phone" class="form-label">Phone Number <span>*</span></label>
                            <input type="text" class="form-control" id="phone" name="phone"
                                value="{{ old('phone') }}" placeholder="09*********">
                            @error('phone')
                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="mb-lg-3 mb-md-3 mb-sm-3">
                            <label for="age" class="form-label">Age <span>*</span></label>
                            <input type="number" class="form-control" id="age" name="age" placeholder="age"
                                value="{{ old('age') }}">
                            @error('age')
                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-lg-3 mb-md-3 mb-sm-3">
                            <label for="address" class="form-label">Address <span>*</span></label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="address"
                                value="{{ old('address') }}">
                            @error('address')
                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-lg-3 mb-md-3 mb-sm-3">
                            <label for="blood_type" class="form-label">Blood Type</label>
                            <select class="form-select" aria-label="Default select example" id="blood_type"
                                name="blood_type">
                                <option selected>Select Blood Type</option>
                                <option value="1">A</option>
                                <option value="2">B</option>
                                <option value="3">AB</option>
                                <option value="4">O</option>
                            </select>
                        </div>
                        <div class="mb-lg-3 mb-md-3 mb-sm-3">
                            <label for="gender" class="form-label mb-3">Gender <span>*</span></label>
                            <div class="form-group d-flex">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="male"
                                        id="male">
                                    <label class="form-check-label me-3" for="male">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="female"
                                        id="female">
                                    <label class="form-check-label me-3" for="female">
                                        Female
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="unknown"
                                        id="unknown">
                                    <label class="form-check-label me-3" for="unknown">
                                        Unknown
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="unapplicable"
                                        id="unapplicable">
                                    <label class="form-check-label" for="unapplicable">
                                        Unapplicable
                                    </label>
                                </div>
                            </div>
                            @error('gender')
                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 d-grid">
                        <button type="submit" class="btn btn-primary d-block">Sign Up</button>
                    </div>
                    <div class="col-6">
                        <a href="{{ route('patient.login') }}" class="btn btn-outline-primary d-block">Already have an
                            account?</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
