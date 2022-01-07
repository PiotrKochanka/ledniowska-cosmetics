@extends('home')

@section('cms-content')
<!--Treść CMS-->
<div class="container">
  <div class="table-responsive">
    <!--Dane z bazy danych-->
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">E-mail</th>
            <th scope="col">Imię</th>
            <th scope="col">Nazwisko</th>
            <th scope="col">Akcje</th>
          </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
          <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->email }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->surname }}</td>
            <td>
              <a href='users/edytuj_uzytkownika/{{ $user->id }}'><img src="{{ asset('graphic/edit.png') }}" width="30px" height="30px"></a>
              <a href='delete/{{ $user->id }}'><img src="{{ asset('graphic/delete.png') }}" width="25px" height="25px"></a>
            </td>
          </tr>
        @endforeach
        </tbody>
    </table>
  </div>
  <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline btn btn-primary">Dodaj konto</a>
</div>
@endsection