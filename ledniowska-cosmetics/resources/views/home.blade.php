@extends('layouts.app')

@section('content')
<div class="container-cms">
    <div class="menu-cms-tlo">
        <div class="logo-cms">
            <a href="/"><img src="http://localhost:8000/graphic/logo_baner.jpg" title="logo"></a>
        </div>
        <div class="loged">
            <span><b>Zalogowano: </b></span><span>{{ Auth::user()->name; }} </span><span>{{ Auth::user()->surname; }}</span>
        </div>
        <ul class="menu-cms">
            <li class="{{ Request::segment(1) === 'tresc' ? 'active' : null }}"><a href="{{ url('tresc') }}">Treść</a></li>
            <li class="{{ Request::segment(1) === 'uslugi' ? 'active' : null }}"><a href="{{ url('uslugi') }}">Usługi</a></li>
            <li class="{{ Request::segment(1) === 'cennik' ? 'active' : null }}"><a href="{{ url('cms-cennik') }}">Cennik</a></li>
            <li class="{{ Request::segment(1) === 'galeria' ? 'active' : null }}"><a href="{{ url('galeria') }}">Galeria</a></li>
            <li class="{{ Request::segment(1) === 'users' ? 'active' : null }}"><a href="{{ url('users') }}">Użytkownicy</a></li>
        </ul>
        <div class="logout-tlo" aria-labelledby="navbarDropdown">
            <a class="logout" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Wyloguj') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
    <div class="cms-tresc">
        @yield('cms-content')
    </div>
</div>
@endsection
