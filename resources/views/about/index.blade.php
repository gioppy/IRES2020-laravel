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
        <td>{{ $contact->id }}</td>
        <td>{{ $contact->nome }}</td>
        <td>
          <a href="{{ route('about-us.show-contact', [$contact]) }}">Show</a>
          <a href="{{ route('about-us.edit', [$contact]) }}">Edit</a>
          <a href="{{ route('about-us.delete', [$contact]) }}">Delete</a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection
