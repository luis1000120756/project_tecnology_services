<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro - Adminstore</title>
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

        /* Overlay spinner sobre el botón */
        .spinner-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.25);
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 0.375rem;
            /* coincide con el borde del botón */
            z-index: 10;
        }

        /* Spinner más grande y bonito */
        .spinner-border {
            width: 2rem;
            height: 2rem;
            border-width: 0.25rem;
        }

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

                <!-- Formulario de Registro -->
                <form id="formRegister" action="{{ route('user.register') }}" method="POST" class="w-100 position-relative">
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

                    <!-- Botón con spinner -->
                    <div class="position-relative d-inline-block w-100">
                        <button class="btn btn-success w-100 py-2" id="btnRegistrar" type="submit">Registrar</button>
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

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>

    <!-- Script para mostrar spinner -->
    <script>
        const form = document.getElementById('formRegister');
        const btnSubmit = document.getElementById('btnRegistrar');
        const spinner = document.getElementById('spinner');

        form.addEventListener('submit', function() {
            btnSubmit.disabled = true; // Deshabilita el botón
            spinner.style.display = 'flex'; // Muestra el spinner
            // El formulario continuará enviándose normalmente
        });

        setTimeout(() => {
            btnSubmit.disabled = false; // Habilita el botón
            spinner.style.display = 'none'; // Oculta el spinner    
        }, 7000);
    </script>
</body>

</html>
