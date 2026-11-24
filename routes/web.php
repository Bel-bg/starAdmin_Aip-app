<?php

use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


// 1. Zones clients
Route::get('/catalogue', [CatalogueController::class, 'index'])->name('catalogue.index');

// 2. Tous profils : profil Breeze
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return auth()->user()->isClient()
            ? redirect()->route('catalogue.index')
            : redirect()->route('home');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 3. ESPACE GESTION (Admin + Vendeur uniquement)
Route::middleware(['auth', 'role:admin,vendeur'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('home');

    Route::prefix('admin')->group(function () {
        Route::resource('clients', ClientController::class);
        Route::resource('commandes', CommandeController::class);
        Route::get('commandes/{id}/recu-pdf', [CommandeController::class, 'genererRecuPdf'])->name('commandes.recu-pdf');
        
        // Le vendeur peut consulter les produits
        Route::get('produits', [ProduitController::class, 'index'])->name('produits.index');
    });
});

// 4. ADMINISTRATION STRICT (Admin uniquement)
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::resource('categories', CategorieController::class);
    Route::get('produits/corbeille', [ProduitController::class, 'corbeille'])->name('produits.corbeille');
    Route::patch('produits/{id}/restore', [ProduitController::class, 'restore'])->name('produits.restore');
    Route::delete('produits/{id}/force-delete', [ProduitController::class, 'forceDelete'])->name('produits.force-delete');
    Route::resource('produits', ProduitController::class)->except(['index']);
    Route::get('utilisateurs', [UserController::class, 'index'])->name('users.index');
    Route::patch('utilisateurs/{id}/role', [UserController::class, 'updateRole'])->name('users.update-role');

});

require __DIR__ . '/auth.php';
