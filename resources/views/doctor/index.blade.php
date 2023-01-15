@extends('layouts.base')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/doctor/home.css') }}">
@endsection
@section('content')
    <div class="container">
        <span>
            <a class="text-decoration-none text-secondary" href="{{ route('doctor.index') }}">Doctor</a>
            <a class="text-decoration-none text-secondary" href="#">/Doctor List</a>
        </span>
        @include('sweetalert::alert')
        <div class="row my-3">
            <div class="col-12">
                <h4 class="text-blue">
                    <i class="fa-solid fa-user-nurse"></i>
                    Doctor List
                    <a class="float-end text-decoration-none text-blue" href="{{ route('doctor.create') }}">
                        <i class="fa-solid fa-plus"></i>
                        Add New Doctor
                    </a>
                </h4>
                <hr>
                <table class="table table-hover table-bordered" id="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Profile</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Specialist</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($doctors) < 1)
                            <tr>
                                <td colspan="6" class="text-center">There is no doctor yet.</td>
                            </tr>
                        @else
                            @foreach ($doctors as $doctor)
                                <tr>
                                    <td>{{ $doctor->id }}</td>
                                    <td>
                                        @if (!$doctor->doctorDetail->profile_img)
                                            <img src="{{ asset('doctors/img_doctor_avatar.jpg') }}" class="listImg"
                                                style="width: 50px; height: 50px;" alt="profile">
                                        @else
                                            <img src="/doctors/{{ $doctor->doctorDetail->profile_img }}" class="listImg"
                                                style="width: 50px; height: 50px;" alt="profile">
                                        @endif
                                    </td>
                                    <td>{{ $doctor->doctorDetail->name }}</td>
                                    <td>{{ $doctor->doctorDetail->email }}</td>
                                    <td>{{ $doctor->doctorDetail->specialist }}</td>
                                    <td class="text-nowrap">
                                        <a href="{{ route('doctor.show', $doctor->id) }}"
                                            class="btn btn-outline-info btn-sm">
                                            <i class="fas fa-info"></i>
                                        </a>
                                        <form action="{{ route('doctor.destroy', $doctor->id) }}" method="post"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-outline-danger btn-sm"
                                                onclick="return confirm('Are you sure to delete?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    <tbody>
                </table>
                <div class="">
                    {{ $doctors->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
