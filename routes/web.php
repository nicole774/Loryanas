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
Route::get('article', [AdminController::class, 'article'])->middleware(['auth', 'admin'])->name('article');
Route::post('add_category', [AdminController::class, 'add_category'])->middleware(['auth', 'admin']);
route::get('delete_category/{id}' , [AdminController::class, 'delete_category']) ->middleware(['auth', 'admin'])->name('article');

route::get('edit_category/{id}' , [AdminController::class, 'edit_category']) ->
    middleware(['auth', 'admin']);

route::post('update_category/{id}' , [AdminController::class, 'update_category']) ->
    middleware(['auth', 'admin']);
