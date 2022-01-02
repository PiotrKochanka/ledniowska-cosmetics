<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">

        <!--Styles-->
        <link rel="stylesheet" href="{{ asset('css/szkielet.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animacja.css') }}">
        <link rel="stylesheet" href="{{ asset('css/menu-gora.css') }}">
        <link rel="stylesheet" href="{{ asset('css/tresc.css') }}">
        <link rel="stylesheet" href="{{ asset('css/galeria.css') }}">
        <link rel="stylesheet" href="{{ asset('css/stopka.css') }}">
        <link rel="stylesheet" href="{{ asset('css/scroll.css')}}">
        <link rel="stylesheet" href="{{ asset('css/cennik.css')}}">
        <link rel="stylesheet" href="{{ asset('css/mobilne.css')}}">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        
        <!-- Scripts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
        
        <script src="{{ asset('js/script.js') }}" defer></script>
        <script src="{{ asset('js/slick.min.js') }}" defer></script>
        @yield('title')
    </head>
    <body>
        <nav id="menu-mobilne">
            <div class="menu-mobilne-pasek">
                <a class="menu-mobilne-logo" href="start,0"><img src="grafika/logo.png" alt="Logo" title="Powrót do strony głównej"></a>
                <div class="menu-mobile-button"><div class="hamburger"><span></span><span></span><span></span><span></span></div></div>
            </div>
            <div class="menu-mobilne-tekst">
                <div id="menu-gora-mobilne" class="width1 block">
                    <!--Menu-->
                    <ul class="menu-gora-1-poziom">
                        <li><a href="#o-nas-odn">O Nas</a></li>
                        <li><a href="#uslugi-odn">Usługi</a>
                            <ul class="menu-gora-2-poziom">
                                <li><a href="/kosmetyka">Kosmetyka</a></li>
                                <li><a href="/medycyna">Medycyna estetyczna</a></li>
                            </ul>
                        </li>
                        <li><a href="/cennik">Cennik</a></li>
                        <li><a href="#galeria-odn">Galeria</a></li>
                        <li><a href="/kontakt">Kontakt</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="strona">
        <header>
            <div class="animacja-kontener width100 block">
                @yield('main-foto')
                <div class="animacja-dane width1 block">
                    
                    <!--Logo-->
                    <div id="menu-gora-podstrona" class="width1 block">
                        <!--Menu-->
                        <ul class="menu-gora-1-poziom sticky">
                            <div class="logo-tlo logo-podstrona"><a href="/" class="logo"><img src="{{ asset('graphic/logo.png') }}" alt="logo"></a></div>
                            <li><a href="/#o-nas-odn">O Nas</a></li>
                            <li><a href="/#uslugi-odn">Usługi</a>
                                <ul class="menu-gora-2-poziom">
                                    <li><a href="/kosmetyka">Kosmetyka</a></li>
                                    <li><a href="/medycyna">Medycyna estetyczna</a></li>
                                </ul>
                            </li>
                            <li><a href="/cennik">Cennik</a></li>
                            <li><a href="/#galeria-odn">Galeria</a></li>
                            <li><a href="/kontakt">Kontakt</a></li>
                        </ul>
                    </div>
                </div>
                <div class='icon-scroll'></div>
            </div>
        </header>
        <!--content-->
        @yield('content')
        <!--footer-->
        <footer>
            <div class="stopka-kontener width100">
                <div class="stopka-info stopka-podstrona width1 block">
                    <div class="kolumna">
                        <div class="stopka-tresc">
                            <h3 class="h3-stopka">Lokalizacja</h3>
                            <div class="stopka-skrot">
                                <strong>Sekrety piękna</strong>
                                <p>Al. J. Pawła II 8/5</p>
                                <p>62-035 Luboń</p>
                            </div>
                        </div>
                    </div>
                    <div class="kolumna">
                        <div class="stopka-tresc">
                            <h3 class="h3-stopka">Godziny otwarcia</h3>
                        </div>
                    </div>
                    <div class="kolumna">
                        <div class="stopka-tresc">
                            <h3 class="h3-stopka">Kontakt</h3>
                            <p>e-mail: sekretypiekna8@gmail.com</p>
                            <p>tel: 511 560 987</p>
                            <div class="social-media">
                                <a href="#"></a>
                                <a href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="stopka-tlo width100">
                <div class="width1 block stopka-t">
                    <div class="stopka">
                        <div class="autor"><span>Realizacja: </span><a href="#"><span>Piotr Kochanka</span></a></div>
                        <div class="marka"><span>@ Salon kosmetyczny Sekrety Piękna</span></div>
                    </div>
                    @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Panel CMS</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Panel CMS</a>
                        @endauth
                    </div>
                    @endif
                </div>
            </div>
        </footer>
        <!--Przycisk to top-->
        <div class="button-top">
            <a href="#"></a>
        </div>
    </div>
    </body>
</html>