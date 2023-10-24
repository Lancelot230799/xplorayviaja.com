<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script></script>
</head>

<body>
    {{-- navbar --}}
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #fb7500;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="http://exploraviajesporelmundo.com/images/logo.png" alt="" width="90px" height="80px">
                    AdmUltra v1.0
                </a>
                @include('layouts.perfil')
            </div>
        </nav>
        {{-- Contenido --}}
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
