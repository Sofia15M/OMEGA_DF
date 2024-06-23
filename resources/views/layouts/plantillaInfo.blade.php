<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @stack('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/color_font.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/Logo.jpg') }}" type="image/x-icon">
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="menu">
                <a href="#">@yield('Subtitle')</a>
                @yield('button')
            </nav>
        </div>
    </header>
    <aside class="sidebar">
        <div class="logo">
        <img src="{{ asset('img/Logo.jpg') }}" alt="logo">
        <h2>DigitalFace</h2>
        </div>
        <ul class="links">
        <h4>Unidad</h4>
        <li>
            <span class="material-symbols-outlined">Home</span>
            <a href="#">Info. Unidad</a>
        </li>
        <li>
            <span class="material-symbols-outlined">show_chart</span>
            <a href="#">Info. Apartamentos</a>
        </li>
        <li>
            <span class="material-symbols-outlined">flag</span>
            <a href="#">Info. Residentes</a>
        </li>
        <hr>
        <h4>Personal</h4>
        <li>
            <span class="material-symbols-outlined">person</span>
            <a href="#">Info. Administradores</a>
        </li>
        <li>
            <span class="material-symbols-outlined">group</span>
            <a href="#">Info. Vigilantes</a>
        </li>
        <li>
            <span class="material-symbols-outlined">ambient_screen</span>
            <a href="#">Info. Personal</a>
        </li>
        <hr>
        <h4>Visitantes y otros</h4>
        <li>
            <span class="material-symbols-outlined">bar_chart</span>
            <a href="#">Info. Visitantes</a>
        </li>
        <li>
            <span class="material-symbols-outlined">mail</span>
            <a href="#">Info. Domiciliarios</a>
        </li>
        <hr>
        <h4>Crear Nuevo Usuario</h4>
        <li>
            <span class="material-symbols-outlined">settings</span>
            <a href="#">Crear Usuario</a>
        </li>
        <hr>
        <li class="logout-link">
            <span class="material-symbols-outlined">logout</span>
            <a href="#">cerrar sesion</a>
        </li>
        </ul>
    </aside>


    @yield('content')

</body>
</html>
