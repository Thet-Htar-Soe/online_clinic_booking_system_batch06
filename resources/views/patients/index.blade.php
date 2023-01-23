@extends('layouts.patient')
@section('css')
    <link href="{{ asset('css/patient/home.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <section id="our_team" class="pb-4">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-5 mb-3">
                    <h3 class="mb-2" style="font-size: 30px">Meet Our Specialists</h3>
                    <small class="text-light-50">We give you all care and treatment</small>
                </div>
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('img/img_doctor_four.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <div class="card-title">
                                    <h6 class="doctor-ttl mb-2">Dr. John Doe</h6>
                                    <span class="text-primary fw-medium">Surgeon</span>
                                </div>
                                <ul class="card-text list-unstyled">
                                    <li class="doctor-sm-ttl mb-2">General Surgery</li>
                                    <li class="doctor-sm-ttl mb-2">10+ years experiences</li>
                                </ul>
                                <div class="mb-3">
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('img/img_doctor_two.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <div class="card-title">
                                    <h6 class="doctor-ttl mb-2">Dr. Michelle Stewart</h6>
                                    <span class="text-primary fw-medium">Surgeon</span>
                                </div>
                                <ul class="card-text list-unstyled">
                                    <li class="doctor-sm-ttl mb-2">Ear, Nose and Throat (ENT)</li>
                                    <li class="doctor-sm-ttl mb-2">10+ years experiences</li>
                                </ul>
                                <div class="mb-3">
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('img/img_doctor_one.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <div class="card-title">
                                    <h6 class="doctor-ttl mb-2">Dr. Mike Joseph</h6>
                                    <span class="text-primary fw-medium">Professor</span>
                                </div>
                                <ul class="card-text list-unstyled">
                                    <li class="doctor-sm-ttl mb-2">Nutrition and dietetics</li>
                                    <li class="doctor-sm-ttl mb-2">10+ years experiences</li>
                                </ul>
                                <div class="mb-3">
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('img/img_doctor_three.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <div class="card-title">
                                    <h6 class="doctor-ttl mb-2">Dr. Alex Anderson</h6>
                                    <span class="text-primary fw-medium">Professor</span>
                                </div>
                                <ul class="card-text list-unstyled">
                                    <li class="doctor-sm-ttl mb-2">Physiotherapy</li>
                                    <li class="doctor-sm-ttl mb-2">10+ years experiences</li>
                                </ul>
                                <div class="mb-3">
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-2 col-sm-12 offset-md-5">
                        <a href="{{ route('doctor.list') }}" class="btn btn-primary">More Doctor</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
