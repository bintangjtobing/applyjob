@extends('employ.dashboard.welcome')
@section('titledashboard','Home')
@section('content')
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-lg-12">
            <h3>Welcome to company dashboard page, {!!session()->get('firstname')!!}.</h3>
        </div>
    </div>
</div>
@endsection
