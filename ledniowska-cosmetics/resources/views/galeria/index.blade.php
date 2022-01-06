@extends('home')

@section('cms-content')
<div class="container register-tlo">

  @if(session('status'))
    <h6 class="alert alert-success">{{ session('status') }}</h6>
  @endif

  <div class="container">
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
        @foreach($galery as $foto)
          <tr>
            <th scope="row">{{ $foto->id }}</th>
            <td>{{ $foto->name }}</td>
            <td><img src="{{ asset('photogallery/'.$foto->zdjecie) }}" width="70px" alt="Image"></td>
            <td>
              <a href='galeria/delete/{{ $foto->id }}'><img src="{{ asset('graphic/delete.png') }}" width="25px" height="25px"></a>
            </td>
          </tr>
        @endforeach
        </tbody>
    </table>
    <a href="galeria/dodaj_zdjecie" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Dodaj zdjęcie</a>
  </div>
</div>
@endsection