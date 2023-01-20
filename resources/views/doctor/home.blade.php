@extends('layouts.base')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/doctor/home.css') }}">
@endsection
@section('content')
    <div class="container">
        @include('sweetalert::alert')
        <h1 class="text-center">Welcome Doctor <span class="text-blue">{{ session('doctor')->name }}</span></1>
    </div>
@endsection
