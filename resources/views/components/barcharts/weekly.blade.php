@extends('layouts.base')
@section('css')
    <link href="{{ asset('css/components/barchart.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <section class="row pt-5">
        <div class="col-md-8 col-sm-12 offset-md-2">
            <div class="card">
                <div class="card-header d-flex justify-content-end">
                    <div>
                        <a href="#" class="btn btn-secondary">Weekly</a>
                        <a href="{{ route('barchart.monthly') }}" class="btn btn-outline-secondary">Monthly</a>
                        <a href="{{ route('barchart.yearly') }}" class="btn btn-outline-secondary">Yearly</a>
                    </div>
                </div>
                <div class="card-body">
                    <h2 class="py-3 fw-bold">Weekly Incomes</h2>
                    <div>
                        <div class="forChart">
                            <canvas id="weeklyIncome"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const getLabels = <?php echo json_encode($labels); ?>;
        const getDatas = <?php echo json_encode($datas); ?>
    </script>
    <script src="{{ asset('js/components/barcharts/weekly.js') }}"></script>
@endsection
