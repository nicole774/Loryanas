<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebsiteController::class, 'website']);
Route::get('/acceuil', [WebsiteController::class, 'website'])->name('acceuil');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
Route::get('/checkout', [WebsiteController::class, 'checkout'])->name('checkout');
Route::get('/boutique', [WebsiteController::class, 'boutique'])->name('boutique');
Route::get('/about', [WebsiteController::class, 'about'])->name('apropos');
Route::get('/details-produit', [WebsiteController::class, 'detailsProduit'])->name('details-produit');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('admin/dashboard', [WebsiteController::class, 'index'])->middleware(['auth','admin'])->name('admin') ;

Route::get('category', [AdminController::class, 'category'])->middleware(['auth', 'admin'])->name('category');
Route::get('marque', [AdminController::class, 'marque'])->middleware(['auth', 'admin'])->name('marque');
Route::get('article', [AdminController::class, 'article'])->middleware(['auth', 'admin'])->name('article');
Route::post('add_category', [AdminController::class, 'add_category'])->middleware(['auth', 'admin'])->name('add_category');
Route::post('add_marque', [AdminController::class, 'add_marque'])->middleware(['auth', 'admin'])->name('add_marque');
route::get('delete_category/{id}' , [AdminController::class, 'delete_category']) ->middleware(['auth', 'admin'])->name('delete_category');
route::get('delete_marque/{id}' , [AdminController::class, 'delete_marque']) ->middleware(['auth', 'admin'])->name('delete_marque');

route::get('edit_category/{id}' , [AdminController::class, 'edit_category'])->middleware(['auth', 'admin'])->name('edit_category');
route::get('edit_marque/{id}' , [AdminController::class, 'edit_marque'])->middleware(['auth', 'admin'])->name('edit_marque');

route::post('update_category/{id}' , [AdminController::class, 'update_category'])->middleware(['auth', 'admin'])->name('update_category');
route::post('update_marque/{id}' , [AdminController::class, 'update_marque'])->middleware(['auth', 'admin'])->name('update_marque');
route::get('ajouter_article' , [AdminController::class, 'ajouter_article'])->middleware(['auth', 'admin'])->name('ajouter_article');
route::post('upload_article' , [AdminController::class, 'upload_article'])->middleware(['auth', 'admin'])->name('upload_article');
route::get('view_article' , [AdminController::class, 'view_article'])->middleware(['auth', 'admin'])->name('view_article');
route::get('delete_article/{id}' , [AdminController::class, 'delete_article'])->middleware(['auth', 'admin'])->name('delete_article');
route::get('update_article/{id}' , [AdminController::class, 'update_article'])->middleware(['auth', 'admin'])->name('update_article');
route::post('edit_article/{id}' , [AdminController::class, 'edit_article'])->middleware(['auth', 'admin'])->name('edit_article');
route::get('article_search' , [AdminController::class, 'article_search'])->middleware(['auth', 'admin'])->name('article_search');
