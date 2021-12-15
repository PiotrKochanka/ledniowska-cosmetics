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
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet">
        
        <!-- Scripts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
        
        <script src="{{ asset('js/script.js') }}" defer></script>
        <script src="{{ asset('js/slick.min.js') }}" defer></script>
        <title>Strona główna</title>
    </head>
    <body>
        @yield('content')
        <footer>
            <div class="stopka-kontener width100">
                <div class="stopka-info width1 block">
                    <div class="kolumna">
                        <div class="stopka-tresc">
                            <h3 class="h3-stopka">Lokalizacja</h3>
                        </div>
                    </div>
                    <div class="kolumna">
                        <div class="stopka-tresc">
                            <h3 class="h3-stopka">Kontakt</h3>
                        </div>
                    </div>
                </div>
                <div class="stopka">
                    <div class="autor"><span>Realizacja: </span><a href="#"><span>Piotr Kochanka</span></a></div>
                    <div class="marka"><span>@ Salon kosmetyczny Sekrety Piękna</span></div>
                </div>
            </div>
        </footer>
    </body>
</html>