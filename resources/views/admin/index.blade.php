@extends('layouts.base')
@section('content')
    <div class="container">
        <span>
            <a class="text-decoration-none text-secondary" href="#">Home</a>
        </span>
        <div class="my-5 text-center">
            @if (Session::has('admin'))
                <h5 class="mb-3" style="font-size: 30px">Welcome {{ session('admin')->name }}</h5>
                <form action="{{ route('admin.logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-primary">Logout</button>
                </form>
            @endif
        </div>
        @include('sweetalert::alert')
    </div>
@endsection
