@extends('layouts.base')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/doctor/home.css') }}">
@endsection
@section('content')
    @include('sweetalert::alert')
    <div class="container">
        <div class="row my-3">
            <div class="col-12">
                <h4 class="text-blue">
                    Booking Lists
                </h4>
                <hr>
                <table class="table table-hover table-bordered" id="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Doctor</th>
                            <th scope="col">Patient</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($bookings) > 0)
                            @foreach ($bookings as $booking)
                                <tr>
                                    <td>{{ $booking->id }}</td>
                                    <td>{{ $booking->doctors->doctorDetail->name }}</td>
                                    <td>{{ $booking->patients->name }}</td>
                                    <td class="text-nowrap">
                                        <a href="{{ route('bookings.show', $booking->id) }}"
                                            class="btn btn-sm btn-outline-info"> <i class="fa-solid fa-circle-info"></i></a>

                                        <form action="{{ route('bookings.destroy', $booking->id) }}" method="post"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            @if ($booking->status == 2 || $booking->status == 5)
                                                <button class="btn btn-outline-danger btn-sm"
                                                    onclick="return confirm('Are you sure to delete?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            @else
                                                <a class="btn btn-outline-danger btn-sm"
                                                    onclick="return confirm('This Booking is not confirm yet. You cannot delete.')">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            @endif
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <th colspan="4" class="text-center">No Booking...</th>
                            </tr>
                        @endif
                    <tbody>
                </table>
                {{ $bookings->links() }}
            </div>
        </div>
    </div>
@endsection
