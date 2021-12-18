@extends('layout2')

@section('title')
    <title>Cennik</title>
@stop
@section('main-foto')
    <h2 class="h2-text h2-podstrona">Cennik</h2>
    <div class="cennik-foto foto"></div>
@stop
@section('content')
    <div class="cennik-tlo block width1">
        <ul class="cennik">
            <li>
                <button class="btn-cennik">Kosmetyka - cennik</button>
                <ul class="Kosmetyka-cennik">
                    <li><span>Pielęgnacja twarzy</span><span>10.00zł</span></li>
                    <li><span>Przekłuwanie uszu</span><span>10.00zł</span></li>
                    <li><span>Makijaż</span><span>10.00zł</span></li>
                </ul>
            </li>
            <li>
                <button class="btn-cennik">Medycyna estetyczna - cennik</button>
                <ul class="medycyna-cennik">
                    <li><span>Kwas hialuronowy</span><span>10.00zł</span></li>
                    <li><span>Toksyna botulinowa</span><span>10.00zł</span></li>
                    <li><span>Plasma IQ</span><span>10.00zł</span></li>
                </ul>
            </li>
        </ul>
    </div>
@stop