@extends('layouts.base')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/doctor/home.css') }}">
@endsection
@section('content')
    <div class="container">
        <span>
            <a class="text-decoration-none text-secondary" href="{{ route('doctor.show', $doctor->id) }}">Profile</a>
            <a class="text-decoration-none text-secondary" href="#">/Profile Edit</a>
        </span>
        <div class="row justify-content-center min-vh-100">
            <div class="col-lg-12 col-md-12 col-sl-12">
                <form action="{{ route('doctor.update', $doctor->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row my-3">
                        <div class="col-12">
                            <div class="card shadow text-blue">
                                <div class="card-body">
                                    <h4 class="text-blue">
                                        <i class="fa-solid fa-user-doctor"></i>
                                        Doctor Update
                                    </h4>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="name" class="form-label">Name <span>*</span></label>
                                            <input type="text" class="form-control" name="name"
                                                value="{{ $doctor->doctorDetail->name }}">
                                            @error('name')
                                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <label for="email" class="form-label">Email <span>*</span></label>
                                            <input type="email" class="form-control" name="email"
                                                value="{{ $doctor->doctorDetail->email }}">
                                            @error('email')
                                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="picture" class="form-label">Picture</label>
                                            <input class="form-control" type="file" name="picture">
                                            <input type="hidden" name="image"
                                                value="{{ $doctor->doctorDetail->profile_img }}">
                                            @error('picture')
                                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-2">
                                            <label for="is_active" class="form-label">Status <span>*</span> </label>
                                            <select name="is_active" class="form-select">
                                                <option value="" selected disabled>Choose...</option>
                                                <option value="1" @if ($doctor->is_active == '1') selected @endif>
                                                    Active</option>
                                                <option value="0" @if ($doctor->is_active == '0') selected @endif>
                                                    Inactive</option>
                                            </select>
                                            @error('is_active')
                                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="degree" class="form-label">Degree <span>*</span></label>
                                            <input type="text" class="form-control" name="degree"
                                                value="{{ $doctor->doctorDetail->degree }}">
                                            @error('degree')
                                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <label for="department" class="form-label">Department <span>*</span></label>
                                            <select name="department" class="form-select">
                                                <option selected disabled value="">Choose...</option>
                                                <option value="Dental" @if ($doctor->doctorDetail->department == 'Dental') selected @endif>
                                                    Dental</option>
                                                <option value="General Surgery"
                                                    @if ($doctor->doctorDetail->department == 'General Surgery') selected @endif>
                                                    General Surgery</option>
                                            </select>
                                            @error('department')
                                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <label for="specialist" class="form-label">Specialist <span>*</span></label>
                                            <select name="specialist" class="form-select">
                                                <option selected disabled value="">Choose...</option>
                                                <option value="General Surgery"
                                                    @if ($doctor->doctorDetail->specialist == 'General Surgery') selected @endif>
                                                    General Surgery</option>
                                                <option value="Dental" @if ($doctor->doctorDetail->specialist == 'Dental') selected @endif>
                                                    Dental</option>
                                            </select>
                                            @error('specialist')
                                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <label for="experience" class="form-label">Experience <span>*</span></label>
                                            <input type="number" class="form-control" name="experience"
                                                value="{{ $doctor->doctorDetail->experience }}">
                                            @error('experience')
                                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="dob" class="form-label">Date of Birth <span>*</span></label>
                                            <input type="date" class="form-control" name="date"
                                                value="{{ $doctor->doctorDetail->dob }}">
                                            @error('date')
                                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <label for="phone" class="form-label">Phone </label>
                                            <input type="number" class="form-control" name="phone"
                                                value="{{ $doctor->doctorDetail->phone }}">
                                            @error('phone')
                                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 text-blue">
                                            <label for="specialist" class="form-label">Gender <span>*</span></label>
                                            <br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="inlineRadio1" type="radio"
                                                    name="gender" value="m"
                                                    @if ($doctor->doctorDetail->gender == 'm') checked @endif>
                                                <label class="form-check-label" for="inlineRadio1">Male</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="inlineRadio2" type="radio"
                                                    name="gender" value="f"
                                                    @if ($doctor->doctorDetail->gender == 'f') checked @endif>
                                                <label class="form-check-label" for="inlineRadio2">Female</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="inlineRadio3" type="radio"
                                                    name="gender" value="k"
                                                    @if ($doctor->doctorDetail->gender == 'k') checked @endif>
                                                <label class="form-check-label" for="inlineRadio3">Unknown</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="inlineRadio4" type="radio"
                                                    name="gender" value="a"
                                                    @if ($doctor->doctorDetail->gender == 'a') checked @endif>
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
                                            <textarea name="address" class="form-control" name="address" cols="30" rows="3">{{ $doctor->doctorDetail->address }}</textarea>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sl-12 col-xs-12">
                                            <label for="about_me" class="form-label">About Me</label>
                                            <textarea name="about_me" class="form-control" name="address" cols="30" rows="3">{{ $doctor->doctorDetail->about_me }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row my-4">
                                        <div class="col-6">
                                            <button class="form-control btn btn-blue text-light" name="btn-add"
                                                type="submit">Update</button>
                                        </div>
                                        <div class="col-6">
                                            <a class="form-control btn btn-secondary"
                                                href='{{ route('doctor.show', $doctor->id) }}'>Go Back</a>
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
