<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda Me - @yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/Estilos.css" >
    <link href="{{ asset('css/Estilos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
</head>
<body>
<body data-spy="scroll" data-target="#navbarNavAgenda" data-offset="0">
    <!-- Inicio Navbar -->
    <header class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" role="navigation">
        <a class="navbar-brand mb-0 h1" href="{{ url('/') }}">Agenda Me</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAgenda" aria-controls="navbarNavAgenda" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAgenda">
             <div class="navbar-nav mr-auto">
                <a class="nav-item nav-link " href="{{ url('/') }}">{{ __('inicio.Inicio') }}</a>
            @auth
                @include('parcial.dropmenu')
            @endauth
            </div>
            <div class="navbar-nav ml-auto">
            @guest
                @include('parcial.linknavbar')
            @else
                @include('parcial.authdropmenu')
            @endguest
             </div>

        </div>
    </header>
    
    <div class="container">
        @yield('content')
    </div>
    
    @include('parcial.br')
    
    @include('parcial.footer')

    @include('parcial.scripts')
</body>
</html>