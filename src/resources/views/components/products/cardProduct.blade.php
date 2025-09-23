<div class="card-custom h-100 d-flex flex-column">
    <div class="card-body d-flex flex-column text-center flex-grow-1">
        <div class="card-img-container mb-3">
            <img src="{{ $image }}" class="img-fluid rounded" alt="{{ $title }}">
        </div>
        <h5 class="card-title text-primary">{{ $title }}</h5>
        <p class="card-text text-secondary mb-3">{{ $description }}</p>
        <div class="mt-auto">
            <!-- Botón con spinner -->
            <a href="{{ route('dashboard.catalog.products.id', $id) }}" class="btn btn-primary w-100 btn-save">
                <span class="spinner-border spinner-border-sm me-2 d-none" role="status" aria-hidden="true"></span>
                Ver más
            </a>
        </div>
    </div>
</div>

<style>
    /* Mantener altura del botón estable */
    .btn-save {
        min-height: 40px;
    }

    /* Contenedor imagen fijo */
    .card-img-container {
        height: 200px;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        background-color: #f8f9fa;
    }

    .card-img-container img {
        max-height: 100%;
        max-width: 100%;
        object-fit: contain;
    }

    /* Que todas las cards de una fila midan igual */
    .row>[class*='col-'] {
        display: flex;
    }

    .card-custom {
        display: flex;
        flex-direction: column;
        width: 100%;
    }
</style>
