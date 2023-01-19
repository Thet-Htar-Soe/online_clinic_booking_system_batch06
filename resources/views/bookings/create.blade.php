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
                                                        @if (session('errMsg'))
                                                            <small
                                                                class="d-block text-danger small mb-2">{{ session('errMsg') }}</small>
                                                        @endif

                                                    </div>
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label class="mb-2">Second Priority Appointment DateTime:</label>
                                                    <div class="row">
                                                        <div class="col-md-12"><input type="datetime-local"
                                                                class="form-control" name="bookingDate[]"
                                                                placeholder="Choose Date" /></div>
                                                        @if (session('errMsg'))
                                                            <small
                                                                class="d-block text-danger small mb-2">{{ session('errMsg') }}</small>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label class="mb-2">Third Priority Appointment DateTime:</label>
                                                    <div class="row">
                                                        <div class="col-md-12"><input type="datetime-local"
                                                                class="form-control" name="bookingDate[]"
                                                                placeholder="Choose Date" /></div>
                                                        @if (session('errMsg'))
                                                            <small
                                                                class="d-block text-danger small mb-2">{{ session('errMsg') }}</small>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label class="mb-2">Patient's Name</label>
                                                    <input type="text" name="patientName" class="form-control"
                                                        value="{{ Request::old('patientName') }}"
                                                        placeholder="Enter Patient's Name" />

                                                </div>
                                                <div class="form-group mb-2">
                                                    <label class="mb-2">Doctor's Name</label>
                                                    <select name="doctorName" class="form-select">
                                                        <option selected disabled value="">Please Choose Doctor!!!
                                                        </option>

                                                        @foreach ($doctors as $doctor)
                                                            <option @if (Request::old('doctorName') == $doctor->id) selected @endif
                                                                value={{ $doctor->id }}>{{ $doctor->name }}
                                                            </option>
                                                        @endforeach

                                                    </select>
                                                    @if (session('errMsg'))
                                                        <small
                                                            class="d-block text-danger small mb-2">{{ session('errMsg') }}</small>
                                                    @endif

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

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
