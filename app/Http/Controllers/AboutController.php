<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class AboutController extends Controller {

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

    $contact = new Contact();
    $contact->nome = $data['nome'];
    $contact->email = $data['email'];
    $contact->messaggio = $data['messaggio'];
    $contact->save();

    return redirect()->back();
    //return redirect()->route('about-us.show');
  }
}
