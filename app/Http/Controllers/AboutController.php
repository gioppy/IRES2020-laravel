<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class AboutController extends Controller {

  public function index() {
    // Esempio di Collection applicata a Eloquent
    /*$contacts = Contact::all()
      ->filter(function (Contact $contact) {
        return $contact->id != 2;
      })
      ->map(function (Contact $contact) {
        return [
          'id' => $contact->id,
          'nome' => strtoupper($contact->nome),
        ];
      });*/

    $contacts = Contact::all();

    return view('about.index', compact('contacts'));
  }

  public function show() {

    $users = [
      'Pippo',
      'Pluto',
      'Paperino',
      'Topolino',
    ];

    $title = 'About us.';

    // compact('users') == ['users' => $users]
    //return view('pages.about-us', compact('users', 'title'));
    return view('pages.about-us')->with(compact('users', 'title'));
  }

  public function store(AboutRequest $request) {
    $data = $request->validated();

    /*$contact = new Contact();
    $contact->nome = $data['nome'];
    $contact->email = $data['email'];
    $contact->messaggio = $data['messaggio'];
    $contact->save();*/

    // Mass Assignment
    /*$contact = Contact::create([
      'nome' => $data['nome'],
      'email' => $data['email'],
      'messaggio' => $data['messaggio'],
    ]);*/

    $contact = Contact::create($data);

    //return redirect()->back();
    return redirect()
      ->route('about-us.show')
      ->with('status', "Grazie {$contact->nome} per averci contattato.");
  }

  // passaggio di un parametro sulla route
  //public function showContact(int $id) {

  // route model binding
  public function showContact(Contact $contact) {
    // find ritorna null se la chiave non esiste
    //$contact = Contact::find($id);

    // findOrFail ritorna 404 se la riga non esiste
    //$contact = Contact::findOrFail($id);

    return view('about.show', compact('contact'));
  }

  public function edit(Contact $contact) {
    return view('about.edit', compact('contact'));
  }

  public function update(AboutRequest $request, Contact $contact) {
    $data = $request->validated();

    $contact->update($data);

    return redirect()->route('about-us.index');
  }
}
