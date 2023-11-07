@if (Auth::user()->rol == 'Administrador')
    @php($template = 'app')
@elseif(Auth::user()->rol == 'Empleado')
    @php($template = 'empleado')
@elseif(Auth::user()->rol == 'Cliente')
    @php($template = 'cliente')
@endif
@extends('layouts.' . $template)
{{-- -----------------------      ADMINISTRADOR     ----------------------------------- --}}
@if (Auth::user()->rol == 'Administrador')
    @section('content')
    <div class="container" style="border: 2px solid black; height: 1000px; width: 500px; margin-left: 5px;">
        <H1>
            Hello! {{ Auth::user()->name }}
        </H1>
        <ul class="list-group">
            <li class="list-group-item"><a href="">Hola</a></li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
            <li class="list-group-item">A fourth item</li>
            <li class="list-group-item">And a fifth one</li>
            <a href="{{ route('crear.index') }}">Crear paquete</a>
          </ul>
    </div>
    @endsection
{{-- ---------------------   EMPLEADO    ----------------------------------- --}}
    @elseif(Auth::user()->rol == 'Empleado')
    @section('content')
        <div class="container">
            <div class="container">
                <div class="card">
                    <div class="card-header">{{ __('Bienvenido') }} {{ Auth::user()->name }}</div>
                    <div class="card-body">
                        <a href="{{ route('crear.index') }}">Crear paquete</a>
                    </div>
                </div>
        </div>
        @endsection
{{-- -----------------------    CLIENTE    -------------------------------------------- --}}
    @elseif(Auth::user()->rol == 'Cliente')
    @section('content')
        @if(!empty($paquetes))
            @foreach ($paquetes as $paquete)
                <div>
                    <h2>{{ $paquete->nombre }}</h2>
                    <!-- Muestra otros detalles del paquete turístico -->
                </div>
            @endforeach
        @else
                <a href="">Consultar paquetes</a>
        @endif
    @endsection
@endif