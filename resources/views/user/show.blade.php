@extends('layouts.app2')
@section('title','Perfil')
@section('content')



<div class="container mt-3">
    <div class="row">
        <div class="col-4">
            <hr>
            <div>
                <a class="dropdown-item" href="{{ route('users.show', $user->id) }}">{{ __('inicio.Perfil') }}</a> 
            </div>
            <hr>
            <div>
                <a class="dropdown-item" href="{{ route('users.edit', $user->id) }}">Editar Perfil</a> 
            </div>   
            <hr>
        </div>
        <div class="col-8">
           <p><label>Nombre : </label> {{ $user->name }} </p>
           <p><label>Correo Electronico : </label> {{ $user->email }} </p>
           <p>
            <form action="{{ route('users.destroy',$user)}}" method="post">
                @csrf
                <input name="_method" type="hidden" value="DELETE">
                <input type="submit" class="btn btn-danger" value="Eliminar">
            </form>
           </p>
           <p class="text-muted"><small>Su cuenta se eliminara pasado un limito de tiempo</small></p>
        </div>
    </div>
        
</div> 


@endsection