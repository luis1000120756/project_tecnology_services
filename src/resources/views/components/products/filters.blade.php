    <style>
        /* Contenedor de imagen fijo */
        .card-img-container {
            height: 200px;
            /* todas las cards tendrán la misma altura en la parte de la imagen */
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
            /* fondo neutro */
            overflow: hidden;
            border-radius: 0.5rem;
        }

        .card-img-container img {
            max-height: 100%;
            max-width: 100%;
            object-fit: contain;
            /* mantiene proporciones */
        }

        /* Para que todas las cards tengan la misma altura dentro de la fila */
        .row>[class*='col-'] {
            display: flex;
        }

        .card-custom {
            display: flex;
            flex-direction: column;
            width: 100%;
        }
    </style>
    <div class="card shadow-sm border-0 mb-4" style="background-color: #1e1e2d; border-radius: 1rem; color: #f8f9fa;">
        <div class="card-body">
            <h5 class="card-title mb-4 text-primary fw-semibold d-flex align-items-center">
                <i class="fas fa-filter me-2"></i>Filtros
            </h5>
            <form>
                <div class="row g-4">
                    {{-- Categoría --}}
                    <div class="col-md-3">
                        <label class="form-label fw-semibold text-light">Categoría</label>
                        <select class="form-select bg-dark text-light border-primary shadow-sm rounded-3" name="category"
                            id="category">
                            <option selected>Todas las categorías</option>
                            <option value="Consolas">Consolas</option>
                            <option value="Audífonos">Audífonos</option>
                            <option value="Controles">Controles</option>
                            <option value="Accesorios">Accesorios</option>
                        </select>
                    </div>

                    <button type="button" class="btn btn-primary" id="ajaxButton" onclick="pruebaAjax()">Prueba
                        ajax</button>

                    {{-- Precio mínimo --}}
                    <div class="col-md-3">
                        <label class="form-label fw-semibold text-light">Precio mínimo</label>
                        <input type="number" class="form-control bg-dark text-light border-primary shadow-sm rounded-3"
                            placeholder="Ej: 100" name="minPrice" id="minPrice">
                    </div>

                    {{-- Precio máximo --}}
                    <div class="col-md-3">
                        <label class="form-label fw-semibold text-light">Precio máximo</label>
                        <input type="number" class="form-control bg-dark text-light border-primary shadow-sm rounded-3"
                            placeholder="Ej: 500" name="maxPrice" id="maxPrice">
                    </div>

                    {{-- Búsqueda --}}
                    <div class="col-md-3">
                        <label class="form-label fw-semibold text-light">Buscar</label>
                        <input type="text" class="form-control bg-dark text-light border-primary shadow-sm rounded-3"
                            placeholder="Buscar producto...">
                    </div>
                </div>

                {{-- Botones --}}
                <div class="d-flex justify-content-end gap-3 mt-4">
                    <button type="button" class="btn btn-primary px-4 shadow-sm rounded-pill">
                        <i class="fas fa-search me-1"></i> Filtrar
                    </button>
                    <button type="reset" class="btn btn-outline-light px-4 shadow-sm rounded-pill">
                        <i class="fas fa-times me-1"></i> Limpiar
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const categorySelect = document.getElementById('category');
            const minPriceInput = document.getElementById('minPrice');
            const maxPriceInput = document.getElementById('maxPrice');

            function aplicarFiltros() {
                const category = categorySelect.value;
                const priceMin = minPriceInput.value;
                const priceMax = maxPriceInput.value;

                const dataSend = {
                    category: category,
                    minPrice: priceMin,
                    maxPrice: priceMax
                };

                const url = '/dashboardCli/products/filter';

                fetch(url, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                'content')
                        },
                        body: JSON.stringify(dataSend)
                    })
                    .then(response => {
                        if (!response.ok) throw new Error('Error en la solicitud: ' + response.status);
                        return response.json();
                    })
                    .then(data => {
                        const grid = document.getElementById('productsGrid');
                        grid.innerHTML = ''; // Limpiar grid

                        if (data.length === 0) {
                            grid.innerHTML = `
                            <div class="text-center py-5" style="color:#0d6efd;">
                                <i class="fas fa-box-open fa-2x mb-2"></i>
                                <p class="fw-semibold">No hay productos disponibles.</p>
                            </div>`;
                            return;
                        }

                        data.forEach(product => {
                            grid.innerHTML += `
                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                        <div class="card-custom h-100 d-flex flex-column">
                            <div class="card-body d-flex flex-column text-center flex-grow-1">
                                <div class="card-img-container mb-3">
                                    <img src="${product.first_image_url}" class="img-fluid rounded" alt="${product.title}">
                                </div>
                                <h5 class="card-title text-primary">${product.title}</h5>
                                <p class="card-text text-secondary mb-3">${product.category}</p>
                                <div class="mt-auto">
                                    <a href="/dashboard/catalog/products/${product.id}" class="btn btn-primary w-100 btn-save">
                                        <span class="spinner-border spinner-border-sm me-2 d-none" role="status" aria-hidden="true"></span>
                                        Ver más
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
                        });
                    })
                    .catch(error => console.error('Error al procesar la respuesta JSON:', error));
            }

            // Listeners
            categorySelect.addEventListener('change', aplicarFiltros);
            minPriceInput.addEventListener('input', aplicarFiltros);
            maxPriceInput.addEventListener('input', aplicarFiltros);
        });
    </script>
