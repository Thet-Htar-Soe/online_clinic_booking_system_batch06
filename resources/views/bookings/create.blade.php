@extends('layouts/patient')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/booking/home.css') }}" />
@endsection
@section('content')
    <section class="booking-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-3">
                    <div class="card mt-5 start-50">
                        <div class="card-header">Patient Appointment Form</div>
                        <div class="card-body">

                            <div id="getMain" class="getMain">

                                @php
                                    if (isset($bookingStatus)) {
                                        $status = $bookingStatus;
                                    } else {
                                        $status = null;
                                    }
                                @endphp
                                @if ($status == null && $status !== 0)
                                    <div class="page">
                                        <div class="d-flex">
                                            <div class="dotbox">
                                                <span class="dot active">1</span>
                                                <span class="dot">2</span>
                                                <span class="dot">3</span>
                                                <span class="dot">4</span>
                                            </div>
                                        </div>

                                        <div class="card mt-3">
                                            <div class="card-body">
                                                <form action="{{ route('bookings.store') }}" method="POST">
                                                    @csrf
                                                    <div class="form-group mb-2">
                                                        <label class="mb-2">First Priority Appointment DateTime:</label>
                                                        <div class="row">
                                                            <div class="col-md-12"><input type="datetime-local"
                                                                    class="form-control" name="bookingDate[]"
                                                                    placeholder="Choose Date" /></div>
                                                            @error('bookingDate[]')
                                                                <small
                                                                    class="d-block text-danger small mb-2">{{ $errors->first('bookingDate[]') }}</small>
                                                            @enderror

                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <label class="mb-2">Second Priority Appointment DateTime:</label>
                                                        <div class="row">
                                                            <div class="col-md-12"><input type="datetime-local"
                                                                    class="form-control" name="bookingDate[]"
                                                                    placeholder="Choose Date" /></div>
                                                            @error('bookingDate[]')
                                                                <small
                                                                    class="d-block text-danger small mb-2">{{ $errors->first('bookingDate[]') }}</small>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <label class="mb-2">Third Priority Appointment DateTime:</label>
                                                        <div class="row">
                                                            <div class="col-md-12"><input type="datetime-local"
                                                                    class="form-control" name="bookingDate[]"
                                                                    placeholder="Choose Date" /></div>
                                                            @error('bookingDate[]')
                                                                <small
                                                                    class="d-block text-danger small mb-2">{{ $errors->first('bookingDate[]') }}</small>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <label class="mb-2">Patient's Name</label>
                                                        <input type="text" name="patientName" class="form-control"
                                                            value="{{ Request::old('patientName') }}"
                                                            placeholder="Enter Patient's Name" />
                                                        @error('patientName')
                                                            <small
                                                                class="d-block text-danger small mb-2">{{ $errors->first('patientName') }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <label class="mb-2">Doctor's Name</label>
                                                        <select name="doctorName" class="form-select">
                                                            <option selected disabled>Please Choose Doctor!!!</option>

                                                            @foreach ($doctors as $doctor)
                                                                <option @if (Request::old('doctorName') == $doctor->id) selected @endif
                                                                    value={{ $doctor->id }}>{{ $doctor->name }}
                                                                </option>
                                                            @endforeach

                                                        </select>
                                                        @error('doctorName')
                                                            <small
                                                                class="d-block text-danger small mb-2">{{ $errors->first('doctorName') }}</small>
                                                        @enderror

                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" onclick="gonow(+1)"
                                                            class="btn btn-primary">Submit</button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>


                                    </div>
                                @elseif($status == 0)
                                    <div class="page">
                                        <div class="d-flex">
                                            <div class="dotbox">
                                                <span class="dot">1</span>
                                                <span class="dot active">2</span>
                                                <span class="dot">3</span>
                                                <span class="dot">4</span>
                                            </div>
                                        </div>
                                        <h5 class="text-center py-3">Waiting For Doctor's Confirm....</h5>
                                        <ul class="ms-5">
                                            <li class="mb-2">First Priority Date =>
                                                {{ date('d-M-Y H:i:s', strtotime($bookings[0])) }}</li>
                                            <li class="mb-2">Second Priority Date =>
                                                {{ date('d-M-Y H:i:s', strtotime($bookings[1])) }}</li>
                                            <li class="mb-2">Third Priority Date =>
                                                {{ date('d-M-Y H:i:s', strtotime($bookings[2])) }}</li>
                                        </ul>
                                        <div class="d-flex justify-content-center">
                                            <img src="{{ asset('img/booking/waiting.gif') }}" class="img-waiting"
                                                alt="waiting" />
                                        </div>
                                    </div>
                                @elseif($status == 1)
                                    <div class="page">
                                        <div class="d-flex">
                                            <div class="dotbox">
                                                <span class="dot">1</span>
                                                <span class="dot">2</span>
                                                <span class="dot active">3</span>
                                                <span class="dot">4</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <img src="{{ asset('img/booking/confirm.gif') }}" class="img-confirm"
                                                alt="confirm" />
                                        </div>
                                        <h5 class="mt-3">Doctor approved your appointment....</h5>
                                    </div>
                                @elseif($status == 2)
                                    <div class="page">
                                        <div class="d-flex">
                                            <div class="dotbox">
                                                <span class="dot">1</span>
                                                <span class="dot">2</span>
                                                <span class="dot">3</span>
                                                <span class="dot active">4</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <img src="{{ asset('img/booking/finish.gif') }}" class="img-finish"
                                                alt="finish" />
                                        </div>
                                        <h5 class="mt-3 text-center">Your Appointment Process Finished....</h5>
                                    </div>
                                @endif
                                @if ($status !== null)
                                    <div class="d-flex justify-content-between mt-3">
                                        <button type="button" id="prevbtn" class="btn btn-secondary"
                                            onclick="gonow(-1)">Previous</button>
                                        <button type="button" id="nextbtn" class="btn btn-info"
                                            onclick="gonow(1)">Next</button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
