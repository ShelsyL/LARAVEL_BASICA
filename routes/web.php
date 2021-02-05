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
require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/works.php';
require __DIR__.'/posts.php';
require __DIR__.'/contact.php';


// ROUTE PAR DEFAUT
// PATTERN: /
Route::get('/', function () {
    return view('home.index');
})->name('home');


// ROUTE DU TEMPLATE WELCOME DE LARAVEL
Route::get('/welcome', function () {
    return view('welcome');
});
