@extends('layouts.app')
@section('content')
<div class="grid-container">
    @foreach ($paquetes as $paquete)
        <div class="grid-item">
            <h1>{{ $paquete->nombre }}</h1>
        </div>
    @endforeach
</div>
<style>
    .grid-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        /* Tres columnas de igual ancho */
        grid-gap: 20px;
        /* Permitir que los elementos se envuelvan a la siguiente fila */
    }

    .grid-item {
        background-color: #f0f0f0;
        padding: 20px;
        border: 1px solid #ccc;
    }
</style>
@endsection
