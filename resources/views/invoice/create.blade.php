@extends('layouts.base')
@section('css')
<link rel="stylesheet" href="{{ asset('css/invoice/home.css') }}">
@endsection
@section('content')
<div class="container">
    <span>
        <a class="text-decoration-none text-secondary" href="#">Patient</a>
        <a class="text-decoration-none text-secondary" href="#">/Checkout</a>
    </span>
    <form action="" method="post" enctype="multipart/form-data" class="mt-3">
        <div class="row">
            <div class="col-4">
                <h5 class="text-blue">Invoice Detail</h5>
                <div class="form-group">
                    <label for="">Invoice No</label>
                    <input type="text" name="invoice_no" value="000000" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Invoice Date</label>
                    <input type="text" name="invoice_date" required class="form-control" value="8/1/2023">
                </div>
                <div class="form-group">
                    <label for="">Booking No</label>
                    <input type="text" name="booking_no" value="000000" required class="form-control">
                </div>
            </div>
            <div class="col-8 ">
                <h5 class="text-blue">Patient Detail</h5>
                <div class="form-group">
                    <label for="">Patient Name</label>
                    <input type="hidden" name="patient_id" required class="form-control" value="1">
                    <input type="text" name="patient_name" required class="form-control" value="Mg Mg">
                </div>
                <div class="form-group">
                    <label for="">Patient Phone</label>
                    <input type="text" name="phone" required class="form-control" value="09123456789">
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" name="address" required class="form-control" value="Yangon">
                </div>
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-12">
                <h5 class="text-blue">Payment Detail</h5>
                <table class="table table-bordered">
                    <thrad>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thrad>
                    <tbody id="check_out_body">
                        <tr>
                            <td>
                                <select id="mySelect" class="form-control mySelect" name="product">
                                    <option value="" selected disabled>Choose...</option>
                                    <option class="mid" value="1000">Biogesic</option>
                                </select>
                            </td>
                            <td hidden><input type='hidden' required name='generic[]' class='form-control product' value=''></td>
                            <td><input type="text" required name='mprice[]' class="form-control price" value=""></td>
                            <td><input type="text" required name='qty[]' class="form-control qty"></td>
                            <td><input type="text" required name='total[]' class="form-control total"></td>
                            <td><input type="button" value="x" class="btn btn-danger btn-sm btn_remove_row"></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td><input type="button" class="btn btn-blue text-light btn-sm" value="+Add Row" id="btn_add_row"></td>
                            <td colspan="2" class="text-end">Total</td>
                            <td><input type="text" name="grand_total" id="grand_total" class="form-control" required></td>
                        </tr>
                    </tfoot>
                </table>
                <button class="btn btn-blue text-light" name="btn-submit">Check Out</button>
            </div>
        </div>
    </form>
</div>
@endsection
