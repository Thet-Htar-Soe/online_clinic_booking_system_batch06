@extends('layouts.base')
@section('css')
    <link href="{{ asset('css/medicine/style.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="container pt-5">
        <span>
            <a class="text-decoration-none text-secondary" href="{{ route('medicines') }}">Medicines</a>
            <a class="text-decoration-none text-secondary" href="#">/Medicine List</a>
        </span>
        <div class="row my-3">
            <div class="col-12">
                <h4 class="text-blue">
                    <i class="fas fa-pills"></i>
                    Medicine List
                    <a class="float-end text-decoration-none text-blue" href="{{ route('medicines_create') }}">
                        <i class="fa-solid fa-plus"></i>
                        Add New Medicine
                    </a>
                </h4>
                <hr>
                <table class="table table-hover table-bordered" id="table">
                    <thead>
                        <tr>
                            <th scope="col">ID No</th>
                            <th scope="col">Generic</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                        <td class="text-nowrap">
                            <a href="{{ route('medicines_show') }}" class="btn btn-outline-primary btn-sm">
                                <i class="fa-solid fa-circle-info"></i>
                            </a>
                            <a href="{{ route('medicines_edit') }}" class="btn btn-outline-info btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="medicine_delete.php?id=1" class="btn btn-outline-danger btn-sm"
                                onclick="return confirm('Are you sure to delete?')">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
