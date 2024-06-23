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

    @yield('content')

</body>
</html>
