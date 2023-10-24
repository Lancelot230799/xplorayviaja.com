<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Medios de pago</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>
</head>
<body class="antialiased">
        {{-- -----------------------NAVBAR --------------------------- --}}
        <nav class="navbar navbar-expand-lg" style="background-color: #fb7500;">
            <div class="container-fluid" style="background-color: #fb7500;">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="logo" src="http://exploraviajesporelmundo.com/images/logo.png" alt="xplorayviaja" width="90" height="90">
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
                            <a class="nav-link" href="#">Contactos</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        @if (Route::has('login'))
                            <div class="navbar-nav">
                                @auth
                                    <a class="nav-link active " href="{{ url('/home') }}">
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
<div class="">
    <img src="http://exploraviajesporelmundo.com/images/logo.png" alt="xplorayviaja" width="90" height="90" style="margin-left: 42%;">
        <div class="container text-center">
            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
              <div class="col">
                <div class="p-3">
                    <a href="#"><img src="https://seeklogo.com/images/E/efecty-colombia-logo-C4C6532B80-seeklogo.com.png" alt="efecty"></a>
                </div>
              </div>
              <div class="col">
                <div class="p-3">
                    <a href=""><img src="https://cdn.colombia.com/sdi/2023/06/22/ceo-de-nequi-confirma-que-la-aplicacion-no-desaparecera-1161244.jpg" alt="Nequi"></a>
                </div>
              </div>
              <div class="col">
                <div class="p-3">
                    <a href=""><img src="data:image/png;base64,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" alt="daviplata"></a>
                </div>
              </div>
              <div class="col">
                <div class="p-3">
                    <a href=""><img src="https://elpereirano.com/wp-content/uploads/2023/04/bancolombia.jpeg" alt="ahorroalamano"></a>
                </div>
              </div>
              <div class="col">
                <div class="p-3">
                    <a href=""><img src="data:image/png;base64,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" alt=""></a>
                </div>
              </div>
              <div class="col">
                <div class="p-3">
                    <a href=""><img src="data:image/jpeg;base64,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" alt="addi"></a>
                </div>
              </div>
              <div class="col">
                <div class="p-3">
                    <a href=""><img src="https://www.confianza.com.co/sites/default/files/2019-04/Logo%20VIA%20Baloto.jpg" alt="baloto"></a>
                </div>
              </div>
              <div class="col">
                <div class="p-3">
                    <a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaF61lW6SnICNgbhuYgupGPP9zcYnQv5N3FVbtjAhqbtkWXkwq7b-rroqEBkxVM6-2N-U&usqp=CAU" alt="jer"></a>
                </div>
              </div>
              <div class="col">
                <div class="p-3">
                    <a href=""><img src="https://www.consumoteca.com/wp-content/uploads/Logo-PayPal-jpg.webp" alt="paypal"></a>
                </div>
              </div>
              <div class="col">
                <div class="p-3">
                    <a href=""><img src="data:image/png;base64,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" alt="westerunion"></a>
                </div>
              </div>
            </div>
          </div>
</div>
</body>
<style>
    body {
        background-image: url('https://colombianabroad.com/wp-content/uploads/vivir-usa.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
        margin: 0;
        padding: 0;
    }
    a:hover{
        font-size: 20px;
        transition: font-size 0.4s ease;
    }
    .logo{
        height: 90px;
        width: 90px;
    }
    img{
        height: 200px;
        width:200px;
        border-radius: 50%;
    }
</style>
</html>