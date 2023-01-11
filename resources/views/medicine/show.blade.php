@extends('layouts.base')
@section('css')
    <link href="{{ asset('css/medicine/style.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="container pt-5">
        <span>
            <a class="text-decoration-none text-secondary" href="{{ route('medicines') }}">Medicine</a>
            <a class="text-decoration-none text-secondary" href="#">/Medicine Detail</a>
        </span>
        <div class="row justify-content-center my-3">
            <div class="col-8">
                <h5 class="text-center phead">Detail Information</h5>
                <a href="{{ route('medicines') }}" class="text-blue text-end" style="text-decoration: none;">
                    <-Go Back</a>
                        <hr>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Generic</th>
                                    <td>test</td>
                                </tr>
                                <tr>
                                    <th>Brand</th>
                                    <td>test</td>
                                </tr>
                                <tr>
                                    <th>Manufacture</th>
                                    <td>test</td>
                                </tr>
                                <tr>
                                    <th>Unit</th>
                                    <td>test</td>
                                </tr>
                                <tr>
                                    <th>Presentation</th>
                                    <td>test</td>
                                </tr>
                                <tr>
                                    <th>Expire Date</th>
                                    <td>test</td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td>test</td>
                                </tr>
                                <tr>
                                    <th>Quantity</th>
                                    <td>test</td>
                                </tr>
                                <tr>
                                    <th>Register Date</th>
                                    <td>test</td>
                                </tr>
                            </thead>
                        </table>
            </div>
        </div>
    </div>
@endsection
