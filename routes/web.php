<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Works;
use App\Http\Controllers\Posts;

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
require __DIR__.'/auth.php';


// ROUTE PAR DEFAUT
// PATTERN: /
// CTRL: Works
// ACTION: index
Route::get('/', function () {
    return view('home.index');
});


// ROUTE DU DASHBOARD AVEC IDENTIFICATION
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// ROUTE DU TEMPLATE WELCOME DE LARAVEL
Route::get('/welcome', function () {
    return view('welcome');
});



// CONTACT PAGE
// PATTERN: /contact
// CTRL: Contacts
// ACTION: form
  // Route::get('/', [Home::class, 'index'])->name('home.index');
