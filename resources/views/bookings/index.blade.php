@extends('layouts/patient')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/booking/home.css') }}"/>
@endsection
@section('content')
    <section class="booking-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-3">
                    <div class="card mt-5 start-50">
                        <div class="card-header">Patient Appointment Form</div>
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="dotbox">
                                    <span class="dot">1</span>
                                    <span class="dot">2</span>
                                    <span class="dot">3</span>
                                    <span class="dot">4</span>
                                </div>
                            </div>
                            <div id="getMain" class="getMain">
    
                                <div class="page">
    
                                    <div class="card mt-3">
                                        <div class="card-body">
                                            <form action="" method="">
                                                <div class="form-group mb-2">
                                                    <label class="mb-2">First Priority Appointment DateTime:</label>
                                                    <div class="row">
                                                        <div class="col-md-6"><input type="text" class="form-control"
                                                                id="firstDate" placeholder="Choose Date" /></div>
                                                        <div class="col-md-6"><input type="time" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label class="mb-2">Second Priority Appointment DateTime:</label>
                                                    <div class="row">
                                                        <div class="col-md-6"><input type="text" class="form-control"
                                                                id="secondDate" placeholder="Choose Date" /></div>
                                                        <div class="col-md-6"><input type="time" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label class="mb-2">Third Priority Appointment DateTime:</label>
                                                    <div class="row">
                                                        <div class="col-md-6"><input type="text" class="form-control"
                                                                id="thirdDate" placeholder="Choose Date" /></div>
                                                        <div class="col-md-6"><input type="time" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label class="mb-2">Patient's Name</label>
                                                    <input type="text" name="patientName" class="form-control"
                                                        placeholder="Enter Patient's Name" />
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label class="mb-2">Doctor's Name</label>
                                                    <input type="text" name="doctorName" class="form-control"
                                                        placeholder="Enter Doctor's Name" />
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary"
                                                        onclick="gonow(1)">Submit</button>
                                                </div>
    
                                            </form>
                                        </div>
                                    </div>
    
    
                                </div>
    
                                <div class="page">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('img/booking/waiting.gif') }}" class="img-waiting" alt="waiting" />
                                    </div>
                                    <h5>Waiting Response....</h5>
                                </div>
    
                                <div class="page">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('img/booking/confirm.gif') }}" class="img-confirm" alt="confirm" />
                                    </div>
                                    <h5 class="mt-3">Doctor approved your appointment....</h5>
                                </div>
                                <div class="page">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('img/booking/finish.gif') }}" class="img-finish" alt="finish" />
                                    </div>
                                    <h5 class="mt-3 text-center">Your Appointment Process Finished....</h5>
                                </div>
                                <div class="d-flex justify-content-between mt-3">
                                    <button type="button" id="prevbtn" class="btn btn-secondary"
                                        onclick="gonow(-1)">Previous</button>
                                    <button type="button" id="nextbtn" class="btn btn-info" onclick="gonow(1)">Next</button>
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </section>
@endsection
@section('js')
    <script src="{{ asset('js/booking/booking.js') }}"></script>
@endsection