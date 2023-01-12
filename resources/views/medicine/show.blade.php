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
                        
                        <table class="table" style="border:1px solid black;">
                            <thead>
                                <tr>
                                    <th>Brand</th>
                                    <td>{{$detailMedicine->name}}</td>
                                </tr>
                                <tr>
                                    <th>Classification</th>
                                    <td>{{$detailMedicine->classification}}</td>
                                </tr>
                                <tr>
                                    <th>Symptom</th>
                                    <td>{{$detailMedicine->symptom}}</td>
                                </tr>
                                <tr>
                                    <th>Treatment</th>
                                    <td>{{$detailMedicine->treatment}}</td>
                                </tr>
                                <tr>
                                    <th>Quantity</th>
                                    <td>{{$detailMedicine->quantity}}</td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td>{{$detailMedicine->price}}</td>
                                </tr>
                            </thead>
                        </table>
            </div>
        </div>
    </div>
@endsection
