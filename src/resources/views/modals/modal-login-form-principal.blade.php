<style>
    .spinner-overlay {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 10;
        display: none;
        /* Oculto por defecto */
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
                        <button class="btn btn-success w-100" id="btnIngresa" type="submit">Ingresar</button>
                        <div class="spinner-overlay" id="spinner">
                            <div class="spinner-border text-light" role="status">
                                <span class="visually-hidden">Cargando...</span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
