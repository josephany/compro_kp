@extends('admin.layouts.app')

@section('content')

<h1 class="mb-4">
    Dashboard Admin
</h1>

<div class="row">

    <div class="col-md-4">
        <div class="card card-dashboard p-4">
            <h5>Total Product</h5>
            <h2>{{ $totalProducts ?? 0 }}</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-dashboard p-4">
            <h5>Total Service</h5>
            <h2>{{ $totalServices ?? 0 }}</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-dashboard p-4">
            <h5>Total Visitor</h5>
            <h2>{{ $totalVisitors ?? 0 }}</h2>
        </div>
    </div>

</div>

@endsection