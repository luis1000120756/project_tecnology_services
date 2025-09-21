<style>
    .btn-with-spinner {
        position: relative;
        /* para que el spinner se posicione respecto al botón */
    }

    .spinner-overlay {
        display: none;
        /* oculto por defecto */
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        /* centra en ambos ejes */
        background: rgba(0, 0, 0, 0.4);
        /* opcional: semitransparente */
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: .375rem;
        /* para que respete los bordes del botón */
    }
</style>
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content contact-form">
            <div class="modal-header border-0">
                <h5 class="modal-title section-title" id="loginModalLabel">Iniciar Sesión</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('auth.login') }}" method="POST" id="formLogin"
                    class="w-100 text-white position-relative">
                    @csrf
                    @if (!empty($successMessage))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="bi bi-check-circle-fill"></i>
                            {{ $successMessage }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Cerrar"></button>
                        </div>
                    @endif
                    <div class="mb-3 text-start">
                        <label class="form-label">Nombre de usuario</label>
                        <input type="text" id="inputName" name="nameUser" class="form-control"
                            placeholder="Ingresa tu nombre de usuario">
                    </div>
                    <div class="mb-3 text-start">
                        <label class="form-label">Contraseña</label>
                        <input type="password" id="inputPassword" name="password" class="form-control"
                            placeholder="Ingresa la contraseña">
                    </div>
                    <div class="mb-3 text-start">
                        <small class="text-light">¿Olvidaste tu contraseña?</small>
                    </div>
                    <div class="mb-3">
                        <a class="text-light" href="{{ route('user.register') }}">¿No tienes una cuenta? Regístrate</a>
                    </div>
                    @if ($errors->has('messageError'))
                        <div id="messageAuthError" class="alert alert-danger" role="alert">
                            {{ $errors->first('messageError') }}
                        </div>
                    @endif
                    <div class="position-relative d-inline-block w-100">
                        <button class="btn btn-primary w-100 btn-with-spinner" id="btnIngresa" type="submit">
                            Ingresar
                            <div class="spinner-overlay" id="spinnerLoginForm" style="display:none; ">
                                <div class="spinner-border text-light" role="status">
                                    <span class="visually-hidden">Cargando...</span>
                                </div>
                            </div>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    const spinner = document.getElementById('spinnerLoginForm');
    const btnIngresa = document.getElementById('btnIngresa');

    if (spinner && btnIngresa) {
        btnIngresa.addEventListener('click', () => {
            spinner.style.display = 'block'; // no block
        });
    }
</script>
