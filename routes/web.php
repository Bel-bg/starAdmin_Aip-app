<?php

use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// 1. ZONES PUBLIQUES 

Route::get('/catalogue', [CatalogueController::class, 'index'])->name('catalogue.index');

Route::get('/eneam/{nom}', function ($nom) {
    return view('eneam', compact('nom'));
})->name('eneam');


// 2. ZONES PROTÉGÉES 
Route::middleware(['auth'])->group(function () {


    Route::get('/', [DashboardController::class, 'index'])->name('home');

    
    Route::get('/dashboard', function () {
        return redirect()->route('home');
    })->name('dashboard');

    
    Route::prefix('admin')->group(function () {
        Route::resource('categories', CategorieController::class);

        Route::get('produits/corbeille', [ProduitController::class, 'corbeille'])->name('produits.corbeille');
        Route::patch('produits/{id}/restore', [ProduitController::class, 'restore'])->name('produits.restore');
        Route::delete('produits/{id}/force-delete', [ProduitController::class, 'forceDelete'])->name('produits.force-delete');
        Route::resource('produits', ProduitController::class);

        Route::resource('clients', ClientController::class);
        Route::resource('commandes', CommandeController::class);
        Route::get('commandes/{id}/recu-pdf', [CommandeController::class, 'genererRecuPdf'])->name('commandes.recu-pdf');
    });

    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
