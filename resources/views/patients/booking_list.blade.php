@extends('layouts.patient')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/patients/home.css') }}" />
@endsection
@section('content')
    <div class="container">
        @include('sweetalert::alert')
        <div class="row my-3">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <h4 class="text-blue">
                            <i class="fa-solid fa-list"></i>
                            Booking List
                        </h4>
                    </div>
                </div>
                <hr>
                <table class="table table-hover table-bordered" id="table">
                    <thead>
                        <tr>
                            <th scope="col">Booking ID</th>
                            <th scope="col">Doctor Name</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($bookings) < 1)
                            <tr>
                                <td colspan="6" class="text-center">There is no booking yet.</td>
                            </tr>
                        @else
                            @foreach ($bookings as $booking)
                                <tr>
                                    <td>{{ $booking->id }}</td>
                                    <td>{{ $booking->doctors->doctorDetail->name }}</td>
                                    <td class="text-nowrap">
                                        <a href="{{ route('bookings.process', $booking->id) }}"
                                            class="btn btn-blue btn-sm text-light">
                                            <i class="fas fa-circle-info"></i>Detail
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    <tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
