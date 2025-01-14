<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\AuthController;

Route::get('/showProd', [ProduitController::class, 'index'])->name('afficher');
Route::get('/nouveau', [ProduitController::class, 'Nouveau_produit'])->name('nouveau');
Route::post('/creation', [ProduitController::class, 'Creation_produit'])->name('creationProd');
Route::get('/edition/{id}', [ProduitController::class, 'Edition_produit'])->name('edition');
Route::put('/edit/{id}', [ProduitController::class, 'Edit_produit'])->name('edit');
Route::delete('/delete/{id}', [ProduitController::class, 'Delete_produit'])->name('delete');
Route::get('/categorie/{id}', [CategorieController::class, 'ProduitsCategorie'])->name('categorie.show');
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
