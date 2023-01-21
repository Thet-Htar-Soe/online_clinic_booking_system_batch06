@extends('layouts.base')
@section('css')
    <link href="{{ asset('css/medicine/style.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="col-md-4 offset-md-4 col-sm-6 offset-sm-3 mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Import Medicines</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('medicines.importMedicines') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group my-3">
                        <input type="file" name="file" class="form-control" />
                        @if (isset($errors) && $errors->any())
                            @foreach ($errors->all() as $error)
                                <small class="text-danger small">{{ $error }}</small><br />
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <a href="{{ route('medicines.index') }}" class="btn btn-secondary">Back</a>
                        <button type="submit" class="btn btn-primary">Import</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
