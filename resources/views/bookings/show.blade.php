@extends('layouts.base')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/doctor/home.css') }}">
@endsection
@section('content')
    <div class="container">
        <span>
            <a class="text-decoration-none text-secondary" href="{{ route('bookings.index') }}">Booking</a>
            <a class="text-decoration-none text-secondary" href="#">/Booking Detail</a>
        </span>
        <div class="row justify-content-center my-3">
            <div class="col-md-8 col-sm-12">
                @php
                    if (isset($bookingStatus)) {
                        $status = $bookingStatus;
                    }
                @endphp
                <h5 class="text-center phead">Booking Detail Information</h5>
                <a href="{{ route('bookings.index') }}" class="text-blue text-end" style="text-decoration: none;">
                    <-Go Back</a>
                        <hr>
                        @if ($status == 0)
                            <form action="{{ route('bookings.update', ['booking' => $booking->id]) }}" method="post"
                                class="d-inline">
                                @csrf
                                @method('PUT')
                                <table class="table" style="border:1px solid black;">
                                    <h5 class="text-center mb-3">Confirm Available Date</h5>
                                    <thead>
                                        <tr>
                                            <th>First Priority Date</th>
                                            <td>
                                                <input type="radio" name="confirmDate"
                                                    value="{{ $booking->book_date[0] }}" />
                                                <i class="px-1 fa-solid fa-calendar-check"></i>
                                                {{ date('d-M-Y', strtotime($booking->book_date[0])) }}
                                                <i
                                                    class="px-1 fa-solid fa-clock"></i>{{ date('H:s:i', strtotime($booking->book_date[0])) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Second Priority Date</th>
                                            <td>
                                                <input type="radio" name="confirmDate"
                                                    value="{{ $booking->book_date[1] }}" />
                                                <i class="px-1 fa-solid fa-calendar-check"></i>
                                                {{ date('d-M-Y', strtotime($booking->book_date[1])) }}
                                                <i
                                                    class="px-1 fa-solid fa-clock"></i>{{ date('H:s:i', strtotime($booking->book_date[1])) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Third Priority Date</th>
                                            <td>
                                                <input type="radio" name="confirmDate"
                                                    value="{{ $booking->book_date[2] }}" />
                                                <i class="px-1 fa-solid fa-calendar-check"></i>
                                                {{ date('d-M-Y', strtotime($booking->book_date[2])) }}
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
                                        <tr>
                                            <td class="text-end">
                                                <input name="status" type="hidden" value="{{ $booking->status }}" />
                                                <input name="condition" type="hidden" value="confirm" />
                                                <button class="btn btn-info btn-sm"
                                                    onclick="return confirm('Are you sure to confirm?')">
                                                    confirm
                                                </button>
                                            </td>
                            </form>
                            <td class="text-start">
                                <form action="{{ route('bookings.update', ['booking' => $booking->id]) }}" method="post"
                                    class="d-inline">
                                    @csrf
                                    @method('PUT')
                                    <input name="status" type="hidden" value="{{ $booking->status }}" />
                                    <input name="condition" type="hidden" value="deny" />
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to deny?')">
                                        deny
                                    </button>
                                </form>
                            </td>
                            </tr>
                            <tr style="border-top:1px solid black;">
                                <td colspan="2" class="text-center">
                                    <h5 class="my-2">Choose Other Available Date</h5>
                                    <form action="{{ route('bookings.update', ['booking' => $booking->id]) }}"
                                        method="post" class="d-inline">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <input name="confirmDate" type="datetime-local" class="form-control" />
                                        </div>
                                        <input name="status" type="hidden" value="{{ $booking->status }}" />
                                        <input name="condition" type="hidden" value="availableDate" />
                                        <button type="submit" class="btn btn-sm btn-primary my-3">Submit</button>
                                    </form>
                                </td>
                            </tr>

                            </thead>
                            </table>
                        @elseif($status == 1 || $status == 4)
                            <table class="table" style="border:1px solid black;">
                                <h5 class="text-center mb-3 text-warning">Appointment Date Pending</h5>
                                <thead>
                                    <tr>
                                        <th>Pending Date</th>
                                        <td>
                                            <i class="px-1 fa-solid fa-calendar-check"></i>
                                            {{ date('d-M-Y', strtotime($booking->book_date[0])) }}
                                            <i
                                                class="px-1 fa-solid fa-clock"></i>{{ date('H:s:i', strtotime($booking->book_date[0])) }}
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
                        @elseif($status == 2)
                            <table class="table" style="border:1px solid black;">
                                <h5 class="text-center text-success mb-3">Appointment Date Confirm</h5>
                                <thead>
                                    <tr>
                                        <th>Confirm Date</th>
                                        <td>
                                            <i class="px-1 fa-solid fa-calendar-check"></i>
                                            {{ date('d-M-Y', strtotime($booking->book_date[0])) }}
                                            <i
                                                class="px-1 fa-solid fa-clock"></i>{{ date('H:s:i', strtotime($booking->book_date[0])) }}
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
                        @elseif($status == 3 || $status == 5)
                            <table class="table" style="border:1px solid black;">
                                <h5 class="text-center text-danger mb-3">Appointment Date Denied</h5>
                                <thead>
                                    <tr>
                                        <th>First Priority Date</th>
                                        <td>
                                            <i class="px-1 fa-solid fa-calendar-check"></i>
                                            {{ date('d-M-Y', strtotime($booking->book_date[0])) }}
                                            <i
                                                class="px-1 fa-solid fa-clock"></i>{{ date('H:s:i', strtotime($booking->book_date[0])) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Second Priority Date</th>
                                        <td>
                                            <i class="px-1 fa-solid fa-calendar-check"></i>
                                            {{ date('d-M-Y', strtotime($booking->book_date[1])) }}
                                            <i
                                                class="px-1 fa-solid fa-clock"></i>{{ date('H:s:i', strtotime($booking->book_date[1])) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Third Priority Date</th>
                                        <td>
                                            <i class="px-1 fa-solid fa-calendar-check"></i>
                                            {{ date('d-M-Y', strtotime($booking->book_date[2])) }}
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
                        @endif
            </div>
        </div>
    </div>
@endsection
