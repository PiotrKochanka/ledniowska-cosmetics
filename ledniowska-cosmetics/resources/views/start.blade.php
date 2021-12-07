@extends('layout')

@section('content')
<div class="strona">
            <header>
                <div class="animacja-kontener width100">
                    <div class="animacja-dane width1 block">
                        <!--Logo-->
                        <div class="logo-tlo"><a href="/" class="logo"><img src="{{ asset('graphic/logo.png') }}" alt="logo"></a></div>
                        <div id="menu-gora" class="width1 block">
                            <!--Menu-->
                            <ul class="menu-gora-1-poziom">
                                <li><a href="#">O Nas</a></li>
                                <li><a href="#">Usługi</a></li>
                                <li><a href="#">Cennik</a></li>
                                <li><a href="#">Galeria</a></li>
                                <li><a href="#">Kontakt</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class='icon-scroll'></div>
                </div>
            </header>
            <main>
                <!--O Nas-->
                <div class="width100">
                    <div class="width1 block o-nas">
                        <h2 class="h2-text">O Nas</h2>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, 
                            sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                        <div class="lista-onas">
                            <ul class="lista-onas-1">
                                <li>
                                    <h3>Indywidualne podejście</h3>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
                                </li>
                                <li>
                                    <h3>Naturalne kosmetyki</h3>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
                                </li>
                                <li>
                                    <h3>Doświadczenie</h3>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="void-img-tlo width100">
                    <div class="void-img"></div>
                </div>
                <div class="uslugi-tlo width100">
                    <div class="uslugi width1 block">

                    </div>
                </div>
            </main>
</div>
@stop