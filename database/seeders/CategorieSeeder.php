<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();
        $categories = [
            ['nom' => 'Informatique', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Téléphonie', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Accessoires électroniques', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Électroménager', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Fruits frais', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Légumes frais', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Boucherie', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Poissonnerie', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Produits laitiers', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Boulangerie', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Surgelés', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Riz, pâtes et céréales', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Conserves', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Sauces et condiments', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Épicerie sucrée', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Biscuits et goûters', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Chocolats et confiseries', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Eaux et jus', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Sodas et boissons', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Café et thé', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Vins', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Bières et spiritueux', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Alimentation bébé', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Couches et soins bébé', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Hygiène corporelle', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Soins des cheveux', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Cosmétiques', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Parfumerie et solaire', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Hygiène dentaire', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Lessive et entretien du linge', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Nettoyage de la maison', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Vaisselle et papier ménager', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Cuisine et vaisselle', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Rangement et organisation', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Literie et textile maison', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Jardinage', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Outillage et bricolage', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Peinture et décoration', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Automobile', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Vêtements femme', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Vêtements homme', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Vêtements enfants', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Chaussures et accessoires mode', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Jouets et jeux', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Papeterie et livres', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Sports et loisirs', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Animaux chiens et chats', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Animaux et aquariophilie', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Santé et premiers secours', 'created_at' => $now, 'updated_at' => $now],
            ['nom' => 'Bien-être et nutrition', 'created_at' => $now, 'updated_at' => $now],
        ];

        DB::table('categories')->upsert($categories, ['nom'], ['updated_at']);
    }
}
