@extends('layout.app')

@section('content')
  <h1>Notifica della mancata timbratura</h1>

  <p>Nome e cognome: {{ $profile->fullname }}</p>

  <form action="{{ route('clocks.store') }}" method="POST">
    @csrf

    <div>
      <label for="clock_at">Data e ora</label>
      <input type="datetime-local" id="clock_at" name="clock_at" value="{{ old('clock_at') }}" />
    </div>

    <div>
      <label for="missed">Missed clock</label>
      <select name="missed" id="missed">
        <option value="1">{{ __('In') }}</option>
        <option value="0">{{ __('Out') }}</option>
      </select>
    </div>

    <div>
      <button type="submit">Salva</button>
    </div>
  </form>
@endsection
