<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('img/IconSuarPol.png') }}" type="image/png">
    <title>SuarPol - Tecnología y Soluciones Corporativas</title>

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
        }

        /* Estilos del Tema Claro (se aplican cuando el body tiene la clase 'light-mode') */
        body.light-mode {
            --primary-color: #007bff;
            --secondary-color: #555;
            --dark-bg: #f4f7f6;
            --card-bg: #ffffff;
            --text-light: #333;
            --gradient-main: linear-gradient(135deg, #e0eafc, #c9d6ff);
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: var(--dark-bg);
            color: var(--text-light);
            line-height: 1.6;
            scroll-behavior: smooth;
            transition: background-color 0.3s, color 0.3s;
        }

        .section-padding {
            padding: 80px 0;
        }

        .container {
            max-width: 1200px;
        }

        /*--- Navbar ---*/
        .navbar-custom {
            background-color: var(--card-bg);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            transition: background-color 0.3s;
        }

        .scrolled {
            background-color: rgba(34, 37, 51, 0.9);
            backdrop-filter: blur(5px);
        }

        body.light-mode .navbar-custom {
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        body.light-mode .scrolled {
            background-color: rgba(255, 255, 255, 0.9);
        }

        .navbar-brand img {
            max-height: 40px;
        }

        .nav-link {
            color: var(--text-light) !important;
            font-weight: 600;
            transition: color 0.3s;
        }

        body.light-mode .nav-link,
        body.light-mode .navbar-brand {
            color: var(--secondary-color) !important;
        }

        .nav-link:hover {
            color: var(--primary-color) !important;
        }

        /*--- Hero Section ---*/
        .hero {
            padding: 150px 20px 100px;
            background: var(--gradient-main);
            color: white;
            text-align: center;
        }

        .hero-logo {
            max-width: 150px;
            margin-bottom: 20px;
            filter: drop-shadow(0 0 15px rgba(0, 123, 255, 0.8));
            animation: fadeInDown 1.5s ease-out forwards;
        }

        @keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
            animation: fadeInUp 1.5s ease-out forwards;
        }

        .hero p {
            font-size: 1.5rem;
            margin-top: 10px;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.4);
            animation: fadeInUp 1.5s 0.3s ease-out forwards;
        }

        .btn-main {
            margin: 15px;
            padding: 12px 30px;
            border-radius: 50px;
            transition: transform 0.3s, box-shadow 0.3s;
            font-weight: 600;
            animation: fadeIn 1.5s 0.6s ease-out forwards;
        }

        .btn-main:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 10px rgba(0, 123, 255, 0.5);
        }

        body.light-mode .btn-main {
            color: #fff !important;
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        body.light-mode .btn-outline-light {
            color: var(--text-light);
            border-color: var(--primary-color) !important;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
            font-weight: 700;
            font-size: 2.5rem;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.4);
            color: var(--text-light);
        }

        body.light-mode .section-title {
            color: var(--text-light);
            text-shadow: none;
        }

        .section-title span {
            color: var(--primary-color);
        }

        /*--- Cards Grid (Productos y Noticias) ---*/
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            justify-items: center;
        }

        .card-custom {
            background: var(--card-bg);
            border-radius: 20px;
            overflow: hidden;
            width: 100%;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            transition: transform 0.4s, box-shadow 0.4s, background-color 0.3s;
        }

        body.light-mode .card-custom {
            background: var(--card-bg);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .card-custom:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.6);
        }

        .card-custom img,
        .card-custom video {
            width: 100%;
            height: 220px;
            object-fit: cover;
            display: block;
            transition: transform 0.5s;
        }

        .card-custom:hover img,
        .card-custom:hover video {
            transform: scale(1.05);
        }

        .card-content {
            padding: 20px;
            text-align: left;
        }

        .card-content h5 {
            margin: 0 0 8px;
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--primary-color);
        }

        .card-content p {
            margin: 0;
            font-size: 1rem;
            color: var(--secondary-color);
        }

        /*--- Software Section ---*/
        .software-section {
            background-color: var(--card-bg);
            padding: 80px 20px;
            transition: background-color 0.3s;
        }

        body.light-mode .software-section {
            background-color: var(--card-bg);
        }

        .software-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 30px;
        }

        .software-item {
            background: #2c303a;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s, box-shadow 0.3s, background-color 0.3s;
        }

        body.light-mode .software-item {
            background: #f0f0f0;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .software-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
        }

        .software-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .software-info {
            padding: 20px;
            text-align: center;
        }

        .software-info h4 {
            color: var(--primary-color);
            margin-bottom: 10px;
        }

        .software-info p {
            color: var(--secondary-color);
            font-size: 0.95rem;
            margin-bottom: 15px;
        }

        .btn-buy {
            background-color: var(--primary-color);
            color: var(--text-light);
            border: none;
            padding: 10px 25px;
            border-radius: 50px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn-buy:hover {
            background-color: #0056b3;
        }

        /*--- Testimonial Section ---*/
        .testimonial-card {
            background-color: var(--card-bg);
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            margin-bottom: 20px;
            transition: background-color 0.3s;
        }

        body.light-mode .testimonial-card {
            background-color: var(--card-bg);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .testimonial-card p {
            font-style: italic;
            color: var(--text-light);
            font-size: 1.1rem;
        }

        body.light-mode .testimonial-card p {
            color: var(--text-light);
        }

        .testimonial-card .author {
            font-weight: 600;
            margin-top: 15px;
            color: var(--primary-color);
        }

        /*--- Contact Form ---*/
        .contact-form {
            background-color: var(--card-bg);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            transition: background-color 0.3s;
        }

        body.light-mode .contact-form {
            background-color: var(--card-bg);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .contact-form .form-label {
            color: var(--primary-color);
            font-weight: 600;
        }

        .contact-form .form-control {
            background-color: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--text-light);
            transition: background-color 0.3s, color 0.3s, border-color 0.3s;
        }

        body.light-mode .contact-form .form-control {
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            color: #333;
        }

        .modal-content.contact-form {
            background-color: var(--card-bg);
            border: none;
        }

        body.light-mode .modal-content.contact-form {
            background-color: var(--card-bg);
        }

        .modal-body {
            padding: 1rem 1.5rem 1.5rem;
        }

        .btn-close-white {
            filter: invert(1) grayscale(100%) brightness(200%);
        }

        body.light-mode .btn-close-white {
            filter: none;
        }

        /*--- Footer ---*/
        .footer {
            background-color: var(--card-bg);
            padding: 50px 20px 20px;
            text-align: center;
            transition: background-color 0.3s;
        }

        body.light-mode .footer {
            background-color: var(--card-bg);
        }

        .footer h5 {
            color: var(--primary-color);
            margin-bottom: 20px;
            font-weight: 600;
        }

        .footer-links a,
        .footer-social a {
            color: var(--text-light);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        body.light-mode .footer-links a,
        body.light-mode .footer-social a {
            color: var(--secondary-color);
        }

        .footer-links li {
            margin-bottom: 8px;
        }

        .footer-links a:hover,
        .footer-social a:hover {
            color: var(--primary-color);
        }

        .footer-social .social-icon {
            font-size: 24px;
            margin: 0 10px;
        }

        .footer-bottom {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        body.light-mode .footer-bottom {
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }

        /*--- WhatsApp Button ---*/
        .whatsapp-button {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 999;
            width: 60px;
            height: 60px;
            background-color: #25d366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .whatsapp-button i {
            font-size: 30px;
            color: white;
        }

        .whatsapp-button:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
        }

        /*--- Responsiveness ---*/
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.2rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .software-grid {
                grid-template-columns: 1fr;
            }

            .whatsapp-button {
                width: 50px;
                height: 50px;
                bottom: 20px;
                right: 20px;
            }

            .whatsapp-button i {
                font-size: 25px;
            }
        }

        /* Botón de cambio de tema */
        #theme-toggle {
            background: none;
            border: none;
            color: var(--text-light);
            font-size: 1.5rem;
            cursor: pointer;
            transition: color 0.3s;
        }

        #theme-toggle:hover {
            color: var(--primary-color);
        }

        body.light-mode #theme-toggle {
            color: var(--secondary-color);
        }

        body.light-mode #theme-toggle:hover {
            color: var(--primary-color);
        }
    </style>
