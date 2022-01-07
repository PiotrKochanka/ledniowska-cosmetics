@extends('layout2')

@section('title')
    <!-- Tytuł -->
    <title>Kontakt</title>
@stop
@section('main-foto')
    <!-- Zdjęcie na stronie -->
    <h2 class="h2-text h2-podstrona">Kontakt</h2>
    <div class="kontakt-foto foto"></div>
@stop
@section('content')
    <!-- Kontent podstrony -->
    <div class="kontakt-tlo block width1">
        <div class="kontakt">
            <h3 class="h3-kontakt">Sekrety piękna</h3>
            <strong>Lokalizacja</strong>
            <span>Al. Jana Pawła II 8/5</span>
            <span>62-035 Luboń</span><br>
            <strong>Kontakt</strong>
            <span>e-mail: sekretypiękna8@gmail.com</span>
            <span>tel: 511 560 987</span>
            <strong>Godziny otwarcia</strong>
        </div>
        <div class="img-kontakt">

        </div>
    </div>
    <!-- Mapa dojazdu -->
    <div class="mapa-tlo width100">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18405.693280741758!2d16.871849453518216!3d52.342866830938526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47045005eadd9aed%3A0x3ad8338feae79046!2sStrefa%20Pi%C4%99kna!5e0!3m2!1spl!2spl!4v1639860371621!5m2!1spl!2spl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
@stop