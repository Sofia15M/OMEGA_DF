@extends('layouts.plantillaVigilant')

@section('title', 'Vigilante')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/styleRoles.css') }}">
@endpush

@section('content')
    @section('Subtitle', 'Bienvenido')
    @section('button')
        <button id="cerrarSesion">Cerrar sesión</button>
    @endsection
    <section class="conteiner">
        <article class="post">
            <h1><strong>Bienvenido Vigilante</strong></h1>
            <p>Recuerda que como vigilante podras:
                <br>1. Ver la informacion de todas las personas registradas ben la unidad.
                <br>2. Añador nuevos visitantes, editarlos y desativarlos.
                <br><br> Cuida la seguria de la unidad
            </p>
            <p><strong>Numero que te identifica: </strong></p>
            <p><strong>Nombre Completo: </strong></p>
            <p><strong>Correo: </strong></p>
            <p><strong>Rol: </strong></p>
        </article>
    </section>
@endsection
