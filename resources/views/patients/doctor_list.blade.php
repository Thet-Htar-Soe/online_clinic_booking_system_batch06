@extends('layouts.patient')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/patients/home.css') }}" />
@endsection
@section('content')
    <div class="container">
        @include('sweetalert::alert')
        <div class="row my-3">
            <div class="col-12">
                <div class="row">
                    <div class="col-8">
                        <h4 class="text-blue">
                            <i class="fa-solid fa-user-nurse"></i>
                            Doctor List
                        </h4>
                    </div>
                    <div class="col-4">
                        <nav class="navbar bg-body-tertiary">
                            <div class="container-fluid">
                                <form class="d-flex" role="search" action="{{ route('doctor.search') }}"
                                    method="post">
                                    @csrf
                                    <input class="form-control me-2" type="search" placeholder="Doctor Name"
                                        aria-label="Search" name="doctorSearch" value="{{ request('doctorSearch') }}">
                                    <button class="btn btn-outline-success" type="submit">Search</button>

                                </form>
                                @error('doctorSearch')
                                    <small class="font-weight-bold text-danger d-block">{{ $message }}</small>
                                @enderror
                            </div>
                        </nav>
                    </div>
                </div>
                <hr>
                <table class="table table-hover table-bordered" id="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Profile</th>
                            <th scope="col">Name</th>
                            <th scope="col">Specialist</th>
                            <th scope="col">Status</th>
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
                                        @if (!$doctor->profile_img)
                                            <img src="{{ asset('doctors/img_doctor_avatar.jpg') }}" class="listImg"
                                                style="width: 50px; height: 50px;" alt="profile">
                                        @else
                                            <img src="/doctors/{{ $doctor->profile_img }}" class="listImg"
                                                style="width: 50px; height: 50px;" alt="profile">
                                        @endif
                                    </td>
                                    <td>{{ $doctor->name }}</td>
                                    <td>{{ $doctor->specialist }}</td>
                                    <td>
                                        @if ($doctor->is_active == 0)
                                            <i class="fa-solid fa-circle-xmark px-1 text-danger"></i>Inactive
                                        @else
                                            <i class="fa-solid fa-circle-check px-1 text-success"></i>Active
                                        @endif
                                    </td>
                                    <td class="text-nowrap">
                                        <a href="{{ route('doctor.detail', $doctor->id) }}"
                                            class="btn btn-blue btn-sm text-light">
                                            <i class="fas fa-circle-info"></i>Detail
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    <tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
