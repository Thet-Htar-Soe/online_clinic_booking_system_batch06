@extends('layouts.base')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/invoice/home.css') }}">
@endsection
@section('content')
    <div class="container">
        <span>
            <a class="text-decoration-none text-secondary" href="#">Checkout</a>
            <a class="text-decoration-none text-secondary" href="">/Booking List</a>
        </span>
        <form action="" method="post" enctype="multipart/form-data" class="mt-3">
            @csrf
            <div class="row">
                <div class="col-12 px-5">
                    <h4 class="text-blue">
                        <i class="fa-solid fa-calendar-check"></i>
                        Today Booking List
                        <a class="float-end text-decoration-none text-blue" href="">
                            <i class="fa-solid fa-list"></i>
                            Booking List
                        </a>
                    </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12 px-5" id="result">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Booking ID</th>
                                <th>Patient Name</th>
                                <th>Book Date</th>
                                <th>Book Time</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="pbody">
                            @foreach ($bookings as $booking)
                                <tr>
                                    <td>{{ $booking->id }}</td>
                                    <td>
                                        @foreach (App\Models\Patient::where('id', $booking->patient_id)->get() as $patient)
                                            {{ $patient->name }}
                                        @endforeach
                                    </td>
                                    <td>{{ date('d-m-Y', strtotime($booking->book_date[0])) }}</td>
                                    <td> {{ date('H:i:s', strtotime($booking->book_date[0])) }}</td>
                                    <td><a class="btn btn-blue text-light btn-sm"
                                            href="{{ route('invoice.invoicecreate', $booking->id) }}">Check out</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="">
                        {{ $bookings->links() }}
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
