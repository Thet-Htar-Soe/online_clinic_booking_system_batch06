@extends('layouts.patient')
@section('css')
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/patient/home.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    @include('sweetalert::alert')
    <section id="our_team" class="pb-4">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-5 mb-3">
                    <h3 class="mb-2" style="font-size: 30px">Meet Our Specialists</h3>
                    <small class="text-light-50">We give you all care and treatment</small>
                </div>


                <div class="col-md-12 col-sm-10">
                    <div class="multiple-item profile-sm">
                        @foreach ($doctors as $doctor)
                            <div class="card h-100 p-2 mx-2">
                                <div>
                                    @if (!$doctor->doctorDetail->profile_img)
                                        <img src="{{ asset('doctors/img_doctor_avatar.jpg') }}"
                                            class="card-img-top doctorImage" alt="profile">
                                    @else
                                        <img src="/doctors/{{ $doctor->doctorDetail->profile_img }}"
                                            class="card-img-top doctorImage" alt="profile">
                                    @endif
                                    <div class="card-body text-center h-75">
                                        <div class="card-title">
                                            <h6 class="doctor-ttl mb-2">Dr. {{ $doctor->doctorDetail->name }}</h6>
                                            <span
                                                class="text-primary fw-medium">{{ $doctor->doctorDetail->specialist }}</span>
                                        </div>
                                        <ul class="card-text list-unstyled">
                                            <li class="doctor-sm-ttl mb-2">{{ $doctor->doctorDetail->department }}</li>
                                            <li class="doctor-sm-ttl mb-2">{{ $doctor->doctorDetail->experience }}+
                                                years
                                                experiences</li>
                                        </ul>
                                        <div class="mb-3">
                                            <i class="fa-solid fa-star text-warning"></i>
                                            <i class="fa-solid fa-star text-warning"></i>
                                            <i class="fa-solid fa-star text-warning"></i>
                                            <i class="fa-solid fa-star text-warning"></i>
                                            <i class="fa-solid fa-star text-warning"></i>
                                        </div>
                                        <a href="{{ route('doctor.detail', $doctor->id) }}"
                                            class="btn btn-blue btn-sm text-light">
                                            Appointment
                                        </a>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>


                {{-- <div class="row mt-3">
                    <div class="col-md-2 col-sm-12 offset-md-5">
                        <a href="{{ route('doctor.list') }}" class="btn btn-primary">More Doctor</a>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/slider/slider.js') }}"></script>
@endsection
