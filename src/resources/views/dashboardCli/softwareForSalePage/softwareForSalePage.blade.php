@extends('layouts.dashboardLayout.dashboardLayout')

@section('content')
    <div class="col-12 col-md-6 col-lg-3 mb-4">
        @foreach ($softwareForSale as $software)
            @include('components.products.cardProduct', [
                'id' => $software->id,
                'image' => $software->first_image_url,
                'title' => $software->title,
                'description' => $software->description,
            ])
        @endforeach
    </div>
@endsection
