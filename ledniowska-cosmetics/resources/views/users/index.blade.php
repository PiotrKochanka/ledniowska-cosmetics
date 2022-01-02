@extends('home')

@section('cms-content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">E-mail</th>
        <th scope="col">Imię</th>
        <th scope="col">Nazwisko</th>
        <th scope="col">Ostatnie logowanie</th>
      </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
      <tr>
        <th scope="row">{{ $user->id }}</th>
        <td>{{ $user->email }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->surname }}</td>
        <td>{{ $user->created_at }}</td>
      </tr>
    @endforeach
    </tbody>
</table>
<a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
@endsection