@extends('layouts.base')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/doctor/home.css') }}">
@endsection
@section('content')
    <div class="container">
        <span>
            <a class="text-decoration-none text-secondary" href="{{ route('bookings.index') }}">Bookings</a>
            <a class="text-decoration-none text-secondary" href="#">/Bookings List</a>
        </span>
        {{-- Delete Success Alert --}}
        @if (session('delete'))
            <div class="row mt-2">
                <div class="col-12">
                    <div class="alert alert-danger d-flex justify-content-between" role="alert">
                        {{ session('delete') }}
                        <a href="{{ route('bookings.index') }}" class="btn btn-sm btn-outline-dark">&times;</a>
                    </div>
                </div>
            </div>
        @endif
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

                        @foreach ($bookings as $booking)
                            <tr>
                                <td>{{ $booking->id }}</td>
                                <td>{{ $booking->doctors->doctorDetail->name }}</td>
                                <td>{{ $booking->patients->name }}</td>
                                <td class="text-nowrap">
                                    <a href="{{ route('bookings.show', $booking->id) }}"
                                        class="btn btn-sm btn-outline-secondary">Details</a>

                                    <form action="{{ route('bookings.destroy', $booking->id) }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure to delete?')">
                                            delete
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach

                    <tbody>
                </table>
                {{ $bookings->links() }}
            </div>
        </div>
    </div>
@endsection
