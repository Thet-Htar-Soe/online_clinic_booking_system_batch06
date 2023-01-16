@extends('layouts.base')
@section('content')
    <div class="container">
        <span>
            <a class="text-decoration-none text-secondary" href="{{ url('/patient') }}">Patient</a>
            <a class="text-decoration-none text-secondary" href="{{ url('/patients/list') }}">/Patient List</a>
        </span>
        <div class="row my-3">
            <div class="col-12">
                @if (session('info'))
                    <div class="alert alert-info">
                        {{ session('info') }}
                    </div>
                @endif
                <h4 class="text-blue">
                    <i class="fa-solid fa-user-nurse"></i>
                    Patient List
                    <a class="float-end text-decoration-none text-blue" href="{{ route('patients.create') }}">
                        <i class="fa-solid fa-plus"></i>
                        Add New Patient
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
                            <th scope="col">Phone</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    @foreach ($patients as $patient)
                        <tr>
                            <td>{{ $patient->id }}</td>
                            <td><img src="{{ asset('img/img_user.png') }}" class="listImg"
                                    style="width: 35px; height: 35px;" alt="profile"></td>
                            <td>{{ $patient->name }}</td>
                            <td>{{ $patient->email }}</td>
                            <td>{{ $patient->phone }}</td>
                            <td class="text-nowwrap">
                                <a href="{{ route('patients.show', ['patient' => $patient->id]) }}" class="btn btn-outline-info btn-sm"><i
                                        class="fa-solid fa-circle-info"></i></a>
                                <form class="d-inline-block" action="{{ route('patients.destroy', ['patient' => $patient->id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete?')"><i
                                            class="fas fa-trash"></i></button>
                                    <input type="hidden" name="_method" value="DELETE">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
                <div class="d-flex justify-content-center">
                    {!! $patients->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
