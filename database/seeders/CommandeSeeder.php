<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use RuntimeException;

class CommandeSeeder extends Seeder
{
    public function run(): void
    {
        $nombreCommandes = 355225;
        $tailleLot = 500;
        $now = now();

        $clients = DB::table('clients')
            ->orderBy('id')
            ->pluck('id')
            ->values()
            ->all();

        $produits = DB::table('produits')
            ->select(['id', 'categorie_id', 'prix'])
            ->orderBy('id')
            ->get();

        if (count($clients) === 0) {
            throw new RuntimeException('Aucun client trouvé. Lance ClientSeeder avant CommandeSeeder.');
        }

        if ($produits->isEmpty()) {
            throw new RuntimeException('Aucun produit trouvé. Lance ProduitSeeder avant CommandeSeeder.');
        }

        // Regroupe les produits par catégorie pour générer des commandes
        // cohérentes avec les catégories existantes.
        $produitsParCategorie = [];

        foreach ($produits as $produit) {
            $produitsParCategorie[$produit->categorie_id][] = $produit;
        }

        $categories = array_keys($produitsParCategorie);
        $totalProduitsPivot = 0;
        $dateReference = now();

        for ($debut = 0; $debut < $nombreCommandes; $debut += $tailleLot) {
            $fin = min($debut + $tailleLot, $nombreCommandes);
            $commandes = [];

            // Création du lot de commandes sans appel SQL individuel.
            for ($i = $debut; $i < $fin; $i++) {
                $categorieId = $categories[$i % count($categories)];
                $clientId = $clients[$i % count($clients)];

                // Dates réparties sur les 365 derniers jours.
                $dateCommande = $dateReference
                    ->copy()
                    ->subDays($i % 365);

                // Calcul du montant avant insertion, sans requête SQL individuelle.
                $listeProduits = $produitsParCategorie[$categorieId];
                $nombreLignes = 1 + (($i * 13) % 3);
                $montant = 0;

                for ($ligne = 0; $ligne < $nombreLignes; $ligne++) {
                    $produit = $listeProduits[(($i * 7) + $ligne) % count($listeProduits)];
                    $quantite = 1 + ((($i + $ligne) * 5) % 3);
                    $montant += $quantite * (int) $produit->prix;
                }

                $commandes[] = [
                    'client_id' => $clientId,
                    'date_commande' => $dateCommande,
                    'montant' => $montant,
                    'created_at' => $now,
                    'updated_at' => $now,
                ];
            }

            DB::table('commandes')->insert($commandes);

            
            $premierIdCommande = (int) DB::getPdo()->lastInsertId();

            if ($premierIdCommande <= 0) {
                throw new RuntimeException(
                    'Impossible de récupérer le premier ID des commandes. '
                    . 'Ce seeder utilise lastInsertId() prévu pour MySQL/MariaDB.'
                );
            }

            $lignesCommande = [];

            foreach ($commandes as $position => $commande) {
                $indexCommande = $debut + $position;
                $commandeId = $premierIdCommande + $position;
                $listeProduits = $produitsParCategorie[$categories[$indexCommande % count($categories)]];

                // Chaque commande contient entre 1 et 3 produits.
                $nombreLignes = 1 + (($indexCommande * 13) % 3);
                $montant = 0;

                for ($ligne = 0; $ligne < $nombreLignes; $ligne++) {
                    $produit = $listeProduits[
                        (($indexCommande * 7) + $ligne) % count($listeProduits)
                    ];

                    $quantite = 1 + ((($indexCommande + $ligne) * 5) % 3);
                    $prixUnitaire = (int) $produit->prix;
                    $montant += $quantite * $prixUnitaire;

                    $lignesCommande[] = [
                        'commande_id' => $commandeId,
                        'produit_id' => $produit->id,
                        'quantite' => $quantite,
                        'prix_unitaire' => $prixUnitaire,
                        'created_at' => $now,
                        'updated_at' => $now,
                    ];
                }

            }

            foreach (array_chunk($lignesCommande, 1000) as $lignes) {
                DB::table('commande_produit')->insert($lignes);
            }

            $totalProduitsPivot += count($lignesCommande);

            unset($commandes, $lignesCommande);

            if (($fin % 10000) === 0 || $fin === $nombreCommandes) {
                $this->command?->info(
                    "Commandes générées : {$fin}/{$nombreCommandes} "
                    . "({$totalProduitsPivot} lignes commande-produit)"
                );
            }
        }
    }
}
