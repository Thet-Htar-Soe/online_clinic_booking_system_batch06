@extends('layouts.base')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/home.css') }}">
@endsection
@section('content')
    <div class="container">
        <span>
            <a class="text-decoration-none text-secondary" href="#">Profile</a>
        </span>
        <div class="row justify-content-center my-3 mt-5">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                <div class="card shadow px-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mb-1 ">
                                <img class="detailImage shadow" src="{{ asset('img/img_admin.jpg') }}" alt=""
                                    width="200px" height="200px" class="p-3">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 bg-blue text-light text-start m-auto py-3">
                                <h1 class="text-center"> {{ $admin->name }}</h1>
                                <h5 class="text-center">(Admin)</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bg-blue">
                                <table class="table table-borderless text-light">
                                    <tr>
                                        <td>
                                            <span class="text-nowrap"><i
                                                    class="px-1 fa-solid fa-circle-user"></i>Name:</span>
                                        </td>
                                        <td>
                                            {{ $admin->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="text-nowrap"><i class="px-1 fa-solid fa-at"></i>Email:</span>
                                        </td>
                                        <td>
                                            {{ $admin->email }}
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-blue">
                                <table class="table text-blue">
                                    <tr>
                                        <td>
                                            <span class="text-nowrap"><i class="px-1 fa-solid fa-star"></i>Role:</span>
                                        </td>
                                        <td>
                                            Admin
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="text-nowrap"><i
                                                    class="px-1 fa-solid fa-calendar-check"></i>Register Date:</span>
                                        </td>
                                        <td>
                                            {{ date('d-m-Y', strtotime($admin->created_at)) }}
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('admin.edit', $admin->id) }}" class="btn btn-blue mt-3 text-light">Update Profile</a>
                <form action="{{ route('admin.destroy', $admin->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-secondary mt-3 text-light"
                        onclick="return confirm('Are you sure to delete?')">Delete Profile
                    </button>
                </form>

                @include('sweetalert::alert')
            </div>
        </div>
    </div>
@endsection
