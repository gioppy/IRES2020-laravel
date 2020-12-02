@extends('layout.app')

@section('content')
  <h1>Modifica il contatto</h1>

  <form action="{{ route('about-us.update', [$contact]) }}" method="POST">
    @csrf
    @method('put')
    <label>Nome</label>
    <input type="text" name="nome" value="{{ $contact->nome }}" />

    <label>email</label>
    <input type="email" name="email" value="{{ $contact->email }}" />

    <label>Messaggio</label>
    <textarea name="messaggio">{{ $contact->messaggio }}</textarea>

    <button type="submit">Invia</button>
  </form>
@endsection
