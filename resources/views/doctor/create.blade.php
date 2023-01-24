@extends('layouts.base')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/doctor/home.css') }}">
@endsection
@section('content')
    <div class="container">
        <span>
            <a class="text-decoration-none text-secondary" href="{{ route('doctor.index') }}">Doctor</a>
            <a class="text-decoration-none text-secondary" href="#">/Doctor List</a>
        </span>
        <div class="row justify-content-center min-vh-100">
            <div class="col-lg-12 col-md-12 col-sl-12">
                <form action="{{ route('doctor.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row my-3">
                        <div class="col-12">
                            <div class="card shadow text-blue">
                                <div class="card-body">
                                    <h4 class="text-blue">
                                        <i class="fa-solid fa-user-doctor"></i>
                                        Doctor Add
                                        <a class="float-end text-decoration-none text-blue"
                                            href="{{ route('doctor.index') }}">
                                            <i class="fa-solid fa-list"></i>
                                            View List
                                        </a>
                                    </h4>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="name" class="form-label">Name <span>*</span> </label>
                                            <input type="text" class="form-control" name="name"
                                                value="{{ old('name') }}">
                                            @error('name')
                                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <label for="email" class="form-label">Email <span>*</span> </label>
                                            <input type="text" class="form-control" name="email"
                                                value="{{ old('email') }}">
                                            @error('email')
                                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <label for="password" class="form-label">Password <span>*</span> </label>
                                            <input type="password" class="form-control" name="password">
                                            @error('password')
                                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <label for="is_active" class="form-label">Status <span>*</span> </label>
                                            <select name="is_active" class="form-select">
                                                <option value="1" selected>Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                            @error('is_active')
                                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="degree" class="form-label">Degree <span>*</span> </label>
                                            <input type="text" class="form-control" name="degree"
                                                value="{{ old('degree') }}">
                                            @error('degree')
                                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <label for="department" class="form-label">Department <span>*</span> </label>
                                            <select name="department" class="form-select">
                                                <option value="" selected disabled>Choose...</option>
                                                <option value="Dental">Dental</option>
                                                <option value="General Surgery">General Surgery</option>
                                            </select>
                                            @error('department')
                                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <label for="specialist" class="form-label">Specialist <span>*</span> </label>
                                            <select name="specialist" class="form-select">
                                                <option value="" selected disabled>Choose...</option>
                                                <option value="General Surgery">General Surgery</option>
                                                <option value="Dental">Dental</option>
                                            </select>
                                            @error('specialist')
                                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <label for="experience" class="form-label">Experience <span>*</span> </label>
                                            <input type="number" class="form-control" name="experience"
                                                value="{{ old('experience') }}">
                                            @error('experience')
                                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="dob" class="form-label">Date of Birth <span>*</span> </label>
                                            <input type="date" class="form-control" name="date">
                                            @error('date')
                                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <label for="phone" class="form-label">Phone</label>
                                            <input type="text" class="form-control" name="phone"
                                                value="{{ old('phone') }}">
                                            @error('phone')
                                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 text-blue">
                                            <label for="specialist" class="form-label">Gender <span>*</span></label>
                                            <br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="inlineRadio1" type="radio"
                                                    name="gender" name="male" value="m">
                                                <label class="form-check-label" for="inlineRadio1">Male</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="inlineRadio2" type="radio"
                                                    name="gender" name="female" value="f">
                                                <label class="form-check-label" for="inlineRadio2">Female</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="inlineRadio3" type="radio"
                                                    name="gender" name="k" value="k">
                                                <label class="form-check-label" for="inlineRadio3">Unknown</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="inlineRadio4" type="radio"
                                                    name="gender" name="a" value="a">
                                                <label class="form-check-label" for="inlineRadio4">Unapplicable</label>
                                            </div>
                                            @error('gender')
                                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sl-12 col-xs-12">
                                            <label for="address" class="form-label">Address</label>
                                            <textarea name="address" class="form-control"cols="30" rows="3">{{ old('address') }}</textarea>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sl-12 col-xs-12">
                                            <label for="about_me" class="form-label">About Me</label>
                                            <textarea name="about_me" class="form-control" cols="30" rows="3">{{ old('about_me') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row my-4">
                                        <div class="col-6">

                                            <button type="submit"
                                                class="form-control btn btn-blue text-light">Submit</button>
                                        </div>
                                        <div class="col-6">
                                            <input class="form-control btn btn-secondary" type="reset" value="Clear">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
