@extends('layout2')

@section('title')
    <!-- Tytuł -->
    <title>kosmetyka</title>
@stop
@section('main-foto')
    <!-- Zdjęcie na stronie -->
    <h2 class="h2-text h2-podstrona">Galeria</h2>
    <div class="galeria-foto foto"></div>
@stop
@section('content')
    <!-- Kontent podstrony -->
    <div class="width100 galeria-lista-tlo">
        <div class="width1 block uslugi">
            <div class="lista-galeria-tlo">
                <ul class="lista-galeria">
                    @foreach($galeria as $foto)
                        <li>
                            <a href="{{ asset('photogallery/'.$foto->zdjecie) }}" data-fancybox="images" rel="ligthbox" class="fancybox thumbnail">
                                <img src="{{ asset('photogallery/'.$foto->zdjecie) }}" alt="Image">
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@stop