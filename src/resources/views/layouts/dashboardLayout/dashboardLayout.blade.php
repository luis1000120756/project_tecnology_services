<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('img/IconSuarPol.png') }}" type="image/png">
    <title>@yield('title', 'Dashboard - SuarPol')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary-color: #007bff;
            --secondary-color: #6c757d;
            --dark-bg: #1a1a2e;
            --card-bg: #222533;
            --text-light: #f0f0f0;
            --gradient-main: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
            --sidebar-width: 250px;
        }

        /* Modo claro */
        body.light-mode {
            --dark-bg: #ffffff;
            --card-bg: #f8f9fa;
            --text-light: #212529;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--dark-bg);
            color: var(--text-light);
            line-height: 1.6;
            margin: 0;
            padding: 0;
            transition: background-color 0.3s, color 0.3s;
            /* Nuevo: Evita el desbordamiento horizontal en todo el cuerpo del documento */
            overflow-x: hidden;
        }

        .dashboard-container {
            display: flex;
            min-height: 100vh;
            /* Nuevo: Asegura que el contenedor ocupe el 100% del ancho del viewport */
            width: 100%;
        }

        /* Sidebar */
        .sidebar {
            width: var(--sidebar-width);
            background: var(--card-bg);
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease-in-out, background-color 0.3s;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 1000;
        }

        /* Main content */
        .main-content {
            flex-grow: 1;
            padding: 20px;
            margin-left: var(--sidebar-width);
            transition: margin-left 0.3s ease-in-out, background-color 0.3s, color 0.3s;
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.show {
                transform: translateX(0);
            }

            .main-content {
                /* Nuevo: El margen se elimina completamente en móviles para que ocupe todo el espacio */
                margin-left: 0;
            }

            /* Nuevo: Asegura que el texto largo se rompa en varias líneas */
            p,
            h2,
            h4,
            .navbar-top {
                word-wrap: break-word;
                overflow-wrap: break-word;
            }

            /* Nuevo: Ajustes adicionales para la barra superior en móvil */
            .navbar-top {
                /* Alinear elementos a la izquierda para mejor visibilidad */
                justify-content: flex-start;
            }

            /* Oculta el título del navbar en móviles para ahorrar espacio */
            .navbar-top .navbar-brand {
                display: none;
            }
        }

        .sidebar-header {
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .sidebar-header .logo-container {
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            text-decoration: none;
        }

        .sidebar-header img {
            max-width: 50px;
            margin-right: 10px;
        }

        .sidebar-header h4 {
            font-weight: 700;
            margin: 0;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        .sidebar-menu-item a {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            color: var(--text-light);
            text-decoration: none;
            border-radius: 10px;
            margin-bottom: 10px;
            transition: background-color 0.3s, color 0.3s;
            font-weight: 600;
        }

        .sidebar-menu-item a:hover,
        .sidebar-menu-item a.active {
            background-color: rgba(0, 123, 255, 0.2);
            color: var(--primary-color);
        }

        .sidebar-menu-item a i {
            margin-right: 15px;
            width: 20px;
            text-align: center;
        }

        .sidebar-footer {
            padding: 20px;
        }

        .navbar-top {
            background-color: var(--card-bg);
            padding: 15px 20px;
            margin-bottom: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background-color 0.3s;
        }

        .navbar-top .navbar-brand {
            font-weight: 700;
            color: var(--text-light);
            font-size: 1.25rem;
        }

        .toggle-btn {
            background: none;
            border: none;
            color: var(--primary-color);
            font-size: 1.5rem;
            cursor: pointer;
        }

        .user-dropdown-btn {
            background: none;
            border: none;
            color: var(--text-light);
            cursor: pointer;
            display: flex;
            align-items: center;
            padding: 0;
        }

        .user-dropdown-btn i {
            margin-right: 8px;
        }

        .user-dropdown-content {
            display: none;
            position: absolute;
            background-color: var(--card-bg);
            min-width: 180px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            right: 0;
            border-radius: 10px;
            padding: 10px 0;
            margin-top: 10px;
            transition: background-color 0.3s, color 0.3s;
        }

        .user-dropdown-content a,
        .user-dropdown-content button {
            color: var(--text-light);
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            transition: background-color 0.3s, color 0.3s;
        }

        .user-dropdown-content a:hover,
        .user-dropdown-content button:hover {
            background-color: rgba(0, 123, 255, 0.2);
            color: var(--primary-color);
        }

        .user-dropdown:hover .user-dropdown-content {
            display: block;
        }

        .whatsapp-float {
            position: fixed;
            bottom: 25px;
            right: 25px;
            z-index: 999;
        }

        .whatsapp-float a {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 60px;
            height: 60px;
            background-color: #25D366;
            color: white;
            border-radius: 50%;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.4);
            transition: transform 0.3s ease-in-out;
        }

        .whatsapp-float a:hover {
            transform: scale(1.1);
        }

        /* Mini carrito adaptado al dashboard */
        .cart-dropdown {
            background-color: var(--card-bg);
            /* Mismo que cards y navbar */
            color: var(--text-light);
            /* Texto claro según tema */
            border-radius: 12px;
            padding: 10px;
            width: 300px;
            max-height: 350px;
            overflow-y: auto;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.35);
            transition: all 0.3s ease;
            position: absolute;
            right: 0;
            top: 45px;
            z-index: 1000;
        }

        /* Items del carrito */
        .cart-dropdown .list-group-item {
            background: transparent;
            /* Se integra con el fondo */
            color: var(--text-light);
            border: none;
            padding: 10px 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            font-weight: 500;
        }

        .cart-dropdown .list-group-item:last-child {
            border-bottom: none;
        }

        /* Botones */
        .cart-dropdown .btn {
            font-size: 0.75rem;
            padding: 4px 8px;
            border-radius: 6px;
            font-weight: 600;
        }

        .cart-dropdown .btn-primary {
            background-color: var(--primary-color);
            border: none;
            color: var(--text-light);
        }

        .cart-dropdown .btn-primary:hover {
            background-color: #0056b3;
        }

        .cart-dropdown .btn-danger {
            background-color: #dc3545;
            border: none;
            color: var(--text-light);
        }

        .cart-dropdown .btn-danger:hover {
            background-color: #a71d2a;
        }

        /* Animación aparición/desaparición */
        .cart-dropdown.show {
            display: block !important;
            opacity: 1;
            transform: translateY(0);
        }

        .cart-dropdown.hide {
            opacity: 0;
            transform: translateY(-15px);
            transition: opacity 0.3s, transform 0.3s;
        }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div class="dashboard-container">
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <a href="#" class="logo-container">
                    <img src="{{ asset('img/IconSuarPol.png') }}" alt="Logo">
                    <h4>SuarPol</h4>
                </a>
            </div>
            <ul class="sidebar-menu">
                <li class="sidebar-menu-item"><a href="{{ route('dashboard.cli') }}" class="active"><i
                            class="fas fa-home"></i> Inicio</a>
                </li>
                <li class="sidebar-menu-item"><a href="{{ route('dashboard.catalog.products') }}"><i
                            class="fas fa-tags"></i> Catálogo de Productos</a>
                </li>
                <li class="sidebar-menu-item"><a href="{{ route('dashboard.cli.services') }}"><i
                            class="fas fa-wrench"></i>Servicios Tecnológicos</a>
                </li>
                <li class="sidebar-menu-item"><a href="{{ route('dashboard.cli.news') }}"><i class="fas fa-newspaper"></i>Noticias</a>
                </li>
                <li class="sidebar-menu-item"><a href="{{ route('dashboard.cli.softwareForSale') }}"><i
                            class="fas fa-shopping-cart"></i> Software a la
                        venta</a></li>
            </ul>
            <div class="mt-auto sidebar-footer">
                <form action="{{ route('auth.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger w-100">
                        <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                    </button>
                </form>
            </div>
        </aside>
        <div class="whatsapp-float">
            <a href="https://wa.me/TUNUMERODETELEFONO?text=¡Hola!%20Me%20interesa%20obtener%20más%20información%20sobre%20sus%20servicios."
                target="_blank">
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>
        <main class="main-content" id="main-content">
            <nav class="navbar-top d-flex justify-content-between align-items-center px-3 py-2">
                <button class="toggle-btn" id="toggle-sidebar"><i class="fas fa-bars"></i></button>
                <div class="navbar-brand d-none d-md-block">Bienvenido</div>
                <span class="d-md-none fs-2">Bienvenido</span>

                <div class="d-flex align-items-center">
                    <!-- Botón de modo claro/oscuro -->
                    <button id="toggleTheme" class="btn btn-outline-light me-3">
                        <i class="fas fa-sun"></i>
                    </button>

                    <!-- Botón de carrito con numerador -->
                    <button id="cart-button" class="btn btn-outline-light position-relative me-3">
                        <i class="fas fa-shopping-cart"></i>
                        <span id="cart-count"
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            {{ session('productList') ? count(session('productList')) : 0 }}
                        </span>
                    </button>




                    <!-- Mini carrito -->
                    <div id="cart-dropdown" class="cart-dropdown hide">
                        <div class="cart-header d-flex justify-content-between align-items-center mb-2">
                            <strong>Mi Carrito</strong>
                            <button type="button" class="btn-close text-light" id="close-cart"></button>
                        </div>
                        <ul id="cart-items" class="list-group mb-2">
                            @if (session('productList'))
                                @foreach (session('productList') as $item)
                                    <li class="list-group-item">
                                        <span>{{ $item['title'] }} x {{ $item['quantity'] }}</span>
                                        <div>
                                            <a href="#" class="btn btn-sm btn-primary me-1">Ver</a>
                                            <button class="btn btn-sm btn-danger remove-cart-btn"
                                                data-id="{{ $item['product_id'] }}">Eliminar</button>
                                        </div>
                                    </li>
                                @endforeach
                            @else
                                <li class="list-group-item">El carrito está vacío</li>
                            @endif
                        </ul>
                    </div>


                    <div class="user-dropdown">
                        <button class="user-dropdown-btn"><i class="fas fa-user-circle"></i> Usuario
                            Administrador</button>
                        <div class="user-dropdown-content">
                            <a href="#"><i class="fas fa-user-cog"></i> Perfil</a>
                            <form action="{{ route('auth.logout') }}" method="POST">
                                @csrf
                                <button type="submit"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>


            @yield('content')
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleBtn = document.getElementById('toggle-sidebar');
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('main-content');
            const userDropdown = document.querySelector('.user-dropdown-btn');
            const userDropdownContent = document.querySelector('.user-dropdown-content');
            const themeBtn = document.getElementById("toggleTheme");
            const body = document.body;

            // =========================
            // Sidebar toggle
            // =========================
            toggleBtn?.addEventListener('click', () => sidebar.classList.toggle('show'));

            function handleSidebar() {
                if (window.innerWidth >= 768) {
                    sidebar.classList.remove('show');
                    mainContent.classList.remove('expanded');
                } else {
                    sidebar.classList.add('collapsed');
                    mainContent.classList.add('expanded');
                }
            }
            handleSidebar();
            window.addEventListener('resize', handleSidebar);

            // =========================
            // User dropdown
            // =========================
            userDropdown?.addEventListener('click', () => userDropdownContent.classList.toggle('d-block'));

            // =========================
            // Dark/Light Theme Toggle
            // =========================
            if (localStorage.getItem("theme") === "light") {
                body.classList.add("light-mode");
                themeBtn.innerHTML = '<i class="fas fa-moon"></i>';
            } else {
                themeBtn.innerHTML = '<i class="fas fa-sun"></i>';
            }

            themeBtn?.addEventListener("click", () => {
                body.classList.toggle("light-mode");
                if (body.classList.contains("light-mode")) {
                    localStorage.setItem("theme", "light");
                    themeBtn.innerHTML = '<i class="fas fa-moon"></i>';
                } else {
                    localStorage.setItem("theme", "dark");
                    themeBtn.innerHTML = '<i class="fas fa-sun"></i>';
                }
            });

            // =========================
            // Activar item del menú
            // =========================
            const menuLinks = document.querySelectorAll('.sidebar-menu-item a');

            menuLinks.forEach(link => {
                link.addEventListener('click', function() {
                    // Quitar "active" de todos
                    menuLinks.forEach(l => l.classList.remove('active'));

                    // Agregar "active" al que se hizo click
                    this.classList.add('active');
                });
            });

            const cartButton = document.getElementById('cart-button');
            const cartDropdown = document.getElementById('cart-dropdown');
            const closeCart = document.getElementById('close-cart');

            // Abrir/cerrar carrito con animación
            cartButton.addEventListener('click', () => {
                console.log('click en el button');
                cartDropdown.classList.toggle('show');
                cartDropdown.classList.toggle('hide');
            });

            // Botón de cierre
            closeCart.addEventListener('click', () => {
                cartDropdown.classList.remove('show');
                cartDropdown.classList.add('hide');
            });

            // Cierra el carrito si se hace clic fuera
            document.addEventListener('click', (e) => {
                if (!cartButton.contains(e.target) && !cartDropdown.contains(e.target)) {
                    cartDropdown.classList.remove('show');
                    cartDropdown.classList.add('hide');
                }
            });

        });
    </script>

</body>

</html>
