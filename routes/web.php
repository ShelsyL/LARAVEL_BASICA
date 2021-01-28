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
Route::get('/', function () {
    return view('home.index');
})->name('home');


// LISTE DES WORKS
// PATTERN: /portfolio
// CTRL: Works
// ACTION: index
Route::get('/portfolio', function () {
    return view('works.index');
})->name('portfolio');


// DETAILS D'UN WORK
// PATTERN: /portfolio/work/slug
// CTRL: Work
// ACTION: show
  Route::get('/portfolio/{work}/{slug}', [Works::class, 'show'])
       ->where('work', '[1-9][0-9]*')
       ->where('slug', '[a-z0-9][a-z0-9\-]*')
       ->name('works.show');


// LISTE DES POSTS
// PATTERN: /blog
// CTRL: Posts
// ACTION: index
Route::get('/blog', [Posts::class, 'index'])->name('blog');


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
