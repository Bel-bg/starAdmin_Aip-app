<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduitSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();
        $produits = [];

        $categorieId = DB::table('categories')->where('nom', 'Informatique')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Informatique'); }

        $items = [
            'Laptop HP ProBook 450',
            'Laptop Lenovo ThinkPad E14',
            'Laptop Dell Inspiron 15',
            'Laptop Asus VivoBook 15',
            'Laptop Acer Aspire 5',
            'Ordinateur bureau HP',
            'Ordinateur bureau Dell OptiPlex',
            'Ordinateur tout-en-un Lenovo',
            'Écran Samsung 24 pouces',
            'Écran LG UltraWide 29 pouces',
            'Clavier mécanique RGB',
            'Clavier sans fil Logitech',
            'Souris sans fil HP',
            'Souris gaming Logitech',
            'Webcam Full HD',
            'Disque dur externe 1 To',
            'SSD externe 1 To',
            'Clé USB 128 Go',
            'Imprimante multifonction Canon',
            'Routeur Wi-Fi TP-Link',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 350000 + (($index % 5) * 15000),
                'stock' => 5 + ((0 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Téléphonie')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Téléphonie'); }

        $items = [
            'Samsung Galaxy S23',
            'Samsung Galaxy A55',
            'Samsung Galaxy A15',
            'iPhone 13',
            'iPhone 14',
            'iPhone 15',
            'Xiaomi Redmi Note 13',
            'Xiaomi Poco X6',
            'Google Pixel 8',
            'Nokia 105',
            'Téléphone senior Doro',
            'Coque silicone iPhone',
            'Coque antichoc Samsung',
            'Protection écran universelle',
            'Chargeur USB-C 25 W',
            'Chargeur rapide iPhone',
            'Batterie externe 10 000 mAh',
            'Câble USB-C 2 mètres',
            'Écouteurs Bluetooth',
            'Montre connectée Xiaomi',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 15000 + (($index % 5) * 12000),
                'stock' => 5 + ((1 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Accessoires électroniques')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Accessoires électroniques'); }

        $items = [
            'Écouteurs Bluetooth JBL',
            'Casque Bluetooth Sony',
            'Enceinte portable JBL',
            'Enceinte Bluetooth Anker',
            'Chargeur sans fil Samsung',
            'Adaptateur USB-C HDMI',
            'Câble HDMI 2 mètres',
            'Câble audio jack 3,5 mm',
            'Hub USB 4 ports',
            'Carte mémoire microSD 128 Go',
            'Carte mémoire SD 256 Go',
            'Batterie externe 20 000 mAh',
            'Support téléphone voiture',
            'Support téléphone bureau',
            'Trépied smartphone',
            'Webcam avec microphone',
            'Microphone USB',
            'Lampe LED USB',
            'Multiprise parafoudre',
            'Piles rechargeables AA',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 5000 + (($index % 5) * 5000),
                'stock' => 5 + ((2 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Électroménager')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Électroménager'); }

        $items = [
            'Mixeur électrique',
            'Blender chauffant',
            'Bouilloire électrique 1,7 L',
            'Cafetière filtre',
            'Machine à café expresso',
            'Machine à capsules',
            'Grille-pain inox',
            'Friteuse sans huile',
            'Cuiseur à riz',
            'Multicuiseur programmable',
            'Four micro-ondes',
            'Robot pâtissier',
            'Batteur électrique',
            'Presse-agrumes',
            'Aspirateur traîneau',
            'Aspirateur balai sans fil',
            'Fer à repasser vapeur',
            'Défroisseur vertical',
            'Ventilateur colonne',
            'Purificateur d’air',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 25000 + (($index % 5) * 10000),
                'stock' => 5 + ((3 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Fruits frais')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Fruits frais'); }

        $items = [
            'Pommes Golden',
            'Pommes Gala',
            'Pommes Granny Smith',
            'Pommes Fuji',
            'Poires Williams',
            'Poires Conférence',
            'Bananes',
            'Bananes plantain',
            'Oranges à jus',
            'Mandarines',
            'Clémentines',
            'Citrons jaunes',
            'Citrons verts',
            'Avocats Hass',
            'Mangues',
            'Ananas',
            'Papayes',
            'Kiwis verts',
            'Raisins blancs',
            'Pastèques',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 500 + (($index % 5) * 100),
                'stock' => 5 + ((4 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Légumes frais')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Légumes frais'); }

        $items = [
            'Carottes',
            'Pommes de terre',
            'Patates douces',
            'Oignons jaunes',
            'Oignons rouges',
            'Ail',
            'Poireaux',
            'Tomates rondes',
            'Tomates grappe',
            'Tomates cerises',
            'Concombres',
            'Courgettes',
            'Aubergines',
            'Poivrons rouges',
            'Brocolis',
            'Choux-fleurs',
            'Épinards frais',
            'Haricots verts',
            'Champignons de Paris',
            'Salade iceberg',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 300 + (($index % 5) * 80),
                'stock' => 5 + ((5 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Boucherie')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Boucherie'); }

        $items = [
            'Steak haché pur bœuf',
            'Entrecôte de bœuf',
            'Faux-filet de bœuf',
            'Bavette de bœuf',
            'Rôti de bœuf',
            'Bœuf bourguignon',
            'Escalope de veau',
            'Côte de veau',
            'Rôti de veau',
            'Côtelette d’agneau',
            'Gigot d’agneau',
            'Côte de porc',
            'Filet mignon de porc',
            'Rôti de porc',
            'Saucisse fraîche',
            'Merguez',
            'Chipolata',
            'Cuisses de poulet',
            'Filet de poulet',
            'Ailes de poulet',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 2500 + (($index % 5) * 500),
                'stock' => 5 + ((6 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Poissonnerie')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Poissonnerie'); }

        $items = [
            'Filet de saumon',
            'Saumon entier',
            'Filet de cabillaud',
            'Filet de colin',
            'Truite fraîche',
            'Dorade royale',
            'Bar frais',
            'Sole',
            'Maquereau',
            'Sardines fraîches',
            'Crevettes roses',
            'Gambas',
            'Langoustines',
            'Moules',
            'Huîtres',
            'Calamars',
            'Seiches',
            'Poulpe',
            'Thon frais',
            'Anchois frais',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 3000 + (($index % 5) * 700),
                'stock' => 5 + ((7 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Produits laitiers')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Produits laitiers'); }

        $items = [
            'Lait entier UHT',
            'Lait demi-écrémé UHT',
            'Lait écrémé UHT',
            'Lait sans lactose',
            'Lait de chèvre',
            'Crème fraîche épaisse',
            'Crème liquide',
            'Beurre doux',
            'Beurre demi-sel',
            'Yaourt nature',
            'Yaourt aux fruits',
            'Yaourt grec',
            'Yaourt à boire',
            'Fromage blanc',
            'Skyr nature',
            'Mozzarella',
            'Feta',
            'Mascarpone',
            'Emmental râpé',
            'Fromage à tartiner',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 500 + (($index % 5) * 100),
                'stock' => 5 + ((8 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Boulangerie')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Boulangerie'); }

        $items = [
            'Baguette tradition',
            'Pain de campagne',
            'Pain complet',
            'Pain aux céréales',
            'Pain de mie nature',
            'Pain de mie complet',
            'Pain brioché',
            'Pain sans gluten',
            'Petits pains',
            'Pains burger',
            'Pains hot-dog',
            'Tortillas de blé',
            'Bagels nature',
            'Croissant au beurre',
            'Pain au chocolat',
            'Brioche tranchée',
            'Madeleine nature',
            'Muffin chocolat',
            'Donut glacé',
            'Tarte aux pommes',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 300 + (($index % 5) * 80),
                'stock' => 5 + ((9 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Surgelés')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Surgelés'); }

        $items = [
            'Frites surgelées',
            'Potatoes surgelées',
            'Pizza quatre fromages',
            'Pizza jambon fromage',
            'Lasagnes bolognaises',
            'Nuggets de poulet',
            'Bâtonnets de poisson',
            'Poêlée de légumes',
            'Haricots verts surgelés',
            'Épinards hachés',
            'Petits pois surgelés',
            'Brocolis surgelés',
            'Crevettes surgelées',
            'Filets de colin surgelés',
            'Poulet rôti surgelé',
            'Paella surgelée',
            'Couscous surgelé',
            'Glace vanille',
            'Glace chocolat',
            'Sorbet citron',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 1500 + (($index % 5) * 300),
                'stock' => 5 + ((10 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Riz, pâtes et céréales')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Riz, pâtes et céréales'); }

        $items = [
            'Riz blanc long',
            'Riz basmati',
            'Riz complet',
            'Riz thaï',
            'Riz arborio',
            'Quinoa',
            'Boulgour',
            'Couscous moyen',
            'Semoule fine',
            'Lentilles vertes',
            'Lentilles corail',
            'Pois chiches secs',
            'Haricots rouges secs',
            'Spaghetti',
            'Penne rigate',
            'Fusilli',
            'Coquillettes',
            'Pâtes complètes',
            'Nouilles chinoises',
            'Vermicelles de riz',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 700 + (($index % 5) * 120),
                'stock' => 5 + ((11 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Conserves')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Conserves'); }

        $items = [
            'Tomates pelées',
            'Coulis de tomate',
            'Concentré de tomate',
            'Maïs doux',
            'Haricots verts',
            'Petits pois',
            'Champignons émincés',
            'Pois chiches en conserve',
            'Haricots rouges en conserve',
            'Thon naturel',
            'Thon à l’huile',
            'Sardines à l’huile',
            'Maquereaux en conserve',
            'Raviolis en sauce',
            'Haricots cuisinés',
            'Ratatouille en conserve',
            'Lentilles cuisinées',
            'Pêches au sirop',
            'Ananas au sirop',
            'Compote de pommes',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 600 + (($index % 5) * 120),
                'stock' => 5 + ((12 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Sauces et condiments')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Sauces et condiments'); }

        $items = [
            'Sauce tomate basilic',
            'Sauce bolognaise',
            'Sauce napolitaine',
            'Pesto vert',
            'Pesto rosso',
            'Sauce béchamel',
            'Ketchup',
            'Mayonnaise',
            'Moutarde douce',
            'Moutarde forte',
            'Sauce barbecue',
            'Sauce burger',
            'Sauce soja',
            'Sauce teriyaki',
            'Vinaigre balsamique',
            'Vinaigre de cidre',
            'Huile d’olive vierge',
            'Huile de tournesol',
            'Cornichons aigres-doux',
            'Olives vertes dénoyautées',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 500 + (($index % 5) * 100),
                'stock' => 5 + ((13 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Épicerie sucrée')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Épicerie sucrée'); }

        $items = [
            'Sucre blanc',
            'Sucre roux',
            'Sucre glace',
            'Farine de blé',
            'Farine complète',
            'Farine de maïs',
            'Fécule de maïs',
            'Levure chimique',
            'Miel de fleurs',
            'Sirop d’érable',
            'Confiture de fraises',
            'Confiture d’abricots',
            'Marmelade d’orange',
            'Pâte à tartiner noisette',
            'Beurre de cacahuète',
            'Cacao en poudre',
            'Chocolat noir pâtissier',
            'Chocolat au lait pâtissier',
            'Flocons d’avoine',
            'Préparation pour pancakes',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 500 + (($index % 5) * 100),
                'stock' => 5 + ((14 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Biscuits et goûters')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Biscuits et goûters'); }

        $items = [
            'Biscuits sablés',
            'Biscuits au beurre',
            'Cookies chocolat',
            'Cookies noisette',
            'Biscuits fourrés chocolat',
            'Biscuits fourrés fraise',
            'Gaufrettes vanille',
            'Gaufrettes chocolat',
            'Spéculoos',
            'Boudoirs',
            'Barres de céréales',
            'Barres chocolatées',
            'Madeleines',
            'Brownies emballés',
            'Muffins emballés',
            'Crêpes fourrées',
            'Chips de maïs sucrées',
            'Biscuits sans gluten',
            'Biscuits bio',
            'Goûters pour enfants',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 600 + (($index % 5) * 100),
                'stock' => 5 + ((15 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Chocolats et confiseries')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Chocolats et confiseries'); }

        $items = [
            'Tablette chocolat noir 70%',
            'Tablette chocolat au lait',
            'Tablette chocolat blanc',
            'Tablette noisettes',
            'Pralinés assortis',
            'Truffes au chocolat',
            'Bonbons gélifiés',
            'Bonbons acidulés',
            'Bonbons menthe',
            'Caramels au beurre salé',
            'Sucettes',
            'Chewing-gums menthe',
            'Chewing-gums fruits',
            'Pastilles menthe',
            'Guimauves',
            'Dragées chocolatées',
            'Noix de cajou caramélisées',
            'Chocolat à tartiner',
            'Coffret chocolat cadeau',
            'Assortiment de confiseries',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 700 + (($index % 5) * 120),
                'stock' => 5 + ((16 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Eaux et jus')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Eaux et jus'); }

        $items = [
            'Eau minérale plate 50 cl',
            'Eau minérale plate 1,5 L',
            'Eau minérale gazeuse',
            'Eau de source',
            'Eau aromatisée citron',
            'Eau aromatisée fruits rouges',
            'Jus d’orange',
            'Jus de pomme',
            'Jus d’ananas',
            'Jus multifruits',
            'Jus de raisin',
            'Jus de pamplemousse',
            'Nectar d’abricot',
            'Nectar de pêche',
            'Jus de tomate',
            'Smoothie fruits rouges',
            'Smoothie mangue',
            'Boisson aux fruits',
            'Eau vitaminée',
            'Eau pour bébé',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 400 + (($index % 5) * 80),
                'stock' => 5 + ((17 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Sodas et boissons')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Sodas et boissons'); }

        $items = [
            'Cola classique',
            'Cola sans sucre',
            'Limonade',
            'Soda orange',
            'Soda citron',
            'Soda tropical',
            'Ginger ale',
            'Tonic',
            'Thé glacé pêche',
            'Thé glacé citron',
            'Boisson énergisante',
            'Boisson énergisante sans sucre',
            'Boisson isotonique',
            'Kombucha nature',
            'Kombucha gingembre',
            'Sirop de grenadine',
            'Sirop de menthe',
            'Sirop de citron',
            'Sirop d’orgeat',
            'Chocolat instantané',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 500 + (($index % 5) * 100),
                'stock' => 5 + ((18 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Café et thé')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Café et thé'); }

        $items = [
            'Café moulu classique',
            'Café moulu intense',
            'Café en grains arabica',
            'Café en grains corsé',
            'Capsules café espresso',
            'Capsules café lungo',
            'Café soluble classique',
            'Café soluble décaféiné',
            'Thé noir nature',
            'Thé noir Earl Grey',
            'Thé vert nature',
            'Thé vert menthe',
            'Thé blanc',
            'Infusion verveine',
            'Infusion camomille',
            'Infusion fruits rouges',
            'Rooibos vanille',
            'Chicorée soluble',
            'Dosettes café',
            'Café moulu décaféiné',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 700 + (($index % 5) * 120),
                'stock' => 5 + ((19 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Vins')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Vins'); }

        $items = [
            'Vin rouge Bordeaux',
            'Vin rouge Bourgogne',
            'Vin rouge Côtes-du-Rhône',
            'Vin rouge italien',
            'Vin rouge espagnol',
            'Vin rouge chilien',
            'Vin blanc sec',
            'Vin blanc moelleux',
            'Vin blanc italien',
            'Vin blanc allemand',
            'Vin rosé de Provence',
            'Vin rosé fruité',
            'Champagne brut',
            'Champagne demi-sec',
            'Crémant',
            'Prosecco',
            'Cava',
            'Sangria rouge',
            'Sangria blanche',
            'Vin sans alcool',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 2500 + (($index % 5) * 500),
                'stock' => 5 + ((20 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Bières et spiritueux')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Bières et spiritueux'); }

        $items = [
            'Bière blonde',
            'Bière blanche',
            'Bière ambrée',
            'Bière brune',
            'Bière artisanale',
            'Bière sans alcool',
            'Bière importée',
            'Bière aromatisée',
            'Cidre doux',
            'Cidre brut',
            'Rhum blanc',
            'Rhum ambré',
            'Whisky écossais',
            'Whisky américain',
            'Vodka',
            'Gin',
            'Tequila',
            'Cognac',
            'Pastis',
            'Liqueur de fruits',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 1500 + (($index % 5) * 400),
                'stock' => 5 + ((21 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Alimentation bébé')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Alimentation bébé'); }

        $items = [
            'Lait infantile premier âge',
            'Lait infantile deuxième âge',
            'Lait de croissance',
            'Céréales infantiles nature',
            'Céréales infantiles cacao',
            'Petit pot carottes',
            'Petit pot haricots verts',
            'Petit pot poulet légumes',
            'Petit pot poisson légumes',
            'Compote pomme bébé',
            'Compote pomme banane bébé',
            'Gourde fruits bébé',
            'Biscuit bébé',
            'Dessert lacté bébé',
            'Plat bébé dès 12 mois',
            'Soupe bébé',
            'Eau pour nourrisson',
            'Jus bébé',
            'Pochette repas bébé',
            'Purée de fruits bébé',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 800 + (($index % 5) * 150),
                'stock' => 5 + ((22 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Couches et soins bébé')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Couches et soins bébé'); }

        $items = [
            'Couches taille 1',
            'Couches taille 2',
            'Couches taille 3',
            'Couches taille 4',
            'Couches taille 5',
            'Couches taille 6',
            'Couches-culottes taille 4',
            'Couches-culottes taille 5',
            'Lingettes bébé',
            'Liniment oléo-calcaire',
            'Crème de change',
            'Gel lavant bébé',
            'Shampooing bébé',
            'Lait de toilette bébé',
            'Huile de massage bébé',
            'Coton bébé',
            'Bavoirs',
            'Tétines',
            'Sucettes bébé',
            'Anneau de dentition',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 1200 + (($index % 5) * 200),
                'stock' => 5 + ((23 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Hygiène corporelle')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Hygiène corporelle'); }

        $items = [
            'Savon solide',
            'Savon liquide',
            'Gel douche classique',
            'Gel douche hydratant',
            'Gel douche homme',
            'Gel douche enfant',
            'Huile de douche',
            'Gommage corps',
            'Lait corporel',
            'Crème hydratante corps',
            'Déodorant spray femme',
            'Déodorant spray homme',
            'Déodorant bille',
            'Déodorant solide',
            'Rasoirs jetables',
            'Mousse à raser',
            'Cire dépilatoire',
            'Crème dépilatoire',
            'Bouchons d’oreilles',
            'Accessoires de voyage',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 500 + (($index % 5) * 100),
                'stock' => 5 + ((24 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Soins des cheveux')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Soins des cheveux'); }

        $items = [
            'Shampooing cheveux normaux',
            'Shampooing cheveux secs',
            'Shampooing cheveux gras',
            'Shampooing antipelliculaire',
            'Shampooing colorés',
            'Après-shampooing nourrissant',
            'Masque cheveux secs',
            'Masque cheveux bouclés',
            'Huile capillaire',
            'Sérum cheveux',
            'Coloration châtain',
            'Coloration blond',
            'Coloration noir',
            'Gel coiffant',
            'Cire coiffante',
            'Laque forte',
            'Mousse coiffante',
            'Brosse à cheveux',
            'Peigne démêlant',
            'Accessoires cheveux',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 600 + (($index % 5) * 100),
                'stock' => 5 + ((25 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Cosmétiques')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Cosmétiques'); }

        $items = [
            'Crème visage hydratante',
            'Crème visage anti-âge',
            'Sérum visage',
            'Nettoyant visage',
            'Eau micellaire',
            'Lotion tonique',
            'Masque visage',
            'Gommage visage',
            'Fond de teint',
            'Poudre visage',
            'Correcteur teint',
            'Fard à paupières',
            'Mascara noir',
            'Eyeliner',
            'Rouge à lèvres',
            'Gloss',
            'Vernis à ongles',
            'Dissolvant',
            'Crème mains',
            'Baume à lèvres',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 800 + (($index % 5) * 120),
                'stock' => 5 + ((26 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Parfumerie et solaire')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Parfumerie et solaire'); }

        $items = [
            'Parfum femme floral',
            'Parfum femme oriental',
            'Eau de toilette femme',
            'Parfum homme boisé',
            'Parfum homme frais',
            'Eau de toilette homme',
            'Coffret parfum femme',
            'Coffret parfum homme',
            'Crème solaire SPF 30',
            'Crème solaire SPF 50',
            'Lait solaire enfant',
            'Spray solaire',
            'Après-soleil',
            'Lotion autobronzante',
            'Baume après-rasage',
            'Déodorant parfumé',
            'Brume corporelle',
            'Parfum cheveux',
            'Huile solaire',
            'Stick solaire visage',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 1500 + (($index % 5) * 250),
                'stock' => 5 + ((27 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Hygiène dentaire')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Hygiène dentaire'); }

        $items = [
            'Dentifrice anti-caries',
            'Dentifrice blancheur',
            'Dentifrice dents sensibles',
            'Dentifrice enfants',
            'Dentifrice gencives',
            'Brosse à dents souple',
            'Brosse à dents médium',
            'Brosse à dents électrique',
            'Tête de brosse électrique',
            'Fil dentaire',
            'Brossettes interdentaires',
            'Bain de bouche',
            'Bain de bouche sans alcool',
            'Gratte-langue',
            'Chewing-gum sans sucre',
            'Pastilles haleine fraîche',
            'Nettoyant appareil dentaire',
            'Crème fixative dentaire',
            'Brosse à dents de voyage',
            'Kit hygiène dentaire',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 400 + (($index % 5) * 80),
                'stock' => 5 + ((28 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Lessive et entretien du linge')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Lessive et entretien du linge'); }

        $items = [
            'Lessive liquide classique',
            'Lessive liquide couleurs',
            'Lessive liquide noir',
            'Lessive poudre',
            'Capsules de lessive',
            'Lessive hypoallergénique',
            'Lessive bébé',
            'Adoucissant classique',
            'Adoucissant concentré',
            'Détachant textile',
            'Blanchissant linge',
            'Lingettes anti-décoloration',
            'Filet de lavage',
            'Savon détachant',
            'Parfum de linge',
            'Amidon textile',
            'Cintres plastique',
            'Pinces à linge',
            'Sac de lavage',
            'Rouleau anti-peluches',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 700 + (($index % 5) * 120),
                'stock' => 5 + ((29 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Nettoyage de la maison')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Nettoyage de la maison'); }

        $items = [
            'Nettoyant multiusage',
            'Désinfectant surfaces',
            'Nettoyant vitres',
            'Nettoyant sols',
            'Nettoyant cuisine',
            'Nettoyant salle de bains',
            'Détartrant',
            'Déboucheur canalisations',
            'Eau de Javel',
            'Vinaigre ménager',
            'Bicarbonate ménager',
            'Cristaux de soude',
            'Nettoyant four',
            'Nettoyant réfrigérateur',
            'Nettoyant bois',
            'Cire pour meubles',
            'Dépoussiérant',
            'Lingettes ménagères',
            'Gants ménagers',
            'Brosse de nettoyage',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 500 + (($index % 5) * 100),
                'stock' => 5 + ((30 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Vaisselle et papier ménager')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Vaisselle et papier ménager'); }

        $items = [
            'Liquide vaisselle citron',
            'Liquide vaisselle concentré',
            'Tablettes lave-vaisselle',
            'Poudre lave-vaisselle',
            'Liquide de rinçage',
            'Sel régénérant',
            'Éponges vaisselle',
            'Éponges récurantes',
            'Tampons à récurer',
            'Sacs poubelle 30 L',
            'Sacs poubelle 50 L',
            'Sacs congélation',
            'Film alimentaire',
            'Papier aluminium',
            'Papier cuisson',
            'Essuie-tout',
            'Papier toilette',
            'Mouchoirs en papier',
            'Serviettes en papier',
            'Rouleaux absorbants',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 300 + (($index % 5) * 70),
                'stock' => 5 + ((31 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Cuisine et vaisselle')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Cuisine et vaisselle'); }

        $items = [
            'Assiettes plates',
            'Assiettes creuses',
            'Assiettes à dessert',
            'Bols en céramique',
            'Mugs',
            'Tasses à café',
            'Verres à eau',
            'Verres à vin',
            'Carafe en verre',
            'Couverts de table',
            'Couteau de cuisine',
            'Planche à découper',
            'Éplucheur',
            'Râpe de cuisine',
            'Passoire',
            'Saladier',
            'Boîte de conservation',
            'Bocal en verre',
            'Moule à gâteau',
            'Moule à tarte',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 800 + (($index % 5) * 150),
                'stock' => 5 + ((32 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Rangement et organisation')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Rangement et organisation'); }

        $items = [
            'Boîte de rangement plastique',
            'Boîte de rangement textile',
            'Panier de rangement',
            'Bac de rangement',
            'Boîte à chaussures',
            'Organiseur de tiroir',
            'Séparateur de tiroir',
            'Cintres bois',
            'Cintres velours',
            'Porte-chaussures',
            'Étagère modulable',
            'Étagère murale',
            'Penderie mobile',
            'Housse vêtement',
            'Sac sous vide',
            'Boîte à outils',
            'Poubelle de cuisine',
            'Poubelle salle de bains',
            'Panier à linge',
            'Crochets adhésifs',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 500 + (($index % 5) * 100),
                'stock' => 5 + ((33 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Literie et textile maison')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Literie et textile maison'); }

        $items = [
            'Drap-housse 90 cm',
            'Drap-housse 140 cm',
            'Drap-housse 160 cm',
            'Drap plat 140 cm',
            'Housse de couette 140 cm',
            'Housse de couette 200 cm',
            'Taie d’oreiller coton',
            'Oreiller classique',
            'Oreiller mémoire de forme',
            'Traversin',
            'Couette été',
            'Couette hiver',
            'Plaid polaire',
            'Couverture chaude',
            'Protège-matelas',
            'Rideau occultant',
            'Serviette de bain',
            'Serviette invité',
            'Peignoir',
            'Tapis de bain',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 1500 + (($index % 5) * 250),
                'stock' => 5 + ((34 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Jardinage')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Jardinage'); }

        $items = [
            'Terreau universel',
            'Terreau horticole',
            'Compost végétal',
            'Écorces de pin',
            'Engrais plantes vertes',
            'Engrais fleurs',
            'Engrais potager',
            'Graines de gazon',
            'Graines de fleurs',
            'Graines de tomates',
            'Graines de carottes',
            'Graines aromatiques',
            'Bulbes à fleurs',
            'Pot de fleurs',
            'Jardinière balcon',
            'Cache-pot',
            'Arrosoir',
            'Tuyau d’arrosage',
            'Sécateur',
            'Gants de jardinage',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 400 + (($index % 5) * 100),
                'stock' => 5 + ((35 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Outillage et bricolage')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Outillage et bricolage'); }

        $items = [
            'Marteau de menuisier',
            'Tournevis plat',
            'Tournevis cruciforme',
            'Jeu de tournevis',
            'Clé à molette',
            'Jeu de clés plates',
            'Pince universelle',
            'Pince coupante',
            'Mètre ruban',
            'Niveau à bulle',
            'Cutter',
            'Scie à main',
            'Perceuse sans fil',
            'Visseuse électrique',
            'Meuleuse d’angle',
            'Boîte à outils',
            'Vis à bois',
            'Chevilles murales',
            'Ruban adhésif',
            'Colle universelle',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 700 + (($index % 5) * 150),
                'stock' => 5 + ((36 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Peinture et décoration')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Peinture et décoration'); }

        $items = [
            'Peinture blanche mate',
            'Peinture blanche satinée',
            'Peinture couleur beige',
            'Peinture couleur grise',
            'Peinture extérieure',
            'Peinture bois',
            'Peinture métal',
            'Vernis bois',
            'Sous-couche murale',
            'Enduit de rebouchage',
            'Enduit de lissage',
            'Pinceau plat',
            'Pinceau rond',
            'Rouleau peinture murale',
            'Bâche de protection',
            'Ruban de masquage',
            'Papier abrasif',
            'Cadre photo',
            'Miroir mural',
            'Adhésif décoratif',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 900 + (($index % 5) * 150),
                'stock' => 5 + ((37 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Automobile')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Automobile'); }

        $items = [
            'Huile moteur 5W30',
            'Huile moteur 10W40',
            'Liquide de refroidissement',
            'Liquide lave-glace',
            'Additif carburant',
            'Batterie voiture',
            'Câbles de démarrage',
            'Balai essuie-glace',
            'Ampoules voiture',
            'Nettoyant tableau de bord',
            'Shampooing voiture',
            'Cire carrosserie',
            'Éponge automobile',
            'Chiffon microfibre',
            'Tapis voiture',
            'Housse de siège',
            'Pompe à pneus',
            'Compresseur portatif',
            'Triangle de sécurité',
            'Gilet de sécurité',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 600 + (($index % 5) * 120),
                'stock' => 5 + ((38 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Vêtements femme')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Vêtements femme'); }

        $items = [
            'T-shirt femme',
            'Chemisier femme',
            'Chemise femme',
            'Pull femme',
            'Gilet femme',
            'Sweat femme',
            'Veste femme',
            'Manteau femme',
            'Doudoune femme',
            'Jean femme',
            'Pantalon femme',
            'Short femme',
            'Jupe femme',
            'Robe courte',
            'Robe longue',
            'Pyjama femme',
            'Legging femme',
            'Maillot de bain femme',
            'Veste de sport femme',
            'Jogging femme',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 1500 + (($index % 5) * 250),
                'stock' => 5 + ((39 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Vêtements homme')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Vêtements homme'); }

        $items = [
            'T-shirt homme',
            'Chemise homme',
            'Polo homme',
            'Pull homme',
            'Gilet homme',
            'Sweat homme',
            'Veste homme',
            'Manteau homme',
            'Doudoune homme',
            'Jean homme',
            'Pantalon homme',
            'Short homme',
            'Costume homme',
            'Blazer homme',
            'Pyjama homme',
            'Maillot de bain homme',
            'Vêtement sport homme',
            'Jogging homme',
            'Sous-vêtement homme',
            'Chemise blanche homme',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 1500 + (($index % 5) * 250),
                'stock' => 5 + ((40 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Vêtements enfants')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Vêtements enfants'); }

        $items = [
            'T-shirt fille',
            'T-shirt garçon',
            'Robe enfant',
            'Pull fille',
            'Pull garçon',
            'Sweat enfant',
            'Veste enfant',
            'Manteau enfant',
            'Jean enfant',
            'Pantalon enfant',
            'Short enfant',
            'Pyjama enfant',
            'Sous-vêtement enfant',
            'Maillot de bain enfant',
            'Vêtement sport enfant',
            'Chaussures enfant',
            'Baskets enfant',
            'Chaussettes enfant',
            'Casquette enfant',
            'Imperméable enfant',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 800 + (($index % 5) * 150),
                'stock' => 5 + ((41 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Chaussures et accessoires mode')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Chaussures et accessoires mode'); }

        $items = [
            'Baskets homme',
            'Baskets femme',
            'Baskets enfant',
            'Chaussures de ville homme',
            'Chaussures de ville femme',
            'Chaussures randonnée',
            'Bottes femme',
            'Bottes homme',
            'Sandales femme',
            'Sandales homme',
            'Tongs',
            'Chaussettes coton',
            'Collants femme',
            'Ceinture cuir homme',
            'Ceinture femme',
            'Casquette',
            'Chapeau été',
            'Écharpe',
            'Gants hiver',
            'Sac à dos',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 1200 + (($index % 5) * 200),
                'stock' => 5 + ((42 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Jouets et jeux')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Jouets et jeux'); }

        $items = [
            'Jeu de construction',
            'Jeu de société famille',
            'Jeu de cartes',
            'Puzzle 500 pièces',
            'Puzzle enfants',
            'Poupée',
            'Accessoires de poupée',
            'Voiture miniature',
            'Circuit de voitures',
            'Train électrique',
            'Peluche ours',
            'Peluche animal',
            'Figurine héros',
            'Jeu éducatif',
            'Jeu de mémoire',
            'Ballon enfant',
            'Trottinette enfant',
            'Jeu de plage',
            'Cerf-volant',
            'Jeu de plein air',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 700 + (($index % 5) * 120),
                'stock' => 5 + ((43 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Papeterie et livres')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Papeterie et livres'); }

        $items = [
            'Cahier petit format',
            'Cahier grand format',
            'Cahier spirale',
            'Bloc-notes',
            'Agenda annuel',
            'Classeur A4',
            'Pochettes plastiques',
            'Stylos bille bleus',
            'Stylos bille noirs',
            'Stylos gel',
            'Crayons à papier',
            'Crayons de couleur',
            'Feutres coloriage',
            'Surligneurs',
            'Marqueurs permanents',
            'Gomme blanche',
            'Taille-crayon',
            'Règle 30 cm',
            'Colle scolaire',
            'Ciseaux scolaires',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 300 + (($index % 5) * 70),
                'stock' => 5 + ((44 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Sports et loisirs')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Sports et loisirs'); }

        $items = [
            'Ballon de football',
            'Ballon de basketball',
            'Ballon de volleyball',
            'Raquette de tennis',
            'Raquette de badminton',
            'Volants badminton',
            'Tapis de yoga',
            'Haltères 2 kg',
            'Haltères 5 kg',
            'Élastique fitness',
            'Corde à sauter',
            'Gourde sport',
            'Sac de sport',
            'Serviette sport',
            'Lunettes de natation',
            'Bonnet de natation',
            'Palmes de natation',
            'Casque vélo',
            'Pompe à vélo',
            'Gants fitness',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 1000 + (($index % 5) * 180),
                'stock' => 5 + ((45 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Animaux chiens et chats')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Animaux chiens et chats'); }

        $items = [
            'Croquettes chien adulte',
            'Croquettes chiot',
            'Croquettes chien senior',
            'Pâtée pour chien',
            'Friandises pour chien',
            'Os à mâcher',
            'Croquettes chat adulte',
            'Croquettes chaton',
            'Croquettes chat stérilisé',
            'Pâtée pour chat',
            'Friandises pour chat',
            'Litière agglomérante',
            'Litière minérale',
            'Panier pour chien',
            'Coussin pour chat',
            'Arbre à chat',
            'Griffoir',
            'Laisse pour chien',
            'Collier pour chat',
            'Jouet pour animal',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 700 + (($index % 5) * 150),
                'stock' => 5 + ((46 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Animaux et aquariophilie')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Animaux et aquariophilie'); }

        $items = [
            'Foin pour lapin',
            'Granulés pour lapin',
            'Graines pour oiseaux',
            'Boules de graisse oiseaux',
            'Aliment poissons tropicaux',
            'Aliment poissons rouges',
            'Aliment tortues',
            'Cage pour rongeur',
            'Biberon rongeur',
            'Aquarium 30 litres',
            'Filtre aquarium',
            'Chauffage aquarium',
            'Décoration aquarium',
            'Épuisette aquarium',
            'Niche pour chien',
            'Chenil extérieur',
            'Gamelle inox',
            'Distributeur croquettes',
            'Brosse animaux',
            'Shampooing animaux',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 500 + (($index % 5) * 100),
                'stock' => 5 + ((47 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Santé et premiers secours')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Santé et premiers secours'); }

        $items = [
            'Paracétamol',
            'Thermomètre digital',
            'Pansements classiques',
            'Pansements ampoules',
            'Compresses stériles',
            'Bandes extensibles',
            'Désinfectant cutané',
            'Sérum physiologique',
            'Gants médicaux',
            'Masques chirurgicaux',
            'Gel hydroalcoolique',
            'Crème apaisante',
            'Baume chauffant',
            'Poche de froid',
            'Poche chauffante',
            'Attelle poignet',
            'Tensiomètre',
            'Oxymètre de pouls',
            'Kit premiers secours',
            'Spray antiseptique',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 500 + (($index % 5) * 100),
                'stock' => 5 + ((48 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $categorieId = DB::table('categories')->where('nom', 'Bien-être et nutrition')->value('id');

        if (!$categorieId) { throw new \RuntimeException('Catégorie introuvable : ' . 'Bien-être et nutrition'); }

        $items = [
            'Multivitamines',
            'Vitamine C',
            'Vitamine D',
            'Magnésium',
            'Ferments lactiques',
            'Complément articulations',
            'Complément sommeil',
            'Complément digestion',
            'Complément minceur',
            'Protéines en poudre',
            'Barre protéinée',
            'Boisson protéinée',
            'Tisane bien-être',
            'Tisane digestion',
            'Tisane sommeil',
            'Huile essentielle lavande',
            'Huile essentielle menthe',
            'Bouillotte',
            'Coussin cervical',
            'Masque de sommeil',
        ];

        foreach ($items as $index => $nom) {
            $produits[] = [
                'nom' => $nom,
                'prix' => 600 + (($index % 5) * 120),
                'stock' => 5 + ((49 * 7 + $index * 3) % 46),
                'categorie_id' => $categorieId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        foreach (array_chunk($produits, 500) as $chunk) {
            DB::table('produits')->insert($chunk);
        }
    }
}
