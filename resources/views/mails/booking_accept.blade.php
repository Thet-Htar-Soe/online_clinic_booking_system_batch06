@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-10">
                <div class="card shadow">
                    <div class="card-header bg-lightblue py-3">
                    </div>
                    <div class="card-body px-5">
                        <div class="row">
                            <div class="col-8 mt-5">
                                <h5 class="text-start text-blue">Hope Clinic</h5>
                                <h6 class="text-start text-blue">Mingalar Taung Nyunt, Yangon</h6>
                                <h6 class="text-start text-blue">+95 9123456789</h6>
                            </div>
                            <div class="col-4 border-bottom border-info border-3 pb-3">
                                <img src="{{ asset('img/img_invoice_logo.png') }}" width="150px" alt=""
                                    class="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-5">
                                <h6 class="text-black-50">Dr. Mg Mg</h6>
                                <h6 class="text-black-50">94th Street, Mingalar Taung Nyunt Yangon</h6>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-12 border-bottom border-info border-3 pb-3">
                                <p>Dear Dr. Mg Mg,</p>
                                <p>This is booking accept from Patient. Odit distinctio quo repudiandae sapiente ipsum
                                    aspernatur nostrum esse, voluptatum quam facilis, asperiores dolorem animi neque quidem
                                    necessitatibus voluptatibus dolorum ad blanditiis!</p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-8">
                                <h6>Sincerely Yours,</h6>
                                <p class="text-black-50">Patient Name</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-lightblue px-5">
                    <div class="row">
                        <div class="col-8 text-light">
                            <i class="fa-brands fa-facebook"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-youtube"></i>
                        </div>
                        <div class="col-4">
                            <span class="text-light">www.hopeclinic.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
