@extends('layouts.dashboardLayout.dashboardLayout')

@section('content')
    <div class="container my-5">
        <div class="card-custom shadow-lg border-0 rounded-4 p-4"
            style="background: var(--card-bg); color: var(--text-light);">
            <div class="row g-4 align-items-center">
                <!-- Galería e imagen principal -->
                <div class="col-md-6">
                    <!-- Imagen principal -->
                    <div class="card-img-container mb-3">
                        <img id="mainImage" src="{{ $product->first_image_url }}" class="img-fluid rounded zoom-effect"
                            alt="{{ $product->title }}">
                    </div>

                    <!-- Miniaturas -->
                    <div class="d-flex justify-content-center flex-wrap gap-2">
                        @foreach ($product->image_path as $path)
                            <img src="{{ asset('storage/' . $path) }}" onclick="changeImage(this.src)"
                                class="img-thumbnail thumb"
                                style="width: 80px; height: 80px; cursor:pointer; object-fit:cover;">
                        @endforeach
                    </div>
                </div>

                <!-- Detalles del producto -->
                <div class="col-md-6 d-flex flex-column text-center">
                    <h2 class="card-title fw-bold" style="color: var(--primary-color);">{{ $product->title }}</h2>
                    <p class="card-text text-secondary mb-1">
                        Categoría: <span class="fw-semibold"
                            style="color: var(--text-light);">{{ $product->category }}</span>
                    </p>
                    <p class="mt-3" style="color: var(--text-light);">
                        {{ $product->description }}
                    </p>

                    <div class="mt-auto">
                        <h3 class="fw-bold mb-3" style="color: var(--primary-color);">
                            Precio: ${{ number_format($product->price, 0, ',', '.') }}
                        </h3>
                        <button class="btn btn-primary w-100 btn-save">
                            <i class="bi bi-cart-plus me-2"></i> Agregar al carrito
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Estilos personalizados -->
    <style>
        .btn-save {
            min-height: 40px;
        }

        /* Imagen principal */
        .card-img-container {
            height: 300px;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            background-color: var(--dark-bg);
            border-radius: 12px;
        }

        .card-img-container img {
            max-height: 100%;
            max-width: 100%;
            object-fit: contain;
        }

        .card-custom {
            display: flex;
            flex-direction: column;
            width: 100%;
            background-color: var(--card-bg);
        }

        /* Efecto lupa */
        .zoom-effect {
            transition: transform 0.4s ease;
            cursor: zoom-in;
        }

        .zoom-effect:hover {
            transform: scale(1.2);
        }

        /* Miniaturas que respeten modo oscuro */
        .thumb {
            border: 2px solid var(--primary-color);
            border-radius: 8px;
        }
    </style>

    <script>
        function changeImage(src) {
            document.getElementById("mainImage").src = src;
        }
    </script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
@endsection
