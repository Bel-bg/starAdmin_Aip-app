<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Client;
use App\Models\Commande;
use App\Models\Produit;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        // 1. Statistiques globales (KPI)
        $totalProduits = Produit::count();
        $totalCategories = Category::count();
        $totalClients = Client::count();
        $totalCommandes = Commande::count();
        $chiffreAffaire = Commande::sum('montant');

        // 2. Données Graphique 1 : Top 6 des catégories par nombre de produits
        $categoriesStats = Category::withCount('produits')
            ->orderByDesc('produits_count')
            ->take(6)
            ->get();

        $catLabels = $categoriesStats->pluck('nom');
        $catCounts = $categoriesStats->pluck('produits_count');

        // 3. Données Graphique 2 : Évolution des ventes sur les 6 derniers mois
        $ventesParMois = Commande::selectRaw("DATE_FORMAT(date_commande, '%Y-%m') as mois, SUM(montant) as total")
            ->groupBy('mois')
            ->orderBy('mois', 'asc')
            ->take(6)
            ->get();

        $moisLabels = $ventesParMois->pluck('mois');
        $moisTotaux = $ventesParMois->pluck('total');

        // 4. Suivi rapide : 5 dernières commandes et produits en stock faible (<= 10)
        $dernieresCommandes = Commande::with('client')
            ->orderByDesc('id')
            ->take(5)
            ->get();

        $produitsAlerteStock = Produit::with('category')
            ->where('stock', '<=', 10)
            ->orderBy('stock', 'asc')
            ->take(5)
            ->get();

        return view('home', compact(
            'totalProduits',
            'totalCategories',
            'totalClients',
            'totalCommandes',
            'chiffreAffaire',
            'catLabels',
            'catCounts',
            'moisLabels',
            'moisTotaux',
            'dernieresCommandes',
            'produitsAlerteStock'
        ));
    }
}
