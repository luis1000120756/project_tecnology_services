<div class="col-12 col-sm-6 col-md-4">
    <div class="card-custom h-100 d-flex flex-column shadow-lg border-0 rounded-4 p-3"
        style="background: var(--card-bg); color: var(--text-light); transition: transform 0.3s ease, box-shadow 0.3s ease;">
        <div class="card-body d-flex flex-column text-center flex-grow-1">
            <div class="card-img-container mb-3">
                <img src="{{ $image }}" class="img-fluid rounded zoom-effect" alt="{{ $title }}">
            </div>
            <h5 class="card-title fw-bold" style="color: var(--primary-color);">{{ $title }}</h5>
            <p class="card-text text-secondary mb-3">{{ $category }}</p>
            <div class="mt-auto">
                <a href="{{ $image }}" class="btn btn-primary w-100 btn-save fw-semibold">
                    <span class="spinner-border spinner-border-sm me-2 d-none" role="status" aria-hidden="true"></span>
                    Ver más
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    /* Animación del card */
    .card-custom {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
        height: 100%;
        min-height: 420px;
    }

    .card-custom:hover {
        transform: translateY(-6px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.35);
    }

    /* Imagen con zoom */
    .zoom-effect {
        transition: transform 0.4s ease;
        cursor: zoom-in;
    }

    .zoom-effect:hover {
        transform: scale(1.15);
    }

    /* Contenedor fijo de imagen */
    .card-img-container {
        height: 200px;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        background-color: var(--dark-bg, #1e1e1e);
        border-radius: 12px;
    }

    .card-img-container img {
        height: 100%;
        width: 100%;
        object-fit: contain;
    }

    /* Botón estable */
    .btn-save {
        min-height: 40px;
    }

    /* Asegurar alturas iguales en el grid */
    .row>[class*='col-'] {
        display: flex;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(".btn-save").forEach(button => {
            button.addEventListener("click", function(e) {
                e.preventDefault(); // Evita la navegación inmediata

                // Mostrar el spinner
                const spinner = this.querySelector(".spinner-border");
                if (spinner) spinner.classList.remove("d-none");

                // Desactivar el botón temporalmente
                this.setAttribute("disabled", "true");

                // Redirigir después del efecto
                setTimeout(() => {
                    window.location.href = this.getAttribute("href");
                }, 300);
            });
        });
    });
</script>
