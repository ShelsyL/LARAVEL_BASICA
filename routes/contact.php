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


// CONTACT PAGE
// PATTERN: /contact
// CTRL: Contacts
// ACTION: form
Route::get('/contact', function () {
    return view('contact/index');
})->name('contact');
  // Route::get('/', [Home::class, 'index'])->name('home.index');
