@extends('layouts.dashboardLayout.dashboardLayout')

@section('title', 'Noticias de Tecnología - Tech Solutions')

@section('content')
    <div class="container my-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color: var(--primary-color);">
                📰 Noticias de Tecnología
            </h2>
            <p style="color: var(--text-light); opacity: 0.8;">
                Mantente al día con las últimas novedades del mundo tech
            </p>
        </div>

        <div class="row g-4">
            <!-- Noticia 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="card-custom shadow-lg border-0 rounded-4 p-3 h-100 d-flex flex-column"
                    style="background: var(--card-bg); color: var(--text-light);">
                    <div class="card-img-container mb-3">
                        <img src="https://picsum.photos/600/400?random=1" class="img-fluid rounded zoom-effect"
                            alt="Avances en IA 2025">
                    </div>
                    <div class="text-center flex-grow-1 d-flex flex-column">
                        <h4 class="fw-bold mb-2" style="color: var(--primary-color);">
                            Avances en Inteligencia Artificial 2025
                        </h4>
                        <p class="mt-1 flex-grow-1">
                            Nuevos modelos de IA están revolucionando la programación y el análisis de datos. Expertos
                            discuten su impacto ético y social.
                        </p>
                        <a href="https://www.technewsworld.com" target="_blank" rel="noopener noreferrer"
                            class="btn btn-outline-primary mt-auto w-100 fw-semibold">
                            Leer más →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Noticia 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="card-custom shadow-lg border-0 rounded-4 p-3 h-100 d-flex flex-column"
                    style="background: var(--card-bg); color: var(--text-light);">
                    <div class="card-img-container mb-3">
                        <img src="https://picsum.photos/600/400?random=2" class="img-fluid rounded zoom-effect"
                            alt="Nueva API de Google">
                    </div>
                    <div class="text-center flex-grow-1 d-flex flex-column">
                        <h4 class="fw-bold mb-2" style="color: var(--primary-color);">
                            Google lanza nueva API para desarrolladores
                        </h4>
                        <p class="mt-1 flex-grow-1">
                            La nueva API promete mejorar la integración con servicios en la nube
                            y acelerar el desarrollo de aplicaciones modernas.
                        </p>
                        <a href="https://www.theverge.com" target="_blank" rel="noopener noreferrer"
                            class="btn btn-outline-primary mt-auto w-100 fw-semibold">
                            Leer más →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Noticia 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="card-custom shadow-lg border-0 rounded-4 p-3 h-100 d-flex flex-column"
                    style="background: var(--card-bg); color: var(--text-light);">
                    <div class="card-img-container mb-3">
                        <img src="https://picsum.photos/600/400?random=3" class="img-fluid rounded zoom-effect"
                            alt="Ciberseguridad 2026">
                    </div>
                    <div class="text-center flex-grow-1 d-flex flex-column">
                        <h4 class="fw-bold mb-2" style="color: var(--primary-color);">
                            La ciberseguridad será clave en 2026
                        </h4>
                        <p class="mt-1 flex-grow-1">
                            Los ataques a la infraestructura digital siguen en aumento. Se proponen nuevas estrategias de
                            defensa basadas en IA.
                        </p>
                        <a href="https://www.wired.com" target="_blank" rel="noopener noreferrer"
                            class="btn btn-outline-primary mt-auto w-100 fw-semibold">
                            Leer más →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Estilos personalizados -->
    <style>
        .card-custom {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .card-custom:hover {
            transform: translateY(-6px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.35);
        }

        .card-img-container {
            height: 220px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            background-color: var(--dark-bg);
            border-radius: 12px;
        }

        .card-img-container img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        .zoom-effect {
            transition: transform 0.4s ease;
            cursor: zoom-in;
        }

        .zoom-effect:hover {
            transform: scale(1.15);
        }

        @media (max-width: 768px) {
            .card-img-container {
                height: 180px;
            }
        }
    </style>
@endsection
