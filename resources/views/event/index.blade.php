{{-- Se extiende a  layouts.app2 --}}
@extends('layouts.app2')
{{-- Se le asigna en nombre Eventos a la variable title en layouts.app2 --}}
@section('title','Eventos')
{{-- Asigna a la section content--}}
@section('content')
{{-- se incluye una subvista que tiene un alert --}}
@include('parcial.alert-success')
@include('errors.404')
<div class="container mt-3">
    <h3>Eventos</h3>
    @if(count($events)!=null)
        @foreach ($events as $event) 
            {{-- muestra los eventos --}}
            @include('event.parcial.articulo')  
        @endforeach

        <div class="pagination justify-content-center">
            {{-- se muentran los otros usuarios de la paginacion--}}
            {{ $events->links() }}
        </div>
    @else
        {{--  muentra una alerta si no hay eventos para el usuario --}}
        @include('event.parcial.empityalert')
    @endif
</div>

@endsection
{{-- cierra section --}}