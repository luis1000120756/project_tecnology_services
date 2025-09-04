<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adminstore</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
        .login-card {
            border-radius: 20px;
            background: linear-gradient(to right, #0098d8, #2c2a4a, #8a2463);
            max-width: 400px;
            width: 100%;
        }

        .login-logo {
            max-width: 150px;
            height: auto;
        }

        /* Overlay del spinner */
        .spinner-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 0.375rem;
            z-index: 10;
        }

        /* Ajuste responsive */
        @media (max-width: 576px) {
            .login-card {
                width: 90% !important;
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="position-relative vh-100 overflow-visible">
        <!-- Imagen de fondo -->
        <img src="{{ asset('img/imgLogin.jpg') }}" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
            alt="">

        <!-- Contenido centrado -->
        <div class="d-flex justify-content-center align-items-center vh-100 position-relative px-3">
            <div class="login-card shadow-lg bg-opacity-40 p-4 d-flex flex-column align-items-center">

                <!-- Logo -->
                <div class="mb-4 text-center">
                    <img src="{{ asset('img/IconSuarPol.png') }}" class="login-logo rounded-2xl"
                        style="border-radius: 20px;" alt="Logo SuarPol">
                </div>

                <!-- Formulario -->
                <form action="{{ url('auth/login') }}" method="POST" class="w-100 text-white position-relative">
                    @csrf
                    <div class="mb-3 text-start">
                        <label class="form-label">Nombre de usuario</label>
                        <input type="text" name="nameUser" class="form-control"
                            placeholder="Ingresa tu nombre de usuario">
                    </div>
                    <div class="mb-3 text-start">
                        <label class="form-label">Contraseña</label>
                        <input type="password" name="password" class="form-control" placeholder="Ingresa la contraseña">
                    </div>

                    <div class="mb-3 text-start">
                        <small class="text-light">¿Olvidaste tu contraseña?</small>
                    </div>
                    <div class="mb-3">
                        <a class="text-light" href="{{ route('user.register') }}">¿No tienes una cuenta? Regístrate</a>
                    </div>

                    <!-- Botón con spinner -->
                    <div class="position-relative d-inline-block w-100">
                        <button class="btn btn-success w-100" id="btnIngresa" type="submit">Ingresar</button>
                        <!-- Overlay spinner -->
                        <div class="spinner-overlay" id="spinner" style="display: none;">
                            <div class="spinner-border text-light" role="status">
                                <span class="visually-hidden">Cargando...</span>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    @if (session('successMessage'))
        @include('modals.modal-Confirm-Code-email', ['successMessage' => 'Código enviado correctamente'])
    @endif

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>

    <!-- Script para mostrar spinner -->
    <script>
        const btnIngresa = document.getElementById('btnIngresa');
        const spinner = document.getElementById('spinner');

        btnIngresa.addEventListener('click', function(e) {
            // Evita múltiples envíos
            btnIngresa.disabled = true;
            spinner.style.display = 'flex'; // Muestra overlay
            setTimeout(() => {
                btnIngresa.disabled = false;
                spinner.style.display = 'none'; // Oculta overlay   
            }, 3000);
        });
    </script>
</body>

</html>
