<h1>{{ $title }}</h1>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid cumque delectus dolore esse exercitationem illum iure labore magnam magni necessitatibus nemo officiis porro provident, quasi qui quod vel voluptatum.</p>

{{--@if(count($users) > 0)
<ul>
  @foreach($users as $user)
    <li>{{ $user }}</li>
  @endforeach
</ul>
@else
  <p>Non ci sono utenti!</p>
@endif--}}

<ul>
  @forelse($users as $user)
    <li>{{ $user }}</li>
  @empty
    <li>Non ci sono utenti!</li>
  @endforelse
</ul>

<form action="{{ route('about-us') }}" method="POST">
  @csrf
  <label>Nome</label>
  <input type="text" />

  <label>email</label>
  <input type="email" />

  <label>Messaggio</label>
  <textarea></textarea>

  <button type="submit">Invia</button>
</form>
