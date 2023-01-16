@extends('layouts.base')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/doctor/home.css') }}">
@endsection
@section('content')
    <div class="container pt-5">
        <span>
            <a class="text-decoration-none text-secondary" href="{{ route('bookings.index') }}">Booking</a>
            <a class="text-decoration-none text-secondary" href="#">/Booking Detail</a>
        </span>
        <div class="row justify-content-center my-3">
            <div class="col-8">
                <h5 class="text-center phead">Booking Detail Information</h5>
                <a href="{{ route('bookings.index') }}" class="text-blue text-end" style="text-decoration: none;">
                    <-Go Back</a>
                        <hr>
                        <table class="table" style="border:1px solid black;">
                            <thead>
                                <tr>
                                    <th>First Priority Date</th>
                                    <td><i
                                            class="px-1 fa-solid fa-calendar-check"></i>{{ date('d-M-Y', strtotime($booking->book_date[0])) }}
                                        <i
                                            class="px-1 fa-solid fa-clock"></i>{{ date('H:s:i', strtotime($booking->book_date[0])) }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Second Priority Date</th>
                                    <td><i
                                            class="px-1 fa-solid fa-calendar-check"></i>{{ date('d-M-Y', strtotime($booking->book_date[1])) }}
                                        <i
                                            class="px-1 fa-solid fa-clock"></i>{{ date('H:s:i', strtotime($booking->book_date[1])) }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Third Priority Date</th>
                                    <td><i
                                            class="px-1 fa-solid fa-calendar-check"></i>{{ date('d-M-Y', strtotime($booking->book_date[2])) }}
                                        <i
                                            class="px-1 fa-solid fa-clock"></i>{{ date('H:s:i', strtotime($booking->book_date[2])) }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Doctor Name</th>
                                    <td>{{ $booking->doctors->doctorDetail->name }}</td>
                                </tr>
                                <tr>
                                    <th>Patient Name</th>
                                    <td>{{ $booking->patients->name }}</td>
                                </tr>
                            </thead>
                        </table>
            </div>
        </div>
    </div>
@endsection
