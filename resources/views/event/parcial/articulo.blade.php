<article class="alert alert-dark animated fadeInLeft">
    <div class="row ">
        <div class="col-4 ">
            <label class="titulo ">Nombre del evento : {{$event->nombre}}</label>
        </div>
        <div class="col-4 ">
            <label class="titulo">Lugar del evento : {{$event->direccion}}</label>
        </div>
        <div class="col-4">
            <label class="titulo">Eliminar :</label>
        </div>
    </div>
    <div class="row ">
        <div class="col-4">
            <label class="titulo">Fecha : {{$event->fecha}} </label>
        </div>
        <div class="col-4">
            <label class="titulo">Editar</label>
        </div>
        <div class="col-4 ">
            <label class="titulo">....mas</label>
        </div>
    </div>
</article>