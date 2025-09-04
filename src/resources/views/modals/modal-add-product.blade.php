<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal-custom">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="addProductModalLabel">
                    <i class="fas fa-plus-circle me-2 text-primary"></i> Agregar Nuevo Producto
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="productForm" action="{{ route('dashboard.catalog.products.create') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <!-- Título -->
                    <div class="mb-3">
                        <label for="productTitle" class="form-label">Título del Producto</label>
                        <input type="text" class="form-control" id="productTitle" name="title"
                            placeholder="Ejemplo: PlayStation 5" required>
                    </div>

                    <!-- Categoría -->
                    <div class="mb-3">
                        <label for="productCategory" class="form-label">Categoría</label>
                        <select class="form-select" id="productCategory" name="category" required>
                            <option selected disabled value="">Seleccione una categoría</option>
                            <option value="Consolas">Consolas</option>
                            <option value="Audífonos">Audífonos</option>
                            <option value="Controles">Controles</option>
                            <option value="Accesorios">Accesorios</option>
                        </select>
                    </div>

                    <!-- Descripción -->
                    <div class="mb-3">
                        <label for="productDescription" class="form-label">Descripción</label>
                        <textarea class="form-control" id="productDescription" name="description" rows="3"
                            placeholder="Ingrese una breve descripción del producto..." required></textarea>
                    </div>

                    <!-- Imágenes -->
                    <div class="mb-3">
                        <label for="productImages" class="form-label">Subir Imágenes (múltiples)</label>
                        <input type="file" class="form-control" id="productImages" name="imagesPath[]" multiple
                            required>
                    </div>

                    <!-- Precio -->
                    <div class="mb-3">
                        <label for="productPrice" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="productPrice" name="price" step="0.01"
                            placeholder="Ejemplo: 1200.00" required>
                    </div>

                    <!-- Botón con spinner -->
                    <div class="btn-wrapper">
                        <div class="spinner-border text-primary mb-3 d-none" id="formSpinner" role="status">
                            <span class="visually-hidden">Cargando...</span>
                        </div>
                        <button type="submit" id="btnSubmit" class="btn btn-primary w-100">Guardar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const form = document.getElementById('productForm');
    const btnSubmit = document.getElementById('btnSubmit');
    const spinner = document.getElementById('formSpinner');

    form.addEventListener('submit', function() {
        btnSubmit.disabled = true; // Bloquear el botón
        spinner.classList.remove('d-none'); // Mostrar spinner
    });
</script>

<style>
    /* Estilos del Modal */
    .modal-custom {
        background-color: var(--card-bg);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 15px;
    }

    .modal-custom .modal-header,
    .modal-custom .modal-footer {
        border-color: rgba(255, 255, 255, 0.1) !important;
    }

    .modal-custom .modal-title {
        color: var(--text-light);
    }

    .modal-custom .btn-close {
        filter: invert(1) grayscale(100%) brightness(200%);
    }

    /* Inputs y selects */
    .modal-custom .form-control,
    .modal-custom .form-select {
        background-color: #333642;
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: var(--text-light);
    }

    .modal-custom .form-control:focus,
    .modal-custom .form-select:focus {
        background-color: #333642;
        border-color: var(--primary-color);
        box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25);
        color: var(--text-light);
    }

    /* Placeholder */
    .modal-custom input::placeholder,
    .modal-custom textarea::placeholder {
        color: var(--secondary-color);
    }

    /* Spinner centrado sobre botón */
    .btn-wrapper {
        text-align: center;
    }
</style>
