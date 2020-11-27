@extends('layout.app')

@section('content')
  <h1>Lista contatti</h1>

  <table>
    <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th></th>
    </tr>
    </thead>

    <tbody>
    @foreach($contacts as $contact)
      <tr>
        <td>{{ $contact['id'] }}</td>
        <td>{{ $contact['nome'] }}</td>
        <td></td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection
