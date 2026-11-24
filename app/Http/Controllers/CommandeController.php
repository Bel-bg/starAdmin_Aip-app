<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Commande;
use App\Models\Produit;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Barryvdh\DomPDF\Facade\Pdf;


class CommandeController extends Controller
{
    public function index(): View
    {
        $commandes = Commande::with('client')
            ->withSum('produits as total_articles', 'commande_produit.quantite')
            ->orderByDesc('id')
            ->paginate(20);

        $commandes->getCollection()->each(function ($commande) {
            $commande->client_nom = $commande->client->nom ?? 'Client inconnu';
            $commande->total_articles = $commande->total_articles ?? 0;
        });

        return view('commandes.index', compact('commandes'));
    }

    public function create(): View
    {
        $clients = Client::orderBy('nom')->get();
        $produits = Produit::where('stock', '>', 0)->orderBy('nom')->get();

        return view('commandes.create', compact('clients', 'produits'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'client_id' => 'required|exists:clients,id',
            'date_commande' => 'required|date',
            'produits' => 'required|array|min:1',
            'produits.*' => 'required|exists:produits,id|distinct',
            'quantites' => 'required|array|min:1',
            'quantites.*' => 'required|integer|min:1',
        ], [
            'produits.*.distinct' => 'Vous avez sélectionné le même produit deux fois. Augmentez plutôt sa quantité.',
        ]);

        try {
            DB::transaction(function () use ($request) {
                $montantTotal = 0;
                $pivotData = [];

                foreach ($request->produits as $index => $produitId) {
                    $quantite = (int) $request->quantites[$index];
                    $produit = Produit::lockForUpdate()->findOrFail($produitId);

                    if ($produit->stock < $quantite) {
                        throw new \Exception("Stock insuffisant pour « {$produit->nom} » (disponible : {$produit->stock}).");
                    }

                    $montantTotal += $produit->prix * $quantite;

                    $pivotData[$produit->id] = [
                        'quantite' => $quantite,
                        'prix_unitaire' => $produit->prix,
                    ];

                    $produit->decrement('stock', $quantite);
                }

                $commande = Commande::create([
                    'client_id' => $request->client_id,
                    'date_commande' => $request->date_commande,
                    'montant' => $montantTotal,
                ]);

                $commande->produits()->attach($pivotData);
            });

            return redirect()->route('commandes.index')
                ->with('success', 'Commande enregistrée avec succès !');

        } catch (\Exception $e) {
            return back()->withInput()->withErrors([$e->getMessage()]);
        }
    }

    public function show(string $id): View|RedirectResponse
    {
        // Commande::with('produits') charge déjà les produits en corbeille grâce au ->withTrashed() dans ton modèle
        $commande = Commande::with(['client', 'produits'])->find($id);

        if (!$commande) {
            return redirect()->route('commandes.index')
                ->withErrors(['Commande introuvable.']);
        }

        $commande->client_nom = $commande->client->nom ?? 'Client inconnu';
        $commande->client_email = $commande->client->email ?? '-';

        $details = $commande->produits->map(function ($produit) {
            return (object) [
                'produit_nom' => $produit->nom,
                'quantite' => $produit->pivot->quantite,
                'prix_unitaire' => $produit->pivot->prix_unitaire,
            ];
        });

        return view('commandes.show', compact('commande', 'details'));
    }

    public function edit(string $id): View|RedirectResponse
    {
        $commande = Commande::with(['client', 'produits'])->find($id);

        if (!$commande) {
            return redirect()->route('commandes.index')
                ->withErrors(['Commande introuvable.']);
        }

        $clients = Client::orderBy('nom')->get();

        // Charge les produits en stock + ceux déjà présents dans cette commande (même avec stock = 0)
        $idsDansCommande = $commande->produits->pluck('id')->toArray();
        $produits = Produit::where('stock', '>', 0)
            ->orWhereIn('id', $idsDansCommande)
            ->orderBy('nom')
            ->get();

        return view('commandes.edit', compact('commande', 'clients', 'produits'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $commande = Commande::with('produits')->findOrFail($id);

        $request->validate([
            'client_id' => 'required|exists:clients,id',
            'date_commande' => 'required|date',
            'produits' => 'required|array|min:1',
            'produits.*' => 'required|exists:produits,id|distinct',
            'quantites' => 'required|array|min:1',
            'quantites.*' => 'required|integer|min:1',
        ], [
            'produits.*.distinct' => 'Vous avez sélectionné le même produit deux fois. Augmentez plutôt sa quantité.',
        ]);

        try {
            DB::transaction(function () use ($request, $commande) {
                // 1. Restaurer les anciens stocks avant recalcul
                foreach ($commande->produits as $ancienProduit) {
                    $ancienProduit->increment('stock', $ancienProduit->pivot->quantite);
                }

                // 2. Vérifier et déduire les nouvelles quantités
                $montantTotal = 0;
                $pivotData = [];

                foreach ($request->produits as $index => $produitId) {
                    $quantite = (int) $request->quantites[$index];
                    $produit = Produit::withTrashed()->lockForUpdate()->findOrFail($produitId);

                    if ($produit->stock < $quantite) {
                        throw new \Exception("Stock insuffisant pour « {$produit->nom} » (disponible : {$produit->stock}).");
                    }

                    // Conserve le prix unitaire d'origine si l'article était déjà dans la commande
                    $ancienLigne = $commande->produits->firstWhere('id', $produit->id);
                    $prixUnitaire = $ancienLigne ? $ancienLigne->pivot->prix_unitaire : $produit->prix;

                    $montantTotal += $prixUnitaire * $quantite;

                    $pivotData[$produit->id] = [
                        'quantite' => $quantite,
                        'prix_unitaire' => $prixUnitaire,
                    ];

                    $produit->decrement('stock', $quantite);
                }

                // 3. Mettre à jour la commande et synchroniser les produits
                $commande->update([
                    'client_id' => $request->client_id,
                    'date_commande' => $request->date_commande,
                    'montant' => $montantTotal,
                ]);

                $commande->produits()->sync($pivotData);
            });

            return redirect()->route('commandes.index')
                ->with('success', 'Commande #' . $commande->id . ' mise à jour avec succès !');

        } catch (\Exception $e) {
            return back()->withInput()->withErrors([$e->getMessage()]);
        }
    }

    public function destroy(string $id): RedirectResponse
    {
        $commande = Commande::with('produits')->findOrFail($id);

        DB::transaction(function () use ($commande) {
            foreach ($commande->produits as $produit) {
                $produit->increment('stock', $produit->pivot->quantite);
            }

            $commande->produits()->detach();
            $commande->delete();
        });

        return redirect()->route('commandes.index')
            ->with('success', 'Commande supprimée et stock restauré.');
    }
        public function genererRecuPdf(string $id)
    {
        ini_set('pcre.jit', '0');

    $commande = Commande::with(['client', 'produits'])->findOrFail($id);
    

        $commande->client_nom = $commande->client->nom ?? 'Client inconnu';
        $commande->client_email = $commande->client->email ?? 'Non renseigné';

        $details = $commande->produits->map(function ($produit) {
            return (object) [
                'produit_nom' => $produit->nom,
                'quantite' => $produit->pivot->quantite,
                'prix_unitaire' => $produit->pivot->prix_unitaire,
            ];
        });

        $pdf = Pdf::loadView('commandes.recu_pdf', compact('commande', 'details'));
        return $pdf->download('Recu-Commande-CMD-' . $commande->id . '.pdf');
    }

}
