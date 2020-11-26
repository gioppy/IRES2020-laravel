<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return "Hello Laravel";
});

/*Route::get('/about-us', function () {
  return view('pages.about-us');
});*/

//Route::get('/about-us', 'App\Http\Controllers\AboutController@show');
Route::get('/about-us', [App\Http\Controllers\AboutController::class, 'show']);
Route::post('/about-us', [App\Http\Controllers\AboutController::class, 'store'])->name('about-us');
