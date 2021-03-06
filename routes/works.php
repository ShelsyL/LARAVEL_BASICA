<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Works;


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



// AJAX MORE POSTS
// PATTERN: /works/ajax/more
// CTRL: Works
// ACTION: more
Route::get('/works/ajax/more', [Works::class, 'more'])->name('works.ajax.more');
