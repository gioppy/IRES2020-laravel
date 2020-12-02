@extends('layout.app')

@section('content')
  <h1>Modifica il contatto</h1>

  <form action="{{ route('about-us.update', [$contact]) }}" method="POST">
    @csrf
    @method('put')
    @include('about._partials.form', ['contact' => $contact])
  </form>
@endsection
