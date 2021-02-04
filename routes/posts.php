<?php

use Illuminate\Support\Facades\Route;
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
