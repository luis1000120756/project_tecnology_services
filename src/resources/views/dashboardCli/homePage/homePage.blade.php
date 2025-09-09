@extends('layouts.dashboardLayout.dashboardLayout')

@section('title', 'Inicio - SuarPol')

@section('content')

    <section class="container-fluid px-3">
        <div class="row align-items-center">
            <div class="col-md-6 p-4">
                <h2 class="fw-bold mb-3">Conoce el futuro de la tecnología e IA</h2>
                <p class="lead">
                    El mundo avanza rápido, y la inteligencia artificial está redefiniendo cómo interactuamos con la
                    tecnología. En <strong>SuarPol</strong>, no solo seguimos el ritmo: lo impulsamos. Te mostramos cómo la
                    IA y las nuevas tecnologías impactan tu vida diaria y, lo más importante, cómo puedes ser parte de la
                    revolución.
                </p>
                <p>
                    Nuestros **servicios de desarrollo de software, redes y telecomunicaciones** están diseñados para
                    integrar estas innovaciones, mientras que nuestra selección de **productos de alta gama (drones,
                    audífonos, consolas y más)** te permite experimentar el futuro en tus manos.
                </p>
                <a href="{{ route('dashboard.catalog.products') }}" class="btn btn-primary btn-lg mt-3">
                    Explora nuestras soluciones <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-md-6 p-4">
                <div class="ratio ratio-16x9 shadow-lg rounded-3">
                    <video controls autoplay loop muted>
                        <source src="{{ asset('videos/8327799-uhd_3840_2160_25fps.mp4') }}" type="video/mp4">
                        Tu navegador no soporta la etiqueta de video.
                    </video>
                </div>
            </div>
        </div>
    </section>

    <hr class="my-5">

    <section class="container-fluid px-3">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-md-6 p-4">
                <h2 class="fw-bold mb-3">Conectando el mundo con redes de vanguardia</h2>
                <p class="lead">
                    En <strong>SuarPol</strong>, creemos que la conectividad es la base de la innovación. Nuestro segundo
                    video te sumerge en el fascinante mundo de las redes y las telecomunicaciones, mostrando cómo las
                    infraestructuras de próxima generación nos unen.
                </p>
                <p>
                    Desde la configuración de redes empresariales hasta la optimización de tu conexión a internet, nuestros
                    expertos garantizan que tu flujo de datos sea rápido, seguro y eficiente. Además, nuestra gama de
                    productos tecnológicos complementa estos servicios, brindándote las herramientas para una experiencia
                    digital inigualable.
                </p>
                <a href="{{ route('dashboard.catalog.products') }}" class="btn btn-primary btn-lg mt-3">
                    Conoce nuestros servicios <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-md-6 p-4">
                <div class="ratio ratio-16x9 shadow-lg rounded-3">
                    <video controls autoplay loop muted>
                        <source src="{{ asset('videos/videoHome.mp4') }}" type="video/mp4">
                        Tu navegador no soporta la etiqueta de video.
                    </video>
                </div>
            </div>
        </div>
    </section>

@endsection
