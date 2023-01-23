@extends('layouts.base')
@section('css')
    <link href="{{ asset('css/medicine/style.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="container">
        <span>
            <a class="text-decoration-none text-secondary" href="{{ route('medicines.index') }}">Medicine</a>
            <a class="text-decoration-none text-secondary" href="#">/Medicine Update</a>
        </span>
        <div class="row justify-content-center min-vh-100">
            <div class="col-lg-12 col-md-12 col-sl-12">
                <form action="{{ route('medicines.update', ['medicine' => $medicine->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row my-3">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="text-blue">
                                        <i class="fas fa-pills"></i>
                                        Medicine Update
                                        <a class="float-end text-decoration-none text-blue" href="">
                                            <i class="fa-solid fa-list"></i>
                                            View List
                                        </a>
                                    </h4>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Brand</label>
                                            <input type="text" class="form-control" name="name"
                                                value="{{ $medicine->name }}">
                                            @error('name')
                                                <small class="text-danger small">{{ $errors->first('name') }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Classification</label>
                                            <input type="text" class="form-control" name="classification"
                                                value="{{ $medicine->classification }}">
                                            @error('classification')
                                                <small class="text-danger small">{{ $errors->first('classification') }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Symptom</label>
                                            <textarea class="form-control" name="symptom" rows="3">{{ $medicine->symptom }}</textarea>
                                            @error('symptom')
                                                <small class="text-danger small">{{ $errors->first('symptom') }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Treatment</label>
                                            <textarea class="form-control" name="treatment" rows="3">{{ $medicine->treatment }}</textarea>
                                            @error('treatment')
                                                <small class="text-danger small">{{ $errors->first('treatment') }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">quantity</label>
                                            <input type="number" class="form-control" name="quantity"
                                                value="{{ $medicine->quantity }}">
                                            @error('quantity')
                                                <small class="text-danger small">{{ $errors->first('quantity') }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Price</label>
                                            <input type="number" class="form-control" name="price"
                                                value="{{ $medicine->price }}">
                                            @error('price')
                                                <small class="text-danger small">{{ $errors->first('price') }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="text-blue">
                                        <i class="fa-solid fa-layer-group"></i>
                                        Select Category
                                    </h4>
                                    <hr>
                                    <div class="form-group mb-3">
                                        <select name="category_id[]" multiple>
                                            @foreach ($categories as $category)
                                                <option
                                                    @foreach ($medicine->category as $foreignCategory)
                                            @if ($category->id == $foreignCategory->id)
                                            selected
                                            @endif @endforeach
                                                    value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <small
                                                class="d-block text-danger small">{{ $errors->first('category_id') }}</small>
                                        @enderror
                                    </div>
                                    <a href="{{ route('medicines.index') }}"
                                        class="btn btn-secondary text-light my-3">Back</a>
                                    <button type="submit" name="btn-add"
                                        class="btn btn-blue text-light my-3">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
