@extends('layouts.app')
@section('content')
<div>
  <form action="{{ route('clientes.update', Auth::user()->id)}}" method="put">
    @csrf
    @if ($cli > 0)
      @forelse ($clientes as $cli)
        <div>
          <label for="">Codigo usuario</label>
          <input type="text" name="codigo" id="" value="{{ $cli->iduser }}">
        </div>
        <div>
          <label for="">Documento</label>
          <input type="text" name="identificacion" id="" value="{{ $cli->identificacion }}">
        </div>
        <div>
          <label for="">Nombre</label>
          <input type="text" name="nombre" id="" value="{{ $cli->nombre }}">
        </div>
        <div>
          <label for="">Apellido</label>
          <input type="text" name="apellido" id="" value="{{ $cli->apellido }}">
        </div>
        <div>
          <label for="">Telefono</label>
          <input type="text" name="telefono" id="" value="{{ $cli->telefono }}">
        </div>
        <div>
          <label for="">Email</label>
          <input type="text" name="correoelectronico" id="" value="{{ $cli->correoelectronico }}">
        </div>
      @empty
      @endforelse
      @else
      <div>
        <label for="">Codigo usuario</label>
        <input type="text" name="codigo" id="" value="{{ Auth::user()->id }}">
      </div>
      <div>
        <label for="">Documento</label>
        <input type="text" name="identificacion" id="" value="">
      </div>
      <div>
        <label for="">Nombre</label>
        <input type="text" name="nombre" id="" value="{{ Auth::user()->name }}">
      </div>
      <div>
        <label for="">Apellido</label>
        <input type="text" name="apellido" id="" value="{{ Auth::user()->name }}">
      </div>
      <div>
        <label for="">Telefono</label>
        <input type="text" name="telefono" id="" value="{{ Auth::user()->name }}">
      </div>
      <div>
        <label for="">Email</label>
        <input type="text" name="correoelectronico" id="" value="{{ Auth::user()->email }}">
      </div>
    @endif
    <button type="submit">Actualizar</button>
  </form>
</div>
@endsection