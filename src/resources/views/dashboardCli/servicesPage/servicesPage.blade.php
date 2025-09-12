@extends('layouts.dashboardLayout.dashboardLayout')

@section('content')
    <div class="container my-5">
        <div class="row g-4">
            @include('components.services.cardService', [
                'image' => asset('img/soportService.png'),
                'title' => 'Soporte a Plataformas',
                'category' => 'Mantenimiento y asistencia técnica 24/7',
            ])
            @include('components.services.cardService', [
                'image' => asset('img/consult.png'),
                'title' => 'Consultoría Tecnológica',
                'category' => 'Asesoramiento experto para tu negocio',
            ])
            @include('components.services.cardService', [
                'image' => asset('img/software.png'),
                'title' => 'Desarrollo de Software',
                'category' => 'Soluciones a medida para tu empresa',
            ])
            @include('components.services.cardService', [
                'image' => asset('img/api.png'),
                'title' => 'Integración de Apis y Servicios',
                'category' => 'Soluciones a medida para tu empresa',
            ])
        </div>
    </div>
@endsection
