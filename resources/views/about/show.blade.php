@extends('layout.app')

@section('content')
  <h1>Informazioni di contatto</h1>

  <ul>
    <li><strong>Nome:</strong> {{ $contact->nome }}</li>
    <li><strong>Email:</strong> {{ $contact->email }}</li>
    <li><strong>Messaggio:</strong> {{ $contact->messaggio }}</li>
  </ul>
@endsection
