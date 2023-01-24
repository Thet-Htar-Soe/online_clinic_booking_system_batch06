@extends('layouts/patient')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/booking/home.css') }}" />
@endsection
@section('content')
    <section class="booking-bg" >
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-3">
                    <div class="card mt-5 start-50">
                        <div class="card-header">Patient Appointment Form</div>
                        <div class="card-body">
                            <div id="getMain" class="getMain">
                                @php
                                    if (isset($bookings->status)) {
                                        $status = $bookings->status;
                                    } else {
                                        $status = null;
                                    }
                                @endphp

                                @if ($status == 0)
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
                                                {{ date('d-M-Y H:i:s', strtotime($bookings->book_date[0])) }}</li>
                                            <li class="mb-2">Second Priority Date =>
                                                {{ date('d-M-Y H:i:s', strtotime($bookings->book_date[1])) }}</li>
                                            <li class="mb-2">Third Priority Date =>
                                                {{ date('d-M-Y H:i:s', strtotime($bookings->book_date[2])) }}</li>
                                        </ul>
                                        <div class="d-flex justify-content-center">
                                            <img src="{{ asset('img/booking/waiting.gif') }}" class="img-waiting"
                                                alt="waiting" />
                                        </div>
                                    </div>
                                @elseif($status == 1 || $status == 4)
                                    <div class="page">
                                        <div class="d-flex">
                                            <div class="dotbox">
                                                <span class="dot">1</span>
                                                <span class="dot">2</span>
                                                <span class="dot active">3</span>
                                                <span class="dot">4</span>
                                            </div>
                                        </div>
                                        <h5 class="mt-3">Here Is Your Appointment
                                            Date=>{{ date('d-M-Y H:i:s', strtotime($bookings->book_date[0])) }}</h5>
                                        <div class="d-flex justify-content-center">
                                            <img src="{{ asset('img/booking/confirm.gif') }}" class="img-confirm"
                                                alt="confirm" />
                                        </div>
                                        <form action="{{ route('bookings.update', ['booking' => $bookings->id]) }}"
                                            method="post" class="d-inline">
                                            @csrf
                                            @method('PUT')
                                            <input name="status" type="hidden" value="{{ $bookings->status }}" />
                                            <button type="submit" class="btn btn-info">OK</button>
                                        </form>

                                    </div>
                                @elseif($status == 3)
                                    <div class="page">
                                        <div class="d-flex">
                                            <div class="dotbox">
                                                <span class="dot">1</span>
                                                <span class="dot">2</span>
                                                <span class="dot active">3</span>
                                                <span class="dot">4</span>
                                            </div>
                                        </div>
                                        <h5 class="mt-3 text-center text-danger">Sorry!!! You Can't Available To Make
                                            Appoinment Now.</h5>
                                        <div class="d-flex justify-content-end mt-3">
                                            <form action="{{ route('bookings.update', ['booking' => $bookings->id]) }}"
                                                method="post" class="d-inline">
                                                @csrf
                                                @method('PUT')
                                                <input name="status" type="hidden" value="{{ $bookings->status }}" />
                                                <button type="submit" class="btn btn-info">OK</button>
                                            </form>
                                        </div>

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
                                        <h5 class="my-3 text-center">Your Appointment Process Finished....</h5>
                                        <div class="d-flex justify-content-center">
                                            <img src="{{ asset('img/booking/finish.gif') }}" class="img-finish"
                                                alt="finish" />
                                        </div>
                                    </div>
                                @elseif($status == 5 )
                                    <div class="page">
                                        <h5 class="mt-1 text-danger mb-3">Your booking dates were rejected.</h5>
                                         <ul class="ms-5">
                                            <li class="mb-2">First Priority Date =>
                                                {{ date('d-M-Y H:i:s', strtotime($bookings->book_date[0])) }}</li>
                                            <li class="mb-2">Second Priority Date =>
                                                {{ date('d-M-Y H:i:s', strtotime($bookings->book_date[1])) }}</li>
                                            <li class="mb-2">Third Priority Date =>
                                                {{ date('d-M-Y H:i:s', strtotime($bookings->book_date[2])) }}</li>
                                        </ul>
                                    </div>
                                     <div class="d-flex justify-content-end mt-3">
                                     <a href="{{ route('patients.booking_list') }}" class="btn btn-info">OK</a>
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
