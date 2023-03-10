@extends('layouts.base')
@section('css')
    <link href="{{ asset('css/medicine/style.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="container">
        <span>
            <a class="text-decoration-none text-secondary" href="{{ route('medicines.index') }}">Medicines</a>
            <a class="text-decoration-none text-secondary" href="#">/Medicine List</a>
        </span>
        @include('sweetalert::alert')
        <div class="row my-3">
            <div class="col-12 table-responsive table-responsive-sm">
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
                            <td class="text-truncate" style="max-width:140px">{{ $medicine->classification }}</td>
                            <td class="text-truncate" style="max-width:140px">{{ $medicine->symptom }}</td>
                            <td class="text-truncate" style="max-width:120px">{{ $medicine->treatment }}</td>
                            <td>{{ $medicine->quantity }}</td>
                            <td>{{ price_type( $medicine->price) }}</td>
                            <td class="text-nowrap">
                                <a href="{{ route('medicines.show', ['medicine' => $medicine->id]) }}"
                                    class="btn btn-outline-info btn-sm">
                                    <i class="fa-solid fa-circle-info"></i>
                                </a>
                                <a href="{{ route('medicines.edit', ['medicine' => $medicine->id]) }}"
                                    class="btn btn-outline-warning btn-sm">
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
