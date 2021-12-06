<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{ asset('css/szkielet.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animacja.css') }}">
        <link rel="stylesheet" href="{{ asset('css/menu-gora.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet">
        <title>Strona główna</title>
    </head>
    <body>
        <div class="strona">
            <header>
                <div class="animacja-kontener width100">
                    <div class="animacja-dane width1 block">
                        <a href="/" class="logo"><img src="{{ asset('graphic/logo.png') }}" alt="logo"></a>
                        <div id="menu-gora" class="width1 block">
                            <ul class="menu-gora-1-poziom">
                                <li><a href="#">O nas</a></li>
                                <li><a href="#">Usługi</a></li>
                                <li><a href="#">Cennik</a></li>
                                <li><a href="#">Galeria</a></li>
                                <li><a href="#">Kontakt</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </body>
</html>