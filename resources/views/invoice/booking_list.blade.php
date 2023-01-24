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
                <div class="row">
            <div class="col-12 px-5">
                <h5 class="text-blue">Search Booking By Patient Name</h5>
                <div class="form-group">
                    <label for="search_name" class="py-2">Patient Name</label>
                    <input type="text" id="search_name" name="search_name" value="" placeholder="Patient Name" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 px-5 mt-3">
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
            <div class="col-12 px-5">
                <table class="table table-hover" id="result">

                </table>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
    <script>
        $("#search_name").keyup(function() {
            var query = $("#search_name").val();
            var url = '{{ route('invoice.invoicecreate', ':id') }}';

            axios.get('/search_booking/' + query)
                .then(response => {
                    var result = document.getElementById('result');
                    result.innerHTML =
                            '<tr>' +
                            '<th>Booking ID</th>' +
                            '<th>Patient Name</th>' +
                            '<th>Booking Date</th>' +
                            '<th>Action</th>' +
                            '<tr>';
                    response.data.forEach(bookings => {
                        url = url.replace(':id', bookings.id);
                        result.innerHTML +=
                            '<tr>' +
                            '<td>' + bookings.id + '</td>' +
                            '<td>' + bookings.patients.name + '</td>' +
                             '<td>' + bookings.book_date + '</td>' +
                            '<td><a class="btn btn-blue text-light btn-sm" href=' + url +
                            '>Check out</a></td>' +
                            '</td>' +
                            '<tr>';
                    });
                })
                .catch(error => console.log(error));
        });
    </script>
@endsection
