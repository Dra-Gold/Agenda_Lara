@extends('layouts.app2')
@section('title','Crear Evento')
@section('content')

<div class="container mt-3">
      <div class="row">
        <div class="col-6 d-flex justify-content-end ">   
         <div class="card bg-light" style="width: 18rem;">
            <div class="card-header">Nuevo Evento</div>
            <div class="card-body">
              <form method="POST" action="{{ url('events') }}" >
              @csrf
              <input type="hidden" name="lat" id="latitud">
              <input type="hidden" name="lng" id="longitud">
                  <div class="form-group">
                        <div class="form-group">
                          <label for="NombreEvento">Nombre</label>
                          <input type="text" class="form-control" name="Nombre" required id="NombreEvento" placeholder="Nombre del Evento">
                        </div>
                   <div class="form-group">
                        <div class="form-group">
                          <label for="FechaEvento">Fecha</label>
                          <input type="date" class="form-control" name="Fecha" required id="FechaEvento">
                        </div>
                  </div>
                  <div class="form-group ">
                        <div class="form-group ">
                          <label for="HoraInicio">Hora de Inicio</label>
                          <input type="time" class="form-control" name="HoraI" required id="HoraInicio">
                        </div>
                  </div>
                  <div class="form-group ">
                        <div class="form-group ">
                          <label for="HoraTermino">Hora de  Termino</label>
                          <input type="time" class="form-control" name="HoraT" required id="HoraTermino">
                        </div>
                  </div>
                  <div class="form-group ">
                        <div class="form-group ">
                          <label for="FechaEvento">Lugar</label>
                          <input type="text" class="form-control"  name="Lugar" required id="pac-input">
                        </div>
                  </div>
                  <input type="submit" class="btn btn-primary" value="Crear Nuevo Evento">
                </form>   
              </div>
            </div>
         </div>
        </div> 
        <div class="col-6"><div id="map" class="map"></div></div>
      </div>
</div>

  @include('parcial.scriptsmaps')


@endsection