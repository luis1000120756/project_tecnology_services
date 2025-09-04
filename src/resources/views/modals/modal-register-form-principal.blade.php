<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content contact-form">
            <div class="modal-header border-0">
                <h5 class="modal-title section-title" id="contactModalLabel">Regístrate</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formRegister" action="{{ route('user.register') }}" method="POST"
                    class="w-100 position-relative">
                    @csrf
                    <div class="mb-3 text-start">
                        <label class="form-label">Nombre de usuario</label>
                        <input type="text" name="nameUser" class="form-control"
                            placeholder="Ingresa tu nombre de usuario" required>
                    </div>

                    <div class="mb-3 text-start">
                        <label class="form-label">Correo electrónico</label>
                        <input type="email" name="email" class="form-control" placeholder="Ingresa tu correo"
                            required>
                    </div>

                    <div class="mb-3 text-start">
                        <label class="form-label">Contraseña</label>
                        <input type="password" name="password" class="form-control" placeholder="Crea una contraseña"
                            required>
                    </div>

                    <div class="mb-3 text-start">
                        <label class="form-label">Confirmar contraseña</label>
                        <input type="password" name="password_confirmation" class="form-control"
                            placeholder="Repite la contraseña" required>
                    </div>

                    <div class="mb-3">
                        <a class="text-light" href="{{ route('user.register') }}">¿Ya tienes cuenta? Inicia sesión</a>
                    </div>

                    <div class="position-relative d-inline-block w-100">
                        <button class="btn btn-success w-100 py-2" id="btnRegistrar" type="submit">Registrar</button>
                        <div class="spinner-overlay" id="spinner" style="display: none;">
                            <div class="spinner-border text-light" role="status">
                                <span class="visually-hidden">Cargando...</span>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="mt-3 text-center">
                    <p class="text-white">O regístrate con:</p>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-light mx-2">
                            <i class="fab fa-google"></i> Google
                        </a>
                        <a href="#" class="btn btn-primary mx-2">
                            <i class="fab fa-facebook"></i> Facebook
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
