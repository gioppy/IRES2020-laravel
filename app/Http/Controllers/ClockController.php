<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClockRequest;
use App\Mail\ClockMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ClockController extends Controller {

  public function __construct() {
    $this->middleware(['auth']);
  }

  public function create() {
    $profile = auth()->user()->profile;
    return view('clocks.create', compact('profile'));
  }

  public function store(ClockRequest $request) {
    $data = $request->validated();

    auth()->user()
      ->profile
      ->clocks()
      ->create($data);

    Mail::send(new ClockMail());

    return redirect()->route('clocks.create');
  }
}
