@extends('layouts.dashboardLayout.dashboardLayout')

@section('content')
    <div class="container my-4">
        <div class="row g-4">
            <div class="col-12 col-sm-6 col-md-4">
                @include('components.software.cardSoftware')
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                @include('components.software.cardSoftware')
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                @include('components.software.cardSoftware')
            </div>
        </div>
    </div>
@endsection
