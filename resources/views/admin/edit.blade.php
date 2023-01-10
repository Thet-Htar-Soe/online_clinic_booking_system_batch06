@extends('layouts.base')
@section('css')
<link rel="stylesheet" href="{{ asset('css/admin/home.css') }}">
@endsection
@section('content')
<div class="container">
    <span>
        <a class="text-decoration-none text-secondary" href="{{ route('admin.show') }}">Admin</a>
        <a class="text-decoration-none text-secondary" href="#">/Admin Update</a>
    </span>
    <div class="row my-5 ">
        <h4 class="text-blue">
            <i class="fas fa-gear"></i>
            Profile Update
        </h4>
        <div class="col-lg-8 col-md-8 col-sl-12">
            <form action="" method="post">
                <div class="form-group">
                    <label for="" class="mb-1 mt-3">
                        <i class="text-blue fas fa-user"></i>
                        User Name
                    </label>
                    <input class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="" class="mb-1 mt-3">
                        <i class="text-blue fas fa-at"></i>
                        Email
                    </label>
                    <input class="form-control" type="email" name="email">
                </div>
                <div class="form-group">
                    <label for="" class="mb-1 mt-3">
                        <i class="text-blue fas fa-calendar"></i>
                        Date of Birth
                    </label>
                    <input class="form-control" type="date" name="dob">
                </div>
                <div class="form-group">
                    <label for="" class="mb-1 mt-3">
                        <i class="text-blue fas fa-phone"></i>
                        Phone
                    </label>
                    <input class="form-control" type="text" name="phone">
                </div>
                <div class="form-group">
                    <label for="" class="mb-1 mt-3">
                        <i class="text-blue fas fa-map"></i>
                        Address
                    </label>
                    <textarea name="address" id="address" class="form-control" cols="30" rows="2"></textarea>
                </div>
                <br>
                <div class="form-group">
                    <button name="btn-login" class="btn btn-blue text-light form-control">Update</button>
                </div>
            </form>
        </div>
        <div class="col-lg-4 col-md-4 col-sl-12">
            <div class="card mt-4">
                <img id="profile_photo" src="{{ asset('img/img_admin.jpg') }}" class="card-img-top" alt="Profile">
                <form action="" method="" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="file" name="profile" class="form-control">
                    </div>
                    <div class="card-body">
                        <button type="submit" class="btn btn-blue text-light form-control">Change Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
