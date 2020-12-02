<label>Nome</label>
<input type="text" name="nome" value="{{ !is_null($contact) ? $contact->nome : old('nome') }}" />

<label>Email</label>
<input type="email" name="email" value="{{ !is_null($contact) ? $contact->email : old('email') }}" />

<label>Messaggio</label>
<textarea name="messaggio">{{ !is_null($contact) ? $contact->messaggio : old('messaggio') }}</textarea>

<button type="submit">Invia</button>
