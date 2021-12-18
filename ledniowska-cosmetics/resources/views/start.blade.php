@extends('layout')

@section('content')
<!--strona-->
<div class="strona">
            @section('main-foto')
                <div class="start-foto foto"></div>
            @stop
            <main>
                <!--O Nas-->
                <div id="o-nas-odn" class="width100 o-nas-tlo">
                    <div class="width1 block o-nas">
                        <h2 class="h2-text">O Nas</h2>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, 
                            sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                        <div class="lista-onas">
                            <h2 class="h2-text h2-dlaczegomy">Dlaczego My?</h2>
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
                <div id="uslugi-odn" class="uslugi-tlo width100">
                    <div class="uslugi width1 block">
                        <h3 class="h3-uslugi h2-text">Nasze usługi</h3>
                        <ul class="lista-uslugi">
                            <li>
                                <div class="uslugi-ikona-tlo">
                                    <div class="uslugi-ikona-kosm uslugi-ikona"></div>
                                </div>
                                <h3>Kosmetyka</h3>
                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
                                <a href="/kosmetyka" class="btn-more">Zobacz więcej</a>
                            </li>
                            <li>
                                <div class="uslugi-ikona-tlo">
                                    <div class="uslugi-ikona-est uslugi-ikona"></div>
                                </div>
                                <h3>Medycyna estetyczna</h3>
                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
                                <a href="/medycyna" class="btn-more">Zobacz więcej</a>
                            </li>
                        </ul>
                    </div>
                    <div class="cennik-startowa-tlo">
                        <div class="cennik-startowa">
                            <a href="/cennik" class="cennik-btn">Sprawdź ceny</a>
                        </div>
                    </div>
                </div>
                <div class="void-img-tlo width100">
                    <div class="void-2-img"></div>
                </div>
                <h3 id="galeria-odn" class="h3-galeria h2-text">Galeria</h3>
                <div class="galeria-tlo width1 block">
                    <div class="galeria-main block">
                        <div class="galeria-foto-tlo">
                            <img class="galeria-foto" src="{{asset('/files/1.jpg')}}" alt="photo">
                        </div>
                        <div class="galeria-foto-tlo">
                            <img class="galeria-foto" src="{{asset('/files/2.jpg')}}" alt="photo">
                        </div>
                        <div class="galeria-foto-tlo">
                            <img class="galeria-foto" src="{{asset('/files/3.jpg')}}" alt="photo">
                        </div>
                        <div class="galeria-foto-tlo">
                            <img class="galeria-foto" src="{{asset('/files/4.jpg')}}" alt="photo">
                        </div>
                        <div class="galeria-foto-tlo">
                            <img class="galeria-foto" src="{{asset('/files/5.jpg')}}" alt="photo">
                        </div>
                        <div class="galeria-foto-tlo">
                            <img class="galeria-foto" src="{{asset('/files/6.jpg')}}" alt="photo">
                        </div>
                        <div class="galeria-foto-tlo">
                            <img class="galeria-foto" src="{{asset('/files/7.jpg')}}" alt="photo">
                        </div>
                    </div>
                    <div class="galeria block">
                        <div class="galeria-foto-tlo">
                            <img class="galeria-foto" src="{{asset('/files/1.jpg')}}" alt="photo">
                        </div>
                        <div class="galeria-foto-tlo">
                            <img class="galeria-foto" src="{{asset('/files/2.jpg')}}" alt="photo">
                        </div>
                        <div class="galeria-foto-tlo">
                            <img class="galeria-foto" src="{{asset('/files/3.jpg')}}" alt="photo">
                        </div>
                        <div class="galeria-foto-tlo">
                            <img class="galeria-foto" src="{{asset('/files/4.jpg')}}" alt="photo">
                        </div>
                        <div class="galeria-foto-tlo">
                            <img class="galeria-foto" src="{{asset('/files/5.jpg')}}" alt="photo">
                        </div>
                        <div class="galeria-foto-tlo">
                            <img class="galeria-foto" src="{{asset('/files/6.jpg')}}" alt="photo">
                        </div>
                        <div class="galeria-foto-tlo">
                            <img class="galeria-foto" src="{{asset('/files/7.jpg')}}" alt="photo">
                        </div>
                    </div>
                    <div class="rotator-buttons">
                        <button class="rotator-pause">Stop</button>
                        <button class="rotator-play">Play</button>
                    </div>
                </div>
                <div class="cennik-startowa-tlo">
                    <div class="cennik-startowa">
                        <a href="#" class="cennik-btn">Pełna galeria</a>
                    </div>
                </div>
            </main>
</div>
@stop