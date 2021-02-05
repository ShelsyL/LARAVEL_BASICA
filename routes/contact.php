<?php

use Illuminate\Support\Facades\Route;



// CONTACT PAGE
// PATTERN: /contact
// CTRL: Contacts
// ACTION: form
Route::get('/contact', function () {
    return view('contact/index');
})->name('contact');
