@extends('layouts.base')
@section('css')
    <link href="{{ asset('css/medicine/style.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="container pt-5">
        <span>
            <a class="text-decoration-none text-secondary" href="{{ route('medicines') }}">Medicine</a>
            <a class="text-decoration-none text-secondary" href="#">/Medicine Update</a>
        </span>
        <div class="row justify-content-center min-vh-100">
            <div class="col-lg-12 col-md-12 col-sl-12">
                <form action="" method="post">
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
                                        <div class="col-md-6">
                                            <label for="name" class="form-label">Generic</label>
                                            <input required type="text" class="form-control" required name="generic">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="symptom" class="form-label">Brand</label>
                                            <input required type="text" class="form-control" required name="brand">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="phone" class="form-label">Manufacture</label>
                                            <input required type="text" class="form-control" required name="manufacture">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="diagonisis" class="form-label">Unit</label>
                                            <input required type="text" class="form-control" required name="unit">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="phone" class="form-label">Presentation</label>
                                            <input required type="text" class="form-control" required
                                                name="presentation">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="diagonisis" class="form-label">Expire Date</label>
                                            <input required type="date" class="form-control" required name="expire_date">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="qty" class="form-label">Quantity</label>
                                            <input required type="number" class="form-control" required name="qty">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="price" class="form-label">Price</label>
                                            <input required type="number" class="form-control" required name="price">
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
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input required" type="radio" name="category"
                                                value="Solution" id="category1">
                                            <label class="form-check-label" for="category1">
                                                Solution
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input required" type="radio" name="category"
                                                value=" Cough syrup" id="category2">
                                            <label class="form-check-label" for="category2">
                                                Cough syrup
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input required" type="radio" name="category"
                                                value="Capsule" id="category3">
                                            <label class="form-check-label" for="category3">
                                                Capsule
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input required" type="radio" name="category"
                                                value="Tablets" id="category4">
                                            <label class="form-check-label" for="category4">
                                                Tablets
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input required" type="radio" name="category"
                                                value="Softgel" id="category5">
                                            <label class="form-check-label" for="category5">
                                                Softgel
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input required" type="radio" name="category"
                                                value="Decongestant spray" id="category6">
                                            <label class="form-check-label" for="category6">
                                                Decongestant spray
                                            </label>
                                        </div>
                                    </div>
                                    <a href="{{ route('medicines') }}" class="btn btn-secondary text-light my-3">Back</a>
                                    <button name="btn-add" class="btn btn-blue text-light my-3">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
