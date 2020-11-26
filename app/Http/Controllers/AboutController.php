<?php

namespace App\Http\Controllers;

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

  public function store(Request $request) {
    dd($request);
  }
}
