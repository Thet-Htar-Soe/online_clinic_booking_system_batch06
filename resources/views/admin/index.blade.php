@extends('layouts.base')
@section('content')
    <div class="container">
        <span>
            <a class="text-decoration-none text-secondary" href="#">Home</a>
        </span>
        @include('sweetalert::alert')
    </div>
@endsection
