@extends('layouts.app2')
@section('title','Eventos')

@section('content')
@include('parcial.alert-success')

<div class="container mt-3">
    <h3>Eventos</h3>
    @if($events)
        @foreach ($events as $event) 
            @include('event.parcial.articulo')          
        @endforeach
    @else
        @include('event.parcial.empityalert')
    @endif
</div>

@endsection