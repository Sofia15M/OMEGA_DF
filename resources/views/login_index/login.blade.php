@extends('layouts.plantillaLogin')

@section('title', 'Inicio de sesion')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/stylelogin.css') }}">
@endpush

@section('content')
    <section>
        <div class="container">
            <div class="user login">
                <div class="form-box">
                    <form method="POST" action="validar.php">
                        <div class="form-control">
                            <h1>Bienvenidos</h1>
                            <br>
                            <input type="email" name="Gmail_User" required="" placeholder="Ingrese su correo electrónico" autocomplete="off">
                            <input type="password" name="Contrasena_User" required="" placeholder="Ingrese su Contraseña" autocomplete="off">
                            <br>
                            <button type="submit">Iniciar Sesión</button>
                        </div>
                    </form>
                </div>
                <div class="img-box">
                    <img src="../IMG/Logo.jpg" alt="" />
                </div>
            </div>
        </div>
    </section>
@endsection
