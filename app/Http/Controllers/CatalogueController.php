<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Produit;
use Illuminate\View\View;

class CatalogueController extends Controller
{
    public function index(): View
    {
        $categories = Category::withCount(['produits' => function ($query) {
            $query->where('stock', '>', 0);
        }])->orderBy('nom')->get();

        $produits = Produit::with('category')
            ->where('stock', '>', 0)
            ->orderByDesc('id')
            ->get();

        return view('catalogue.index', compact('produits', 'categories'));
    }
}
