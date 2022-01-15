@extends('home')

@section('cms-content')
<!--Treść CMS-->
<div class="container register-tlo">

  <!--Komunikat powodzenia-->
  @if(session('status'))
    <h6 class="alert alert-success">{{ session('status') }}</h6>
  @endif

  <!--Dane z bazy danych-->
  <div class="table-responsive">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nazwa</th>
            <th scope="col">Zdjęcie</th>
            <th scope="col">Akcje</th>
          </tr>
        </thead>
        <tbody>
        @foreach($news as $new)
          <tr>
            <th scope="row">{{ $new->id }}</th>
            <td>{{ $new->name }}</td>
            <td><a href="{{ asset('galery/'.$new->zdjecie) }}" data-fancybox="images" rel="ligthbox" class="fancybox thumbnail"><img src="{{ asset('galery/'.$new->zdjecie) }}" width="70px" alt="Image"></a></td>
            <td>
                <a href='{{ url('nowosci/edytuj_nowosc/'.$new->id) }}'><img src="{{ asset('graphic/edit.png') }}" width="30px" height="30px"></a>
                <a href='nowosci/delete/{{ $new->id }}'><img src="{{ asset('graphic/delete.png') }}" width="25px" height="25px"></a>
            </td>
          </tr>
        @endforeach
        </tbody>
    </table>
  </div>
  <a href="nowosci/dodaj_nowosc" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline btn btn-primary">Dodaj Aktualność</a>
</div>
@endsection