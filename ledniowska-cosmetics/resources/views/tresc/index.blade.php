@extends('home')

@section('cms-content')
<!--Treść CMS-->
<div class="container register-tlo">
  <div class="table-responsive">
    <!--Dane z bazy danych-->
      <table class="table">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Pozycja na stronie</th>
              <th scope="col">Tytuł</th>
              <th scope="col">Skrót</th>
              <th scope="col">Akcje</th>
            </tr>
          </thead>
          <tbody>
          @foreach($content as $tresc)
            <tr>
              <th scope="row">{{ $tresc->id }}</th>
              <td>{{ $tresc->pozycja }}</td>
              <td>{{ $tresc->tytul }}</td>
              <td>{{ $tresc->skrot }}</td>
              <td>
                <a href='tresc/edytuj_tresc/{{ $tresc->id }}'><img src="{{ asset('graphic/edit.png') }}" width="30px" height="30px"></a>
              </td>
            </tr>
          @endforeach
          </tbody>
      </table>
  </div>
</div>
@endsection