@extends('layouts.app')
@section('title','Inicio')
@section('content')


<div id="ini" class="mt-3">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('img/miku.jpg')}}" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Agenda Me</h5>
                <p>Sistema realizado en laravel y mysql con api de google Maps </p>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('img/satan.jpg')}}" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-dark">Intrucciones</h5>
                <p class="text-dark">Crear base de datos en msyql llamado agendas</p>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('img/mashu.jpg')}}" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-dark">Recordatorio</h5>
                <p class="text-dark">Corregir errores en el futuro?</p>
              </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</div>

@endsection