@extends('layouts.patient')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/patients/home.css') }}" />
@endsection
@section('content')
    <section class="py-5 py-sm-2">
        <div class="container mt-1">
            <h3 class="pt-3 pb-4 patient-cmn-ttl">Warmly Welcome To Hope</h3>
            <form action="{{ route('patients.update', ['patient' => $patient->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="mb-lg-3 mb-md-3 mb-sm-3">
                            <label for="name" class="form-label">Name *</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="name"
                                value="{{ $patient->name }}">
                            @error('name')
                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-lg-3 mb-md-3 mb-sm-3">
                            <label for="email" class="form-label">Email address *</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="name@example.com" value="{{ $patient->email }}">
                            @error('email')
                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-lg-3 mb-md-3 mb-sm-3">
                            <label for="phone" class="form-label">Phone Number *</label>
                            <input type="text" class="form-control" id="phone" name="phone"
                                placeholder="09*********" value="{{ $patient->phone }}">
                            @error('phone')
                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-lg-3 mb-md-3 mb-sm-3">
                            <label for="age" class="form-label">Age *</label>
                            <input type="number" class="form-control" id="age" name="age" placeholder="age"
                                value="{{ $patient->age }}">
                            @error('age')
                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="mb-lg-3 mb-md-3 mb-sm-3">
                            <label for="address" class="form-label">Address *</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="address"
                                value="{{ $patient->address }}">
                            @error('address')
                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-lg-3 mb-md-3 mb-sm-3">
                            <label for="blood_type" class="form-label">Blood Type</label>
                            <select class="form-select" aria-label="Default select example" id="blood_type"
                                name="blood_type">
                                <option {{ $patient->blood_type == null ? 'selected' : '' }} value="0">Select Blood
                                    Type</option>
                                <option {{ $patient->blood_type == 'A' ? 'selected' : '' }} value="1">A</option>
                                <option {{ $patient->blood_type == 'B' ? 'selected' : '' }} value="2">B</option>
                                <option {{ $patient->blood_type == 'AB' ? 'selected' : '' }} value="3">AB</option>
                                <option {{ $patient->blood_type == 'O' ? 'selected' : '' }} value="4">O</option>
                            </select>
                        </div>
                        <div class="mb-lg-3 mb-md-3 mb-sm-3">
                            <label for="gender" class="form-label mb-3">Gender *</label>
                            <div class="form-group d-flex">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="m"
                                        {{ $patient->gender == 'm' ? 'checked' : '' }} id="male">
                                    <label class="form-check-label me-3" for="male">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="f"
                                        {{ $patient->gender == 'f' ? 'checked' : '' }} id="female">
                                    <label class="form-check-label me-3" for="female">
                                        Female
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="k"
                                        {{ $patient->gender == 'k' ? 'checked' : '' }} id="unknown">
                                    <label class="form-check-label me-3" for="unknown">
                                        Unknown
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="a"
                                        {{ $patient->gender == 'a' ? 'checked' : '' }} id="unapplicable">
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
                        <button type="submit" class="btn btn-primary d-block">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
