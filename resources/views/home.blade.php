@extends('layouts.app2')
@section('title','Bienvenido')
@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('inicio.Messageho') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('inicio.Logmessage') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
