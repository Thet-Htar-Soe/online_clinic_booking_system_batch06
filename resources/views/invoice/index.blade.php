@extends('layouts.base')
@section('css')
<link rel="stylesheet" href="{{ asset('css/invoice/home.css') }}">
@endsection
@section('content')
<div class="container">
    <span>
        <a class="text-decoration-none text-secondary" href="#">Invoice</a>
        <a class="text-decoration-none text-secondary" href="#">/Invoice List</a>
    </span>
    <div class="row my-3">
        <div class="col-12">
            <h4 class="text-blue">
                <i class="fa-solid fa-file"></i>
                Invoice List
            </h4>
            <hr>
            <table class="table table-hover table-bordered" id="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Invoice No</th>
                        <th scope="col">Date</th>
                        <th scope="col">Patient Name</th>
                        <th scope="col">Grand Total</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tr>
                    <td>1</td>
                    <td>0000</td>
                    <td>8/1/2023</td>
                    <td>Mg Mg</td>
                    <td>1000</td>
                    <td class="text-nowrap">
                        <a href="{{ route('invoice.show') }}" class="btn btn-outline-info btn-sm">
                            <i class="fa-solid fa-circle-info"></i>
                        </a>
                        <a href="#" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure to delete?')">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
