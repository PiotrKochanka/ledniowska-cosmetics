@extends('layout')

@section('title')
    <title>Strona główna</title>
@stop

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
                        @foreach($content as $tresc)
                            @if($tresc->pozycja == 'O-Nas')
                                <h2 class="h2-text">{{ $tresc->tytul }}</h2>
                                <span>
                                    {{ $tresc->skrot }}
                                </span>
                            @endif
                        @endforeach
                        <div class="lista-onas">
                            <h2 class="h2-text h2-dlaczegomy">Dlaczego My?</h2>
                            <ul class="lista-onas-1">
                                @foreach($content as $tresc)
                                    @if($tresc->pozycja == 'Dlaczego_my')
                                        <li>
                                            <h3>{{ $tresc->tytul }}</h3>
                                            <span>{{ $tresc->skrot }}</span>
                                        </li>
                                    @endif
                                @endforeach
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
                                @foreach($content as $tresc)
                                    @if($tresc->pozycja == 'Kosmetyka')
                                        <h3>{{ $tresc->tytul }}</h3>
                                        <span>{{ $tresc->skrot }}</span>
                                    @endif
                                @endforeach
                                <a href="/kosmetyka" class="btn-more">Zobacz więcej</a>
                            </li>
                            <li>
                                <div class="uslugi-ikona-tlo">
                                    <div class="uslugi-ikona-est uslugi-ikona"></div>
                                </div>
                                @foreach($content as $tresc)
                                    @if($tresc->pozycja == 'Medycyna')
                                        <h3>{{ $tresc->tytul }}</h3>
                                        <span>{{ $tresc->skrot }}</span>
                                    @endif
                                @endforeach
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
                        @foreach($galery as $foto)
                                <div class="galeria-foto-tlo">
                                    <img class="galeria-foto" src="{{asset('photogallery/'.$foto->zdjecie)}}" alt="photo">
                                </div>
                        @endforeach
                    </div>
                    <div class="galeria block">
                        @foreach($galery as $foto)
                                <div class="galeria-foto-tlo">
                                    <img class="galeria-foto" src="{{asset('photogallery/'.$foto->zdjecie)}}" alt="photo">
                                </div>
                        @endforeach
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