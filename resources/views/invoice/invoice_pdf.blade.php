<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Hope Clinic</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="card shadow">
        <div class="card-header bg-lightblue py-3">
        </div>
        <div class="card-body px-5">
            <div class="row">
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
                                        <td>{{ money($m['price'],'MMK',true) }}</td>
                                        <td>{{ $m['qty'] }}</td>
                                        <td class="text-end">{{ money($m['total'],'MMK',true) }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                        <tfoot>
                            <tr class="">
                                <th colspan="1"></th>
                                <th colspan="2" class="text-blue text-end">Doctor Charges</th>
                                <td class="text-black-50 text-end">
                                    {{ money($invoice->invoiceDetail->doctor_charges,'MMK',true) }}</td>
                            </tr>
                            <tr class="">
                                <th colspan="2"></th>
                                <th class="text-blue text-end">Total</th>
                                <td class="text-end">{{ money($invoice->invoiceDetail->grand_total, 'MMK', true) }}</td>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
