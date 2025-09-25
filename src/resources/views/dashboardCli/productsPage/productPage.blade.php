@extends('layouts.dashboardLayout.dashboardLayout')

@section('title', 'Catálogo de Productos')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-light">Catálogo de Productos</h2>
        <a href="#" class="btn btn-primary d-inline-flex align-items-center shadow-sm" data-bs-toggle="modal"
            data-bs-target="#addProductModal">
            <i class="fas fa-plus me-2"></i>
            Agregar Producto
        </a>
    </div>

    {{-- Modal de agregar producto --}}
    @include('modals.modal-add-product')

    {{-- Filtros adaptados al layout --}}
    @include('components.products.filters')

    {{-- Mensaje de éxito --}}
    <div id="messageSuccesfullCreate">
        @if (session('productNew'))
            <div class="alert alert-success shadow-sm fade show rounded-3" role="alert">
                ✅ Producto creado exitosamente: <strong>{{ session('productNew')->title }}</strong>
            </div>
        @endif
    </div>

    {{-- Grid de productos --}}
    <div class="row" id="productsGrid">
        @forelse ($products as $product)
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                @include('components.products.cardProduct', [
                    'id' => $product->id,
                    'image' => $product->first_image_url,
                    'title' => $product->title,
                    'description' => $product->description,
                ])
            </div>
        @empty
            <div class="text-center text-muted py-5">
                <i class="fas fa-box-open fa-2x mb-2"></i>
                <p>No hay productos disponibles.</p>
            </div>
        @endforelse

    </div>

    <script>
        const alertSuccessful = document.getElementById('messageSuccesfullCreate');
        if (alertSuccessful) {
            setTimeout(() => {
                const alert = alertSuccessful.querySelector('.alert');
                if (alert) {
                    alert.classList.remove('show');
                    alert.classList.add('fade');
                }
            }, 3000);
        }
    </script>
@endsection
