<article class="alert alert-dark animated fadeInLeft">
    <div class="row ">
        <div class="col-6">
            <label class="titulo ">Nombre del evento : {{$event->nombre}}</label>
        </div>
        <div class="col-6">
            <label class="titulo">Lugar del evento : {{$event->direccion}}</label>
        </div>
    </div>
    <div class="row ">
        <div class="col-6">
            <label class="titulo">Fecha : {{$event->fecha}} </label>
        </div>
        <div class="col-6 arti-link">
            <a href="{{action('EventController@show', $event)}}" class="btn btn-primary">Ver mas</a>
        </div>
    </div>
</article>

