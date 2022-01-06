@extends('layout2')

@section('title')
    <title>kosmetyka</title>
@stop
@section('main-foto')
    <h2 class="h2-text h2-podstrona">Kosmetyka</h2>
    <div class="kosmetyka-foto foto"></div>
@stop
@section('content')
<div class="width100 kosmetyki-tlo">
    <div class="width1 block uslugi">
        @foreach($content as $tresc)
            @if($tresc->pozycja == 'Kosmetyka')
                <h2 class="h2-text">{{ $tresc->tytul }}</h2>
                <span>{{ $tresc->skrot }}</span>
            @endif
        @endforeach
        <div class="lista-uslugi">
                    <ul class="lista-uslugi-1">
                        @foreach($uslugi as $usluga)
                            @if($usluga->kategoria == 'Kosmetyka')
                                <li>
                                    <img src="galery/{{ $usluga->zdjecie }}">
                                    <h3>{{ $usluga->tytul }}</h3>
                                    <span>{{ $usluga->skrot }}</span>
                                </li>
                            @endif
                        @endforeach
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