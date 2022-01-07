@extends('layout2')

@section('title')
    <!-- Tytuł -->
    <title>Cennik</title>
@stop
@section('main-foto')
    <!-- Zdjęcie na stronie -->
    <h2 class="h2-text h2-podstrona">Cennik</h2>
    <div class="cennik-foto foto"></div>
@stop
@section('content')
    <!-- Kontent podstrony -->
    <div class="cennik-tlo block width1">
        <ul class="cennik-list">
            @foreach($uslugi->unique('kategoria') as $usluga)
                @if($usluga->kategoria == 'Kosmetyka')
                    <li>
                        <h2 class="h2-text">{{ $usluga->kategoria }}</h2>
                        <ul class="cennik">
                            @foreach($uslugi as $usluga)
                                @if($usluga->kategoria == 'Kosmetyka')
                                    <li>
                                        <button class="btn-cennik">{{ $usluga->tytul }}</button>
                                        <ul>
                                            @foreach($ceny as $cena)
                                                @if($cena->id_uslugi == $usluga->id)
                                                    <li><span>{{ $cena->zabieg }}</span><span>{{ $cena->cena }}zł</span></li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li>
                        <h2 class="h2-text">{{ $usluga->kategoria }}</h2>
                        <ul class="cennik">
                            @foreach($uslugi as $usluga)
                                @if($usluga->kategoria == 'Medycyna estetyczna')
                                    <li>
                                        <button class="btn-cennik">{{ $usluga->tytul }}</button>
                                        <ul>
                                            @foreach($ceny as $cena)
                                                @if($cena->id_uslugi == $usluga->id)
                                                    <li><span>{{ $cena->zabieg }}</span><span>{{ $cena->cena }}zł</span></li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
@stop