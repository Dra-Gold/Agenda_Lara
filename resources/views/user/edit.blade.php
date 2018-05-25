@extends('layouts.app2')
@section('title','Editar Perfil')
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
            <form action="{{ route('users.update',$user)}}" method="post">
           <p><label>Nombre  </label> <input type="text" class="form-control" value="{{ $user->name }}" name="name" required > </p>
           <p><label>Correo Electronico  </label><input type="email" class="form-control" value="{{ $user->email }}" name="email" required > </p>
           <p>
                @csrf
                <input name="_method" type="hidden" value="PUT">
                <input type="submit" class="btn btn-warning" value="Editar Usuario">
            </form>
           </p>
        </div>
    </div>
        
</div> 


@endsection