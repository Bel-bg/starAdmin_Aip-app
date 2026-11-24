<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategorieController extends Controller
{
    public function index(): View
    {
        $categories = Category::withCount('produits')
            ->orderByDesc('id')
            ->get();

        return view('categories.index', compact('categories'));
    }

    public function create(): View
    {
        return view('categories.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:50|unique:categories,nom',
        ]);

        Category::create($validated);

        return redirect()->route('categories.index')
            ->with('success', 'Catégorie ajoutée avec succès !');
    }

    public function edit(string $id): View|RedirectResponse
    {
        $categorie = Category::find($id);

        if (!$categorie) {
            return redirect()->route('categories.index')
                ->with('error', 'Catégorie introuvable.');
        }

        return view('categories.edit', compact('categorie'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $categorie = Category::findOrFail($id);

        $validated = $request->validate([
            'nom' => 'required|string|max:50|unique:categories,nom,' . $categorie->id,
        ]);

        $categorie->update($validated);

        return redirect()->route('categories.index')
            ->with('success', 'Catégorie mise à jour avec succès !');
    }

    public function destroy(string $id): RedirectResponse
    {
        $categorie = Category::findOrFail($id);
        $produitsLies = $categorie->produits()->count();

        if ($produitsLies > 0) {
            return redirect()->route('categories.index')
                ->withErrors(['Impossible de supprimer cette catégorie car elle contient encore ' . $produitsLies . ' produit(s).']);
        }

        $categorie->delete();

        return redirect()->route('categories.index')
            ->with('success', 'Catégorie supprimée avec succès.');
    }
}
