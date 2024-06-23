@extends('layouts.plantillaInfo')

@section('title', 'Administrador')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/styleCrear.css') }}">
@endpush

@section('content')
    @section('Subtitle', 'Crear Usuario')
    @section('button')
        <a href="#" class="atras">Volver atrás</a>
    @endsection
    <section>
        <div class="container">
            <div class="user login">
                <div class="img-box">
                    <img src="{{ asset('img/User.jpg')}}" alt="" />
                </div>
                <div class="form-box">
                    <form method="POST" action="registro.php" enctype="multipart/form-data" id="registroForm">
                        <div class="form-control">
                            <h1>¡Bienvenidos!</h1>
                            <br>
                            <label for="Gmail_User">Correo:</label>
                            <input type="email" name="Gmail_User" required="" placeholder="Ingresa el correo" />
                            <br>
                            <label for="Contrasena_User">Contraseña:</label>
                            <input type="password" name="Contrasena_User" required="" placeholder="Ingresa la contraseña" />
                            <br>
                            <label for="Foto_User">Añade una foto:</label>
                            <input type="file" id="Foto_User" name="Foto_User" accept="image/*" required>
                            <br>
                            <label for="ID_ROL">Rol:</label>
                            <p>(1 - para administrador) <br> (2 - para vigilante)</p>
                            <input type="number" name="ID_ROL" id="ID_ROL" min="1" max="2" class="form-control" placeholder="Ingrese el rol" required/>
                            <br><br>
                            <input type="submit" name="submit" value="Register" id="registroButton" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
