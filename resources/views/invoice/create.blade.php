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
        <form action="{{ route('invoice.store') }}" method="post" enctype="multipart/form-data" class="mt-3">
            @csrf
            <div class="row">
                <div class="col-4">
                    <h5 class="text-blue">Invoice Detail</h5>
                    <div class="form-group">
                        <label for="" class="py-2">Invoice No</label>
                        <input type="text" readonly name="invoice_no" value="{{ date('dmHis') }}" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="py-2">Invoice Date</label>
                        <input type="text" readonly name="invoice_date" required class="form-control" value="{{ date('d-m-Y') }}">
                    </div>
                    <div class="form-group">
                        <label for="" class="py-2">Booking No</label>
                        <input type="text" readonly name="booking_no" value="{{ $booking[0]->id }}" required class="form-control">
                    </div>
                </div>
                <div class="col-8 ">
                    <h5 class="text-blue">Patient Detail</h5>
                    <div class="form-group">
                        <label for="" class="py-2">Patient Name</label>
                        <input type="text" readonly name="patient_name" required class="form-control" value="{{ $patient[0]->name }}">
                    </div>
                    <div class="form-group">
                        <label for="" class="py-2">Patient Phone</label>
                        <input type="text" readonly name="phone" required class="form-control" value="{{ $patient[0]->phone }}">
                    </div>
                    <div class="form-group">
                        <label for="" class="py-2">Address</label>
                        <input type="text" readonly name="address" required class="form-control" value="{{ $patient[0]->address }}">
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
                                    <select id="mySelect" class="form-control mySelect" name="">
                                        <option value="" selected disabled>Choose...</option>
                                        @foreach ($medicines as $m)
                                            <option class="mid" value="{{ $m->price }}">
                                                {{ $m->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td hidden>
                                    <textarea type='text' name='medicine[]' class='form-control product' value=''></textarea>
                                </td>
                                <td><input type="text"  name='price[]' class="form-control price" value="">
                                </td>
                                <td><input type="text" name='qty[]' class="form-control qty"></td>
                                <td><input type="text" name='total[]' class="form-control total"></td>
                                <td><input type="button" value="x" class="btn btn-danger btn-sm btn_remove_row"></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                            <td><input type="button" class="btn btn-blue text-light btn-sm" value="+Add Row"
                                        id="btn_add_row"></td>
                                <td colspan="2" class="text-end">Doctor Charges</td>
                                <td>
                                <input type="text" name="doctor_charges" id="doctor_charges" class="form-control doctor_charges">
 @error('doctor_charges')
                                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                                            @enderror
                                <input type="hidden" name="text-box" class="total" value="0">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-end">Total</td>
                                <td>
                                <input type="text" name="grand_total" id="grand_total" class="form-control">
                                 @error('grand_total')
                                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                                            @enderror
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    <button class="btn btn-blue text-light" name="btn-submit">Check Out</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/invoice/script.js') }}"></script>
    <script>
    $("#btn_add_row").click(function() {
    var row = " <tr> <td> <select id='mySelect' class='form-control mySelect' name=''> <option value='' selected disabled>Choose...</option> @foreach ($medicines as $m) <option class='mid' value='{{ $m->price }}'> {{ $m->name }} </option> @endforeach </select> </td> <td hidden> <textarea type='text' required name='medicine[]' class='form-control product' value=''></textarea> </td> <td><input type='text' required name='price[]' class='form-control price' value=''> </td> <td><input type='text' required name='qty[]' class='form-control qty'></td> <td><input type='text' required name='total[]' class='form-control total'></td> <td><input type='button' value='x' class='btn btn-danger btn-sm btn_remove_row'></td> </tr>";
    $("#check_out_body").append(row);
    });
    </script>
@endsection