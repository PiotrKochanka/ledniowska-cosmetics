@extends('layouts.app')

@section('content')
<div class="container-cms">
    <div class="menu-cms-tlo">
        <div class="logo-cms">
            <a href="/"><img src="http://localhost:8000/graphic/logo_baner.jpg" title="logo"></a>
        </div>
        <ul class="menu-cms">
            <li class="{{ Request::segment(1) === 'uslugi' ? 'active' : null }}"><a href="{{ url('/cms-uslugi') }}">Usługi</a></li>
            <li class="{{ Request::segment(1) === 'cennik' ? 'active' : null }}"><a href="{{ url('/cms-cennik') }}">Cennik</a></li>
            {{-- <li class="{{ Request::segment(1) === 'users' ? 'active' : null }}"><a href="{{ url('/users') }}">Użytkownicy</a></li> --}}
            <li class="{{ Request::segment(1) === 'users' ? 'active' : null }}"><a href="{{ url('/home/users') }}">Użytkownicy</a></li>
        </ul>
        <div class="logout-tlo" aria-labelledby="navbarDropdown">
            <a class="logout" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
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
