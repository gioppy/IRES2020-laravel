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
Route::get('/about-us/all', [App\Http\Controllers\AboutController::class, 'index'])
  ->name('about-us.index')
  /*->middleware(['auth', 'verified'])*/;
Route::get('/about-us', [App\Http\Controllers\AboutController::class, 'show'])->name('about-us.show');
Route::post('/about-us', [App\Http\Controllers\AboutController::class, 'store'])->name('about-us');
// passaggio di un parametro sulla route
/*Route::get('/about-us/{id}', [App\Http\Controllers\AboutController::class, 'showContact'])->name('about-us.show-contact');*/

// Route model binding
Route::get('/about-us/{contact}', [App\Http\Controllers\AboutController::class, 'showContact'])->name('about-us.show-contact');

Route::get('/about-us/{contact}/edit', [App\Http\Controllers\AboutController::class, 'edit'])->name('about-us.edit');
Route::put('/about-us/{contact}', [App\Http\Controllers\AboutController::class, 'update'])->name('about-us.update');

Route::get('/about-us/{contact}/delete', [App\Http\Controllers\AboutController::class, 'delete'])->name('about-us.delete');
Route::delete('/about-us/{contact}', [App\Http\Controllers\AboutController::class, 'destroy'])->name('about-us.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/clocks', [App\Http\Controllers\ClockController::class, 'create'])->name('clocks.create');
Route::post('/clocks', [App\Http\Controllers\ClockController::class, 'store'])->name('clocks.store');
