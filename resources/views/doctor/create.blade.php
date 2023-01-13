@extends('layouts.base')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/doctor/home.css') }}">
@endsection
@section('content')
    <div class="container">
        <span>Doctor/Doctor Create</span>
        <div class="row justify-content-center min-vh-100">
            <div class="col-lg-12 col-md-12 col-sl-12">
                <form action="{{ route('doctor.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row my-3">
                        <div class="col-12">
                            <div class="card shadow text-blue">
                                <div class="card-body">
                                    <h4 class="text-blue">
                                        <i class="fa-solid fa-user-doctor"></i>
                                        Doctor Add
                                        <a class="float-end text-decoration-none text-blue" href="doctor_list.php">
                                            <i class="fa-solid fa-list"></i>
                                            View List
                                        </a>
                                    </h4>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="cpassword" class="form-label">Confirm Password</label>
                                            <input type="password" class="form-control" name="cpassword">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="degree" class="form-label">Degree</label>
                                            <input type="text" class="form-control" name="degree">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="department" class="form-label">Department</label>
                                            <select name="department" class="form-select">
                                                <option value="" selected disabled>Choose...</option>
                                                <option value="1">department name</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="specialist" class="form-label">Specialist</label>
                                            <select name="specialist" class="form-select">
                                                <option selected disabled value="">Choose...</option>
                                                <option value="OG">Obstetrician Gynecologist</option>
                                                <option value="Phy">Physician</option>
                                                <option value="Dental">Dental</option>
                                                <option value="Eye">Ophthalmologist</option>
                                                <option value="Surg">Surgeron</option>
                                                <option value="Ortho">Ortho</option>
                                                <option value="CH">Pediatrician</option>
                                                <option value="Ent">Ent</option>
                                                <option value="Uro">Uro</option>
                                                <option value="Derm">Derm</option>
                                                <option value="Cardio">Cardio</option>
                                                <option value="Lab">laboratory</option>
                                                <option value="Ultrasound">Ultrasound</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="experience" class="form-label">Experience</label>
                                            <input type="text" class="form-control" name="experience">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="dob" class="form-label">Date of Birth</label>
                                            <input type="date" class="form-control" name="dob">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="phone" class="form-label">Phone</label>
                                            <input type="number" class="form-control" name="phone">
                                        </div>
                                        <div class="col-md-6 text-secondary">
                                            <label for="specialist" class="form-label">Gender</label>
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
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sl-12 col-xs-12">
                                            <label for="address" class="form-label">Address</label>
                                            <textarea name="address" class="form-control" name="address" cols="30" rows="3"></textarea>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sl-12 col-xs-12">
                                            <label for="about_me" class="form-label">About Me</label>
                                            <textarea name="about_me" class="form-control" name="address" cols="30" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="row my-4">
                                        <div class="col-6">
                                            <input class="form-control btn btn-blue text-light" name="btn-add"
                                                type="submit" value="Submit">
                                        </div>
                                        <div class="col-6">
                                            <input class="form-control btn btn-secondary" type="reset" value="Cancel">
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
