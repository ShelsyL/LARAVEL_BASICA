<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPosts;
use App\Http\Controllers\AdminWorks;



// ROUTE DU DASHBOARD AVEC IDENTIFICATION (BACKOFFICE)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


/*
|--------------------------------------------------------------------------
| ROUTE ADMIN DES POSTS
|--------------------------------------------------------------------------
*/

// ROUTE ADMIN POSTS
Route::get('/admin/posts', [AdminPosts::class, 'index'])->middleware(['auth'])->name('admin.posts.index');


// AJOUT D'UN POST: FORM
  // Route GET pour l'affichage du formulaire
 Route::get('/admin/posts/add/form', [AdminPosts::class, 'create'])->middleware(['auth'])->name('admin.posts.create');

// AJOUT D'UN POST: INSERT
  // Route POST pour le traitement du formulaire
Route::post('/admin/posts/add/insert', [AdminPosts::class, 'store'])->middleware(['auth'])->name('admin.posts.store');

// Route GET pour l'affichage du formulaire
Route::get('/admin/posts/{post}/edit', [AdminPosts::class, 'edit'])->middleware(['auth'])->name('admin.posts.edit');

// Route PUT pour le traitement du formulaire
Route::put('/admin/posts/{post}', [AdminPosts::class, 'update'])->middleware(['auth'])->name('admin.posts.update');


// Route DELETE pour la suppression du tag
Route::delete('/admin/posts/{post}', [AdminPosts::class, 'destroy'])->middleware(['auth'])->name('admin.posts.destroy');



/*
|--------------------------------------------------------------------------
| ROUTE ADMIN DES WORKS
|--------------------------------------------------------------------------
*/

// ROUTE ADMIN WORKS
Route::get('/admin/works', [AdminWorks::class, 'index'])->middleware(['auth'])->name('admin.works.index');

// AJOUT D'UN POST: FORM
  // Route GET pour l'affichage du formulaire
 Route::get('/admin/works/add/form', [AdminWorks::class, 'create'])->middleware(['auth'])->name('admin.works.create');

// AJOUT D'UN POST: INSERT
  // Route POST pour le traitement du formulaire
Route::post('/admin/works/add/insert', [AdminWorks::class, 'store'])->middleware(['auth'])->name('admin.works.store');

// Route GET pour l'affichage du formulaire
Route::get('/admin/works/{work}/edit', [AdminWorks::class, 'edit'])->middleware(['auth'])->name('admin.works.edit');

// Route PUT pour le traitement du formulaire
Route::put('/admin/works/{work}', [AdminWorks::class, 'update'])->middleware(['auth'])->name('admin.works.update');


// Route DELETE pour la suppression du tag
Route::delete('/admin/works/{work}', [AdminWorks::class, 'destroy'])->middleware(['auth'])->name('admin.works.destroy');
