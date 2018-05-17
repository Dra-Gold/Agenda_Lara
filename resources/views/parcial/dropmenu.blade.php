<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    {{ __('inicio.Agenda') }}
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ url('events') }}">{{ __('inicio.Eventos') }}</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ url('events/create') }}">{{ __('inicio.Eventos Create') }}</a>
    </div>
</li>