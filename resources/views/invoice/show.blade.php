@extends('layouts.base')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/invoice/home.css') }}">
@endsection
@section('content')
    <div class="container">
        <span>
            <a class="text-decoration-none text-secondary" href="{{ route('invoice.index') }}">Invoice</a>
            <a class="text-decoration-none text-secondary" href="#">/Invoice Detail</a>
        </span>
        <div class="row justify-content-end mx-0">
            <div class="col-3">
                <a href="{{ route('invoice.generatePDF', $invoice->id) }}" class="btn btn-blue text-light">Download PDF</a>
            </div>
        </div>
        <div class="row justify-content-center my-3">
            <div class="col-10">
                <div class="card shadow">
                    <div class="card-header bg-lightblue py-3">
                    </div>
                    <div class="card-body px-5">
                        <div class="row">
                            <div class="col-4 border-bottom border-info border-3 pb-3">
                                <img src="{{ asset('img/img_invoice_logo.png') }}" width="150px" alt=""
                                    class="">
                            </div>
                            <div class="col-8 ">
                                <h4 class="text-end text-blue">Date : {{ date('d-m-Y', strtotime($invoice->created_at)) }}
                                </h4>
                                <h4 class="text-end text-blue mt-1">Invoice No : {{ $invoice->invoice_no }}</h4>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-5">
                                <h5>Billing To:</h5>
                                <h6 class="text-black-50">{{ $invoice->booking->patients->name }}</h6>
                                <h6 class="text-black-50">{{ $invoice->booking->patients->phone }}</h6>
                            </div>
                        </div>
                        <div class="row mx-0">
                            <div class="col-12 border-bottom border-info border-3 pb-3">
                                <table class="table table-borderless">
                                    <thead class="text-blue">
                                        <tr class="">
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Qty</th>
                                            <th class="text-end">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-black-50">
                                        @if (count($invoice->invoiceDetail->medicines) < 1)
                                            <tr>
                                                <td colspan="4" class="text-center">No Products</td>
                                            </tr>
                                        @else
                                            @foreach ($invoice->invoiceDetail->medicines as $m)
                                                <tr>
                                                    <td>{{ $m['name'] }}</td>
                                                    <td>{{ price_type($m['price']) }}</td>
                                                    <td>{{ $m['qty'] }}</td>
                                                    <td class="text-end">{{ price_type($m['total']) }}</td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                    <tfoot>
                                        <tr class="">
                                            <th colspan="1"></th>
                                            <th colspan="2" class="text-blue text-end">Doctor Charges</th>
                                            <td class="text-black-50 text-end">
                                                {{ price_type($invoice->invoiceDetail->doctor_charges) }}</td>
                                        </tr>
                                        <tr class="">
                                            <th colspan="2"></th>
                                            <th class="text-blue text-end">Total</th>
                                            <td class="text-end">{{ price_type($invoice->invoiceDetail->grand_total) }}</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-3">
                                <h6 class="my-1">Hope Clinic</h6>
                                <p class="text-black-50">We will always care for your health...</p>
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
    </div>
@endsection
