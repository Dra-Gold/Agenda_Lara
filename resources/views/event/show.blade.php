@extends('layouts.app2')
@section('title','Mostrar Evento')
@section('content')


<div class="container mt-3">
    <div class="row">
        <div class="col-6 d-flex justify-content-end ">   
           <div class="card bg-light" style="width: 18rem;">
              <div class="card-header titulo"> {{ $evento->nombre }} </div>
              <div class="card-body">
                <form method="POST" action="">    
                    <div class="form-group">
                        <label>Fecha : {{ $evento->fecha }} </label>
                    </div>
                    <div class="form-group ">   
                        <label>Hora de Inicio : {{ $evento->horai }} </label>
                    </div>
                    <div class="form-group ">
                        <label>Hora de Termino : {{ $evento->horat }}</label>
                    </div>
                    <div class="form-group ">
                        <label>Lugar : </label>{{ $evento->direccion }}
                    </div>
                    <input type="hidden" name="lat" id="lat" value="{{ $evento->lat }}" >
                    <input type="hidden" name="lng" id="lng" value="{{ $evento->lng }}">
                    <div class="form-group">
                        <form action="{{ route('events.destroy',$evento)}}" method="post">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <input type="submit" class="btn btn-danger" value="Eliminar">
                        </form>
                        <a href="{{ route('events.edit',$evento) }}" class="btn btn-warning">Editar</a>
                    </div>
                  </form>   
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card text-white bg-secondary">
                <h5 class="card-header">Mapa</h5>
                <div class="card-body" >
                    <div class="mapu" id="map">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('parcial.scripshow');

@endsection