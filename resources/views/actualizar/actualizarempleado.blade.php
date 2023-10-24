@extends('layouts.app')
@section('content')
<div>
  <form action="{{ route('empleado.update', Auth::user()->id)}}" method="put">
    @csrf
    @if ( $emp > 0)
      @forelse ( $empleado as $emp )
        <div>
          <label for="">Codigo usuario</label>
          <input type="text" name="codigo" id="" value="{{ $emp->idusers }}">
        </div>
        <div>
          <label for="">Documento</label>
          <input type="text" name="identificacion" id="" value="{{ $emp->identificacion }}">
        </div>
        <div>
          <label for="">Nombre</label>
          <input type="text" name="nombre" id="" value="{{ $emp->nombre }}">
        </div>
        <div>
          <label for="">Apellido</label>
          <input type="text" name="apellido" id="" value="{{ $emp->apellido }}">
        </div>
        <div>
          <label for="">Telefono</label>
          <input type="text" name="telefono" id="" value="{{ $emp->telefono }}">
        </div>
        <div>
          <label for="">Email</label>
          <input type="text" name="correoelectronico" id="" value="{{ $emp->correoelectronico }}">
        </div>
        <div>
          <label for="">Cargo actual</label>
          <input type="text" name="cargo" id="" value="{{ $emp->cargo }}">
        </div>
        <div>
          <label for="">Fecha de ingreso</label>
          <input type="date" name="fechaingreso" id="" value="{{ $emp->fechaingreso }}">
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
      <div>
        <label for="">Cargo actual</label>
        <input type="text" name="cargo" id="" value="{{ Auth::user()->name }}">
      </div>
      <div>
        <label for="">Fecha de ingreso</label>
        <input type="date" name="fechaingreso" id="" value="{{ Auth::user()->name }}">
      </div>
    @endif
    <button type="submit">Actualizar</button>
  </form>
</div>
@endsection