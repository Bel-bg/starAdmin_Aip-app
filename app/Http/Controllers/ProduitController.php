<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Produit;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProduitController extends Controller
{
    public function index(Request $request): View
    {
        $query = Produit::with('category');

        if ($request->filled('categorie')) {
            $query->where('categorie_id', $request->categorie);
        }

        $produits = $query->orderByDesc('id')->get();

        $produits->each(function ($produit) {
            $produit->categorie_nom = $produit->category->nom ?? 'Sans catégorie';
        });

        return view('produits.index', compact('produits'));
    }

    public function create(): View
    {
        $categories = Category::orderBy('nom')->get();

        return view('produits.create', compact('categories'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:50',
            'prix' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'categorie_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('produits', 'public');
        }

        Produit::create($validated);

        return redirect()->route('produits.index')
            ->with('success', 'Produit ajouté avec succès !');
    }

    public function edit(string $id): View|RedirectResponse
    {
        $produit = Produit::find($id);

        if (!$produit) {
            return redirect()->route('produits.index')
                ->with('error', 'Produit introuvable.');
        }

        $categories = Category::orderBy('nom')->get();

        return view('produits.edit', compact('produit', 'categories'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $produit = Produit::findOrFail($id);

        $validated = $request->validate([
            'nom' => 'required|string|max:50',
            'prix' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'categorie_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($produit->image && Storage::disk('public')->exists($produit->image)) {
                Storage::disk('public')->delete($produit->image);
            }

            $validated['image'] = $request->file('image')->store('produits', 'public');
        }

        $produit->update($validated);

        return redirect()->route('produits.index')
            ->with('success', 'Produit mis à jour avec succès !');
    }

        public function destroy(string $id): RedirectResponse
    {
        $produit = Produit::findOrFail($id);
        $produit->delete();

        return redirect()->route('produits.index')
            ->with('success', 'Produit supprimé avec succès !');
    }

    public function forceDelete(string $id): RedirectResponse
    {
        $produit = Produit::onlyTrashed()->findOrFail($id);

        $dansCommande = $produit->commandes()->count();

        if ($dansCommande > 0) {
            return redirect()->route('produits.corbeille')
                ->withErrors(['Suppression définitive impossible : ce produit fait partie de ' . $dansCommande . ' commande(s) archivée(s).']);
        }

        if ($produit->image && Storage::disk('public')->exists($produit->image)) {
            Storage::disk('public')->delete($produit->image);
        }

        $produit->forceDelete();

        return redirect()->route('produits.corbeille')
            ->with('success', 'Produit supprimé définitivement.');
    }

    public function corbeille(): View
    {
        $produits = Produit::onlyTrashed()
            ->with('category')
            ->orderByDesc('deleted_at')
            ->get();

        return view('produits.corbeille', compact('produits'));
    }

    public function restore(string $id): RedirectResponse
    {
        $produit = Produit::onlyTrashed()->findOrFail($id);
        $produit->restore();

        return redirect()->route('produits.corbeille')
            ->with('success', 'Produit restauré avec succès !');
    }

    

}
