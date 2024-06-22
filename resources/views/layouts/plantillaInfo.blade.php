<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @stack('css')
    <link rel="stylesheet" href="{{ asset('css/color_font.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/Logo.jpg') }}" type="image/x-icon">
</head>
<body>

    @yield('content')

</body>
</html>
