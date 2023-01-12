@extends('layouts.base')
@section('css')
<link rel="stylesheet" href="{{ asset('css/invoice/home.css') }}">
@endsection
@section('content')
<div class="container">
    <span>
        <a class="text-decoration-none text-secondary" href="#">Patient</a>
        <a class="text-decoration-none text-secondary" href="#">/Search Patient</a>
    </span>
    <form action="" method="post" enctype="multipart/form-data" class="mt-3">
        <div class="row">
            <div class="col-12 px-5">
                <h4 class="text-blue">
                    <i class="fas fa-bed"></i>
                    Search Patient
                    <a class="float-end text-decoration-none text-blue" href="">
                        <i class="fa-solid fa-list"></i>
                        Patient List
                    </a>
                </h4>
                <hr>
                <div class="form-group text-blue">
                    <label for="">Patient Name</label>
                    <input type="text" name="patient_name" id="search_name" value="" class="form-control" placeholder="Search By Name">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 my-5 px-5" id="result">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="pbody">
                        <td>Mg Mg</td>
                        <td>09123456789</td>
                        <td>Yangon</td>
                        <td><a class="btn btn-blue text-light btn-sm" href="check_out.php?id=1">Check out</a></td>
                    </tbody>
                </table>
            </div>
        </div>
    </form>
</div>
@endsection
