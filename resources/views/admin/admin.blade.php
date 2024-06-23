@extends('layouts.plantillaInfo')

@section('title', 'Administrador')

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
            <h1><strong>Bienvenido Administrador</strong></h1>
            <p>Recuerda que como administrador podresas:
                <br>1. Revisar toda la informacion de las personas registradas en la unidad.
                <br>2. Crear, Añadir, Editar, Actualizar y Desativar usuarios y personal de la unidad.
                <br><br> Cuida la seguria de la unidad
            </p>
            <p><strong>Numero que te identifica: </strong></p>
            <p><strong>Nombre Completo: </strong></p>
            <p><strong>Correo: </strong></p>
            <p><strong>Rol: </strong></p>
        </article>
    </section>
@endsection
