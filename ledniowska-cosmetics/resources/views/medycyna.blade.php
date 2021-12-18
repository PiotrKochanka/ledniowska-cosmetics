@extends('layout2')

@section('title')
    <title>medycyna estetyczna</title>
@stop
@section('main-foto')
    <h2 class="h2-text h2-podstrona">Medycyna estetyczna</h2>
    <div class="medycyna-foto foto"></div>
@stop
@section('content')
<div class="width100 kosmetyki-tlo">
    <div class="width1 block uslugi">
        <h2 class="h2-text">Medycyna estetyczna</h2>
        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            Excepteur sint occaecat cupidatat non proident, 
            sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
        <div class="lista-uslugi">
            <ul class="lista-uslugi-1">
                <li>
                    <img src="">
                    <h3>Kwas hialuronowy</h3>
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
                </li>
                <li>
                    <img src="">
                    <h3>Toksyna botulinowa</h3>
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
                </li>
                <li>
                    <img src="">
                    <h3>Plasna IQ</h3>
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
                </li>
            </ul>
        </div>
        <div class="cennik-startowa-tlo">
            <div class="cennik-startowa">
                <a href="/cennik" class="cennik-btn">Zobacz cennik</a>
            </div>
        </div>
    </div>
</div>
@stop