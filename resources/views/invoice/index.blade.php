@extends('layouts.base')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/invoice/home.css') }}">
@endsection
@section('content')
    <div class="container">
        <span>
            <a class="text-decoration-none text-secondary" href="#">Invoice</a>
            <a class="text-decoration-none text-secondary" href="#">/Invoice List</a>
        </span>
        <div class="row my-3">
            <div class="col-12">
                <h4 class="text-blue">
                    <i class="fa-solid fa-file"></i>
                    Invoice List
                </h4>
                <hr>
                <table class="table table-hover table-bordered" id="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Invoice No</th>
                            <th scope="col">Date</th>
                            <th scope="col">Total</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($invoices as $invoice)
                            <tr>
                                <td>{{ $invoice->id }}</td>
                                <td>{{ $invoice->invoice_no }}</td>
                                <td>{{ date('d-m-Y', strtotime($invoice->invoiceDetail->created_at)) }}</td>
                                <td>{{ price_type($invoice->invoiceDetail->grand_total) }}</td>
                                <td class="text-nowrap">
                                    <a href="{{ route('invoice.show', $invoice->id) }}" class="btn btn-outline-info btn-sm">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </a>
                                    <form action="{{ route('invoice.destroy', $invoice->id) }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger btn-sm"
                                            onclick="return confirm('Are you sure to delete?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="">
                    {{ $invoices->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
