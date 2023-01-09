@extends('layouts.base')
@section('css')
    <link href="{{ asset('css/components/barchart.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <h2 class="py-3 fw-bold">Incomes Within A Year</h2>
    <div class="forChart">
        <canvas id="myChart"></canvas>
    </div>
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/components/barchart.js') }}"></script>
@endsection