</head>

<body>
    @include('modals.modal-register-form-principal')
    @include('modals.modal-login-form-principal')


    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/IconSuarPol.png') }}" alt="Logo SuarPol"> SuarPol
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#productos">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#servicios">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link" href="#software">Software</a></li>
                    <li class="nav-item"><a class="nav-link" href="#noticias">Noticias</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                    <li class="nav-item">
                        <a href="#" class="btn btn-light btn-sm btn-main px-4 ms-2" data-bs-toggle="modal"
                            data-bs-target="#loginModal">
                            Iniciar Sesión
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="btn btn-outline-light btn-sm btn-main px-4 ms-2"
                            data-bs-toggle="modal" data-bs-target="#registerModal">
                            Registrarse
                        </a>
                    </li>
                    <li class="nav-item">
                        <button id="theme-toggle" class="btn btn-link nav-link">
                            <i class="fas fa-moon"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section class="hero text-center animate__animated animate__fadeIn">
            <div class="container">
                <img src="{{ asset('img/IconSuarPol.png') }}" class="hero-logo" alt="Logo Adminstore">
                <h1 class="animate__animated animate__fadeInUp">SuarPol - Soluciones Tecnológicas Integrales</h1>
                <p class="animate__animated animate__fadeInUp">Tu aliado estratégico en tecnología, desarrollo web y
                    servicios corporativos.</p>
                <div>
                    <a href="#" class="btn btn-light btn-main px-4" data-bs-toggle="modal"
                        data-bs-target="#loginModal">
                        Iniciar Sesión
                    </a>
                    <a href="#" class="btn btn-outline-light btn-main px-4" data-bs-toggle="modal"
                        data-bs-target="#registerModal">
                        Registrarse
                    </a>
                </div>
            </div>
        </section>

        <section class="section-padding" id="productos">
            <div class="container">
                <h2 class="section-title">Nuestros <span>Productos</span></h2>
                <div class="cards-grid">
                    <article class="card-custom">
                        <img src="{{ asset('img/laptop.png') }}" alt="Laptop Gamer de alto rendimiento">
                        <div class="card-content">
                            <h5>Laptop Gamer de Alto Rendimiento</h5>
                            <p>Máxima potencia y velocidad para tus proyectos y juegos más exigentes.</p>
                        </div>
                    </article>
                    <article class="card-custom">
                        <img src="{{ asset('img/router-157597_1280.png') }}"
                            alt="Router empresarial de última generación">
                        <div class="card-content">
                            <h5>Router Empresarial de Última Generación</h5>
                            <p>Garantiza redes seguras, estables y confiables para tu oficina.</p>
                        </div>
                    </article>
                    <article class="card-custom">
                        <img src="{{ asset('img/monitor.jpg') }}" alt="Monitor 4K profesional">
                        <div class="card-content">
                            <h5>Monitor 4K Profesional</h5>
                            <p>Calidad de imagen superior para diseño, edición de video y programación.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="section-padding" style="background-color: var(--card-bg);" id="servicios">
            <div class="container">
                <h2 class="section-title">Nuestros <span>Servicios</span></h2>
                <div class="cards-grid">
                    <article class="card-custom">
                        <div class="card-content">
                            <h5>Redes y Telecomunicaciones</h5>
                            <p>Implementación, configuración y soporte de redes empresariales, WiFi corporativo y
                                telefonía VoIP.</p>
                        </div>
                    </article>
                    <article class="card-custom">
                        <div class="card-content">
                            <h5>Desarrollo Web a Medida</h5>
                            <p>Creación de aplicaciones web personalizadas, tiendas en línea y soluciones SaaS para
                                optimizar tu negocio.</p>
                        </div>
                    </article>
                    <article class="card-custom">
                        <div class="card-content">
                            <h5>Software Corporativo</h5>
                            <p>Desarrollamos aplicaciones de software a la medida para mejorar la gestión, el control y
                                la productividad de tu empresa.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="software-section" id="software">
            <div class="container">
                <h2 class="section-title">Soluciones de <span>Software</span></h2>
                <div class="software-grid">
                    <div class="software-item">
                        <img src="{{ asset('img/software1.jpg') }}" alt="Software de Gestión Empresarial">
                        <div class="software-info">
                            <h4>Software de Gestión Empresarial</h4>
                            <p>Optimiza tus procesos, mejora la productividad y toma decisiones informadas con nuestro
                                software ERP.</p>
                            <a href="#" class="btn-buy">Más Detalles</a>
                        </div>
                    </div>
                    <div class="software-item">
                        <img src="{{ asset('img/software2.jpg') }}" alt="CRM para Ventas">
                        <div class="software-info">
                            <h4>CRM para Ventas y Marketing</h4>
                            <p>Gestiona tus clientes, automatiza tus campañas y aumenta tus ventas con nuestra solución
                                CRM.</p>
                            <a href="#" class="btn-buy">Más Detalles</a>
                        </div>
                    </div>
                    <div class="software-item">
                        <img src="{{ asset('img/software3.jpg') }}" alt="Software de Contabilidad">
                        <div class="software-info">
                            <h4>Software de Contabilidad Integral</h4>
                            <p>Lleva el control de tus finanzas de manera fácil y segura con nuestro software de
                                contabilidad.</p>
                            <a href="#" class="btn-buy">Más Detalles</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @if (!empty($successMessage))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle-fill"></i>
                {{ $successMessage }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
            </div>
        @endif


        <section class="section-padding" id="noticias">
            <div class="container">
                <h2 class="section-title">Últimas <span>Noticias</span></h2>
                <div class="cards-grid">
                    <article class="card-custom">
                        <img src="{{ asset('img/news1.jpg') }}" alt="Inteligencia Artificial 2025">
                        <div class="card-content">
                            <h5>Inteligencia Artificial 2025</h5>
                            <p>Conoce las últimas tendencias en IA y cómo la automatización puede transformar tu
                                negocio.</p>
                        </div>
                    </article>
                    <article class="card-custom">
                        <video autoplay muted loop playsinline>
                            <source src="{{ asset('videos/8327799-uhd_3840_2160_25fps.mp4') }}" type="video/mp4">
                            Tu navegador no soporta la reproducción de video.
                        </video>
                        <div class="card-content">
                            <h5>El Impacto Visual de la Tecnología</h5>
                            <p>Explora cómo el contenido multimedia está revolucionando la forma en que interactuamos
                                con la tecnología.</p>
                        </div>
                    </article>
                    <article class="card-custom">
                        <img src="{{ asset('img/news3.jpg') }}" alt="Ciberseguridad 2025">
                        <div class="card-content">
                            <h5>Ciberseguridad en el 2025</h5>
                            <p>Aprende a proteger tu infraestructura tecnológica de las amenazas modernas y emergentes.
                            </p>
                        </div>
                    </article>
                    <article class="card-custom">
                        <img src="{{ asset('img/robotImage.jpg') }}" alt="Avances en robótica empresarial">
                        <div class="card-content">
                            <h5>Próximos Pasos en la Robótica Empresarial</h5>
                            <p>Descubre cómo los avances en robótica están integrándose en el mundo empresarial.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="section-padding" id="testimonios" style="background-color: var(--card-bg);">
            <div class="container">
                <h2 class="section-title">Lo que dicen nuestros <span>Clientes</span></h2>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="testimonial-card">
                            <p>"El equipo de SuarPol superó nuestras expectativas. Su software a medida ha optimizado
                                nuestros procesos de forma increíble. ¡Altamente recomendados!"</p>
                            <p class="author">- Ana Gómez, Gerente de Operaciones</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="testimonial-card">
                            <p>"Hemos notado una mejora significativa en nuestra red después de que SuarPol se encargara
                                del proyecto. Su soporte técnico es de primera."</p>
                            <p class="author">- Carlos Ruiz, Director de TI</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding" id="contacto">
            <div class="container">
                <h2 class="section-title">Contáctanos</h2>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="contact-form">
                            <form>
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre completo</label>
                                    <input type="text" class="form-control" id="nombre" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Correo electrónico</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="mensaje" class="form-label">Mensaje</label>
                                    <textarea class="form-control" id="mensaje" rows="5" required></textarea>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary btn-main">Enviar Mensaje</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>SuarPol</h5>
                    <p>Soluciones tecnológicas integrales y personalizadas para potenciar el crecimiento de tu empresa.
                    </p>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>Enlaces Rápidos</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="#productos">Productoss</a></li>
                        <li><a href="#servicios">Servicios</a></li>
                        <li><a href="#software">Software</a></li>
                        <li><a href="#noticias">Noticias</a></li>
                        <li><a href="#contacto">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Síguenos</h5>
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-facebook-f social-icon"></i></a>
                        <a href="#"><i class="fab fa-twitter social-icon"></i></a>
                        <a href="#"><i class="fab fa-instagram social-icon"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in social-icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 SuarPol. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <a href=https://wa.me/573192479485 class="whatsapp-button" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const themeToggle = document.getElementById('theme-toggle');
            const body = document.body;
            const icon = themeToggle.querySelector('i');

            // Verificar el tema guardado en el Local Storage
            const savedTheme = localStorage.getItem('theme');
            @if (!empty($successMessage))
                const loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
                loginModal.show();
            @endif
            if (savedTheme === 'light-mode') {
                body.classList.add('light-mode');
                icon.classList.remove('fa-moon');
                icon.classList.add('fa-sun');
            }

            themeToggle.addEventListener('click', () => {
                body.classList.toggle('light-mode');

                // Cambiar el ícono y guardar la preferencia
                if (body.classList.contains('light-mode')) {
                    icon.classList.remove('fa-moon');
                    icon.classList.add('fa-sun');
                    localStorage.setItem('theme', 'light-mode');
                } else {
                    icon.classList.remove('fa-sun');
                    icon.classList.add('fa-moon');
                    localStorage.setItem('theme', 'dark-mode');
                }
            });

            const loginModalElement = document.getElementById('loginModal');
            if (loginModalElement) {
                loginModalElement.addEventListener('show.bs.modal', function() {
                    const form = this.querySelector('form');
                    const btnIngresa = this.querySelector('#btnIngresa');
                    const spinner = this.querySelector('#spinner');

                    if (form && btnIngresa && spinner) {
                        form.removeEventListener('submit', handleFormSubmit);
                        form.addEventListener('submit', handleFormSubmit);
                    }
                });
            }

            function handleFormSubmit(event) {
                const form = event.target;
                const btnIngresa = form.querySelector('#btnIngresa');
                const spinner = form.querySelector('#spinner');

                if (spinner && btnIngresa) {
                    spinner.style.display = 'block';
                    btnIngresa.disabled = true;
                }

                setTimeout(() => {
                    if (spinner && btnIngresa) {
                        spinner.style.display = 'none';
                        btnIngresa.disabled = false;
                    }
                }, 10000);
            }

            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('.navbar-custom');
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });

            @if ($errors->any())
                var loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
                loginModal.show();
            @endif

            const inputsLogin = document.querySelectorAll('.form-control');
            const messageAuthError = document.getElementById('messageAuthError');
            if (messageAuthError) {
                inputsLogin.forEach(input => {
                    input.addEventListener('click', () => {
                        messageAuthError.style.display = 'none';
                    });
                });
            }

        });
    </script>
</body>

</html>
