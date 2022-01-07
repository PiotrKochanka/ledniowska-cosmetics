@extends('home')

@section('cms-content')
<!--Treść CMS-->
<div class="container register-tlo">

  <!--Komunikat o powodzeniu-->
  @if(session('status'))
    <h6 class="alert alert-success">{{ session('status') }}</h6>
  @endif

  <div class="table-responsive">
    <!--Dane z bazy danych-->
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Kategoria</th>
            <th scope="col">Zdjęcie</th>
            <th scope="col">Tytuł</th>
            <th scope="col">Skrót</th>
            <th scope="col">Akcje</th>
          </tr>
        </thead>
        <tbody>
        @foreach($uslugi as $usluga)
          <tr>
            <th scope="row">{{ $usluga->id }}</th>
            <td>{{ $usluga->kategoria }}</td>
            <td><a href="{{ asset('galery/'.$usluga->zdjecie) }}" data-fancybox="images" rel="ligthbox" class="fancybox thumbnail"><img src="{{ asset('galery/'.$usluga->zdjecie) }}" class="img-responsive" width="70px" alt="Image"></a></td>
            <td>{{ $usluga->tytul }}</td>
            <td>{{ $usluga->skrot }}</td>
            <td>
              <a href='{{ url('uslugi/edytuj_usluge/'.$usluga->id) }}'><img src="{{ asset('graphic/edit.png') }}" width="30px" height="30px"></a>
              <a href='delete/uslugi/{{ $usluga->id }}'><img src="{{ asset('graphic/delete.png') }}" width="25px" height="25px"></a>
            </td>
          </tr>
        @endforeach
        </tbody>
    </table>
  </div>
  <a href="uslugi/dodaj_usluge" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline btn btn-primary">Dodaj uslugę</a>
</div>
@endsection