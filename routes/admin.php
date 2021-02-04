<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPosts;
use App\Http\Controllers\AdminWorks;

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


/*
|--------------------------------------------------------------------------
| ROUTE ADMIN DES POSTS
|--------------------------------------------------------------------------
*/


// ROUTE DU DASHBOARD AVEC IDENTIFICATION (BACKOFFICE)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// ROUTE ADMIN POSTS
Route::get('/admin/posts', [AdminPosts::class, 'index'])->name('admin.posts.index');


// AJOUT D'UN POST: FORM
  // Route GET pour l'affichage du formulaire
 Route::get('/admin/posts/add/form', [AdminPosts::class, 'create'])->name('admin.posts.create');

// AJOUT D'UN POST: INSERT
  // Route POST pour le traitement du formulaire
Route::post('/admin/posts/add/insert', [AdminPosts::class, 'store'])->name('admin.posts.store');

// Route GET pour l'affichage du formulaire
Route::get('/admin/posts/{post}/edit', [AdminPosts::class, 'edit'])->name('admin.posts.edit');

// Route PUT pour le traitement du formulaire
Route::put('/admin/posts/{post}', [AdminPosts::class, 'update'])->name('admin.posts.update');

/*
|--------------------------------------------------------------------------
| ROUTE ADMIN DES WORKS
|--------------------------------------------------------------------------
*/


// ROUTE ADMIN WORKS
Route::get('/admin/works', [AdminWorks::class, 'index'])->name('admin.works.index');
