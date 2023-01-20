@extends('layouts.base')
@section('css')
    <link href="{{ asset('css/medicine/style.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="container pt-5">
        <span>
            <a class="text-decoration-none text-secondary" href="{{ route('medicines.index') }}">Medicines</a>
            <a class="text-decoration-none text-secondary" href="#">/Medicine List</a>
        </span>
        {{-- Create Success Alert --}}
        @if (session('success'))
            <div class="row mt-2">
                <div class="col-12">
                    <div class="alert alert-success d-flex justify-content-between" role="alert">
                        {{ session('success') }}
                        <a href="{{ route('medicines.index') }}" class="btn btn-sm btn-outline-dark">&times;</a>
                    </div>
                </div>
            </div>
        @endif
        {{-- Update Success Alert --}}
        @if (session('update'))
            <div class="row mt-2">
                <div class="col-12">
                    <div class="alert alert-success d-flex justify-content-between" role="alert">
                        {{ session('update') }}
                        <a href="{{ route('medicines.index') }}" class="btn btn-sm btn-outline-dark">&times;</a>
                    </div>
                </div>
            </div>
        @endif
        {{-- Delete Success Alert --}}
        @if (session('delete'))
            <div class="row mt-2">
                <div class="col-12">
                    <div class="alert alert-danger d-flex justify-content-between" role="alert">
                        {{ session('delete') }}
                        <a href="{{ route('medicines.index') }}" class="btn btn-sm btn-outline-dark">&times;</a>
                    </div>
                </div>
            </div>
        @endif
        {{-- Import Success Alert --}}
        @if (session('importSuccess'))
            <div class="row mt-2">
                <div class="col-12">
                    <div class="alert alert-success d-flex justify-content-between" role="alert">
                        {{ session('importSuccess') }}
                        <a href="{{ route('medicines.index') }}" class="btn btn-sm btn-outline-dark">&times;</a>
                    </div>
                </div>
            </div>
        @endif
        <div class="row my-3">
            <div class="col-12">
                <h4 class="text-blue">
                    <i class="fas fa-pills"></i>
                    Medicine List
                    <a class="float-end text-decoration-none text-blue" href="{{ route('medicines.create') }}">
                        <i class="fa-solid fa-plus"></i>
                        Add New Medicine
                    </a>
                </h4>
                <a href="{{ route('medicines.import') }}" class="btn btn-sm my-3 btn-outline-primary float-end"><i
                        class="fa-solid fa-plus"></i>Import Medicines</a>
                <hr>
                <table class="table table-hover table-bordered" id="table">
                    <thead>
                        <tr>
                            <th scope="col">ID No</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Classification</th>
                            <th scope="col">Symptom</th>
                            <th scope="col">Treatment</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    @foreach ($medicines as $medicine)
                        <tr>
                            <td>{{ $medicine->id }}</td>
                            <td>{{ $medicine->name }}</td>
                            <td class="text-truncate" style="max-width:200px">{{ $medicine->classification }}</td>
                            <td class="text-truncate" style="max-width:200px">{{ $medicine->symptom }}</td>
                            <td class="text-truncate" style="max-width:200px">{{ $medicine->treatment }}</td>
                            <td>{{ $medicine->quantity }}</td>
                            <td>{{ $medicine->price }}</td>
                            <td class="text-nowrap">
                                <a href="{{ route('medicines.show', ['medicine' => $medicine->id]) }}"
                                    class="btn btn-outline-primary btn-sm">
                                    <i class="fa-solid fa-circle-info"></i>
                                </a>
                                <a href="{{ route('medicines.edit', ['medicine' => $medicine->id]) }}"
                                    class="btn btn-outline-info btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('medicines.destroy', ['medicine' => $medicine->id]) }}"
                                    method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm deleteProductBtn"
                                        onclick="alert('Are You Sure Want To Delete?')"
                                        data-product-id="{{ $medicine->id }}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
                {{ $medicines->links() }}
            </div>
        </div>
    </div>
@endsection
