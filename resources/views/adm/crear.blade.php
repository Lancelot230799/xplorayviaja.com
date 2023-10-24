@extends('layouts.app')
@section('content')
<form action="{{ route('paquete.crear') }}"  class="row g-3" method="put">
    <div class="container" style="border: 2px solid black; height: 950px; width: 1000px">
        <div class="col-md-4" style="margin-bottom: 15px;">
            <label for="validationDefault01" class="form-label">Nombre del paquete</label>
            <input type="text" name="nombre" class="form-control" id="validationDefault01" value="" required>
          </div>
          <div class="col-md-4" style="margin-bottom: 15px;">
            <label for="validationDefault04" class="form-label">Tipo tiquet</label>
            <select class="form-select" name="tipotiquet" id="validationDefault04" required>
              <option selected disabled value="">Seleccionar...</option>
              <option>Primera clase</option>
              <option>Clase ejecutiva</option>
              <option>Clase comercial</option>
            </select>
          </div>
          <div class="mb-3" style="margin-bottom: 15px;">
            <label for="validationTextarea" class="form-label">Traslados</label>
            <textarea class="form-control" name="traslados" id="validationTextarea" placeholder="Descripcion" required></textarea>
            <div class="invalid-feedback">
            </div>
          </div>
          <div class="col-md-6" style="margin-bottom: 15px;">
            <label for="validationDefault03" class="form-label">Dias de alojamiento</label>
            <input type="input" name="diasdesalojamiento" class="form-control" id="validationDefault03" required>
          </div>
          <div class="col-md-3" style="margin-bottom: 15px;">
            <label for="validationDefault04" class="form-label">Alimentacion</label>
            <select class="form-select" name="alimentacion" id="validationDefault04" required>
              <option selected disabled value="">Seleccionar...</option>
              <option>Full</option>
              <option>Desayunos</option>
              <option>Almuerzos</option>
              <option>Comida/cena</option>
            </select>
          </div>
          <div class="col-md-3" style="margin-bottom: 15px;">
            <label for="validationDefault05" class="form-label">Equipaje (Kg)</label>
            <input type="number" name="capacidadequipaje" class="form-control" id="validationDefault05" required>
          </div>
          <div class="col-md-3" style="margin-bottom: 15px;">
            <label for="validationDefault04" class="form-label">Seguro medico</label>
            <select class="form-select" name="seguromedico" id="validationDefault04" required>
              <option selected disabled value="">Seleccionar...</option>
              <option>No aplica</option>
              <option>Si aplica</option>
            </select>
          </div>
          <div class="mb-3" style="margin-bottom: 15px;">
            <label for="validationTextarea" class="form-label">Tour descripcion (En caso de tour)</label>
            <textarea class="form-control" name="tour" id="validationTextarea" placeholder="Descripcion" required></textarea>
            <div class="invalid-feedback">
            </div>
          </div>
          <div class="col-md-3" style="margin-bottom: 15px;">
            <label for="validationDefault05" class="form-label">Foto promocional</label>
            <input type="file" name="fotopaquete" class="form-control" id="validationDefault05" required>
          </div>
          <div class="col-md-3" style="margin-bottom: 15px;">
            <label for="validationDefault05" class="form-label">Valor</label>
            <input type="number" name="valor" class="form-control" id="validationDefault05" required>
          </div>
          <div class="col-12" style="margin-bottom: 15px;">
            <button class="btn btn-primary" type="submit">Crear y publicar</button>
          </div>
    </div>
  </form>
@endsection