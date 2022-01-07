@extends('home')

@section('cms-content')
<!--Treść CMS-->
<div class="container register-tlo">

  <!--Komunikat o powodzeniu-->
  @if(session('status'))
    <h6 class="alert alert-success">{{ session('status') }}</h6>
  @endif

  <!--Wypisanie danych z bazy danych-->
  <div class="table-responsive">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">id usługi</th>
            <th scope="col">Usługa</th>
            <th scope="col">Zabieg</th>
            <th scope="col">Cena</th>
            <th scope="col">Akcje</th>
          </tr>
        </thead>
        <tbody>
        @foreach($ceny as $cena)
          <tr>
            <th scope="row">{{ $cena->id }}</th>
            <td>{{ $cena->id_uslugi }}</td>
            @foreach($service as $usluga)
                @if($usluga->id == $cena->id_uslugi)
                    <td>{{ $usluga->tytul }}</td>
                @endif
            @endforeach
            <td>{{ $cena->zabieg }}</td>
            <td>{{ $cena->cena }}<span>zł</span></td>
            <td>
              <a href='{{ url('cennik/edytuj_zabieg/'.$cena->id) }}'><img src="{{ asset('graphic/edit.png') }}" width="30px" height="30px"></a>
              <a href='cennik/delete/{{ $cena->id }}'><img src="{{ asset('graphic/delete.png') }}" width="25px" height="25px"></a>
            </td>
          </tr>
        @endforeach
        </tbody>
    </table>
  </div>
  <a href="cennik/dodaj_zabieg" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline btn btn-primary">Dodaj zabieg</a>
</div>
@endsection