<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CMS</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
    <script src="{{ asset('js/slick.min.js') }}" defer></script>
    <script src="{{ url('https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js') }}"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/szkielet.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animacja.css') }}">
        <link rel="stylesheet" href="{{ asset('css/menu-gora.css') }}">
        <link rel="stylesheet" href="{{ asset('css/tresc.css') }}">
        <link rel="stylesheet" href="{{ asset('css/galeria.css') }}">
        <link rel="stylesheet" href="{{ asset('css/stopka.css') }}">
        <link rel="stylesheet" href="{{ asset('css/scroll.css')}}">
        <link rel="stylesheet" href="{{ asset('css/cennik.css')}}">
        <link rel="stylesheet" href="{{ asset('css/mobilne.css')}}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css') }}"/>
</head>
<body>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
