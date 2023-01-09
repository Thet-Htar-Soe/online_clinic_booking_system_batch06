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
    <div class="row justify-content-center my-3">
        <div class="col-10">
            <div class="card shadow">
                <div class="card-header bg-lightblue py-3">
                </div>
                <div class="card-body px-5">
                  <div class="row">
                    <div class="col-4 border-bottom border-info border-3 pb-3">
                      <img src="{{ asset('img/img_invoice_logo.png') }}" width="150px" alt="" class="">
                    </div>
                    <div class="col-8 ">
                      <h4 class="text-end text-blue">Invoice No.</h4>
                      <h5 class="text-end text-blue">000000</h5>
                    </div>
                  </div>
                  <div class="row mt-3">
                   <div class="col-5">
                   <h5>Billing To:</h5>
                    <h6 class="text-black-50">Mg Mg</h6>
                    <h6 class="text-black-50">94th Street, Mingalar Taung Nyunt Yangon</h6>
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
                            <th>Total</th>
                          </tr>
                        </thead>
                        <tbody class="text-black-50"> 
                          <tr class="">
                            <td>Biogesic</td>
                            <td>2000</td>
                            <td>3</td>
                            <td>6000</td>
                          </tr>
                          <tr class="">
                            <td>Paracetamol</td>
                            <td>2000</td>
                            <td>3</td>
                            <td>6000</td>
                          </tr>
                          <tr class="">
                            <td>Biogesic</td>
                            <td>2000</td>
                            <td>3</td>
                            <td>6000</td>
                          </tr>
                          <tr class="">
                            <td>Paracetamol</td>
                            <td>2000</td>
                            <td>3</td>
                            <td>6000</td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr class="">
                            <th colspan="2"></th>
                            <th class="text-blue">Tax</th>
                            <td>00.00</td>
                          </tr>
                          <tr class="">
                            <th colspan="2"></th>
                            <th class="text-blue">Total</th>
                            <td>00.00</td>
                          </tr>
                        </tfoot>
                    </table>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-8">
                      <h6>Title And Others</h6>
                      <p class="text-black-50">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat similique.</p>
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
