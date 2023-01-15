@extends('layouts.base')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/home.css') }}">
@endsection
@section('content')
    <div class="container">
        <span>
            <a class="text-decoration-none text-secondary" href="{{ route('admin.index') }}">Home</a>
            <a class="text-decoration-none text-secondary" href="{{ route('admin.show', $admin->id) }}">/Profile</a>
            <a class="text-decoration-none text-secondary" href="#">/Profile Update</a>
        </span>
        <div class="row my-5 ">
            <h4 class="text-blue">
                <i class="fas fa-gear"></i>
                Profile Update
            </h4>
            <div class="col-lg-6 col-md-6 col-sl-12">
                <form action="{{ route('admin.update', $admin->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="" class="mb-1 mt-3">
                            <i class="text-blue fas fa-user"></i>
                            User Name
                        </label>
                        <input class="form-control" type="text" name="name" value="{{ $admin->name }}">
                        @error('name')
                            <small class="font-weight-bold text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="" class="mb-1 mt-1">
                            <i class="text-blue fas fa-at"></i>
                            Email
                        </label>
                        <input class="form-control" type="text" name="email" value="{{ $admin->email }}">
                        @error('email')
                            <small class="font-weight-bold text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <button type="submit" class="btn btn-blue text-light form-control">Update</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-6 col-sl-12">
                <img class="detailImage shadow" src="{{ asset('img/img_admin.jpg') }}" alt="" width="200px"
                    height="200px" class="p-3">
            </div>
        </div>
    </div>
@endsection
