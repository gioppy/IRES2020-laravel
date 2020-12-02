@extends('layout.app')

@section('content')
  <h1>Sei sicuro di voler cancellare il contatto {{ $contact->nome }}?</h1>

  <form action="{{ route('about-us.destroy', [$contact]) }}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">Elimina</button>
  </form>
@endsection
