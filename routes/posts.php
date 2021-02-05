<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts;



// LISTE DES POSTS
// PATTERN: /blog
// CTRL: Posts
// ACTION: index
Route::get('/blog', [Posts::class, 'index'])->name('blog');



// DETAILS D'UN POST
// PATTERN: /blog/post/slug
// CTRL: Post
// ACTION: show
  Route::get('/blog/{post}/{slug}', [Posts::class, 'show'])
       ->where('work', '[1-9][0-9]*')
       ->where('slug', '[a-z0-9][a-z0-9\-]*')
       ->name('posts.show');
