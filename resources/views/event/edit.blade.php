@extends('layouts.app2')
@section('title','Editar Evento')
@section('content')

<div class="container mt-3">
      <div class="row">
        <div class="col-6 d-flex justify-content-end ">   
         <div class="card bg-light" style="width: 18rem;">
            <div class="card-header">Editar Evento</div>
            <div class="card-body">
              <form method="POST" action="{{ route('events.update',$evento) }}" >
              @csrf
              <input name="_method" type="hidden" value="PATCH">
                  <div class="form-group">
                        <div class="form-group">
                          <label for="NombreEvento">Nombre</label>
                          <input type="text" class="form-control" value="{{ $evento->nombre }}" name="Nombre" required id="NombreEvento" placeholder="Nombre del Evento">
                        </div>
                   <div class="form-group">
                        <div class="form-group">
                          <label for="FechaEvento">Fecha</label>
                          <input type="date" class="form-control" value="{{ $evento->fecha }}" name="Fecha" required id="FechaEvento">
                        </div>
                  </div>
                  <div class="form-group ">
                        <div class="form-group ">
                          <label for="HoraInicio">Hora de Inicio</label>
                          <input type="time" class="form-control" value="{{ $evento->horai }}" name="HoraI" required id="HoraInicio">
                        </div>
                  </div>
                  <div class="form-group ">
                        <div class="form-group ">
                          <label for="HoraTermino">Hora de  Termino</label>
                          <input type="time" class="form-control" value="{{ $evento->horat }}" name="HoraT" required id="HoraTermino">
                        </div>
                  </div>
                  <div class="form-group ">
                        <div class="form-group ">
                          <label for="FechaEvento">Lugar</label>
                          <input type="text" class="form-control"  value="{{ $evento->direccion }}" name="Lugar" required id="buscador">
                        </div>
                  </div>
                  <input type="hidden" name="lat" id="lat" value="{{ $evento->lat }}" >
                  <input type="hidden" name="lng" id="lng" value="{{ $evento->lng }}">
                  <input type="submit" class="btn btn-primary" value="Editar">
                </form>   
              </div>
            </div>
         </div>
        </div> 
        <div class="col-6">
            <div class="card text-white bg-secondary">
                <h5 class="card-header">Mapa</h5>
                <div class="card-body" >
                <div id="map" class="mapu"></div>
              </div>
            </div>
        </div>
      </div>
</div>

    @include('parcial.scripedit');

@endsection