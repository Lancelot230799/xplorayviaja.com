<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Xplorayviaja</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body class="antialiased">
    {{-- -----------------------NAVBAR --------------------------- --}}
    <nav class="navbar navbar-expand-lg" style="background-color: #fb7500;">
        <div class="container-fluid" style="background-color: #fb7500;">
            <a class="navbar-brand" href="#">
                <img src="http://exploraviajesporelmundo.com/images/logo.png" alt="xplorayviaja" width="90" height="90">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mediosp.index') }}">Metodos de pago</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Pruebas</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    @if (Route::has('login'))
                        <div class="navbar-nav">
                            @auth
                                <a class="nav-link active" href="{{ url('/home') }}">
                                    <i class="bi bi-door-open-fill" style="font-size: 2rem; color: rgb(0, 0, 0);"></i>
                                </a>
                            @else
                                <a class="nav-link" href="{{ route('login') }}">
                                    {{__('Inicia sesion')}}
                                </a>
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">
                                        {{__('Registrate')}}
                                    </a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </span>
            </div>
        </div>
    </nav>
    {{-- ---------------------------------------------------------------------------------------------- --}}
    <div class="cp">
        <div class="ch1">
            hola
        </div>
        <div class="ch2">
            Hola2
        </div>
    </div>
    {{-- --------------------------------------------------------------------------- --}}
    <style>
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .barra {
            background-color: blue;
        }

        .ch1 {
            background-image: url("https://tours-albatros.es/wp-content/uploads/2021/05/Polonia.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            width: 100%;
            height: 1500px;
        }

        .ch2 {
            background-image: url("https://www.kanamitravel.com/blog/wp-content/uploads/2023/06/f.elconfidencial.com_original_afd_6b2_0e5_afd63333b20e58854a11daff14f63f68f3b5.png");
            background-size: cover;
            background-repeat: no-repeat;
            width: 100%;
            height: 1500px;
        }
        a:hover{
            font-size: 20px;
            transition: font-size 0.4s ease;
        }
    </style>
</body>

</html>
