<div class="col-12 col-sm-6 col-md-4">
    <div class="card-custom h-100 d-flex flex-column">
        <div class="card-body d-flex flex-column text-center flex-grow-1">
            <div class="card-img-container mb-3">
                <img src="{{ $image }}" class="img-fluid rounded" alt="{{ $title }}">
            </div>
            <h5 class="card-title text-primary">{{ $title }}</h5>
            <p class="card-text text-secondary mb-3">{{ $category }}</p>
            <div class="mt-auto">
                <a href="{{ $image }}" class="btn btn-primary w-100 btn-save">
                    <span class="spinner-border spinner-border-sm me-2 d-none" role="status" aria-hidden="true"></span>
                    Ver más
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    /* Mantener altura uniforme en todas las cards */
    .card-custom {
        display: flex;
        flex-direction: column;
        height: 100%;
        min-height: 420px;
    }

    /* Para que todas las columnas se estiren igual */
    .row>[class*='col-'] {
        display: flex;
    }

    /* Botón estable */
    .btn-save {
        min-height: 40px;
    }

    /* Imagen con contenedor fijo */
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
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(".btn-save").forEach(button => {
            button.addEventListener("click", function(e) {
                e.preventDefault(); // Evita que navegue inmediatamente

                // Mostrar el spinner dentro del botón
                const spinner = this.querySelector(".spinner-border");
                if (spinner) spinner.classList.remove("d-none");

                // Desactivar el botón para evitar múltiples clics
                this.setAttribute("disabled", "true");

                // Redirigir después de un pequeño retraso
                setTimeout(() => {
                    window.location.href = this.getAttribute("href");
                }, 300); // 0.3s de delay para que se note el spinner
            });
        });
    });
</script>
