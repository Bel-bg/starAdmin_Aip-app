<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RoleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('roles')->insertOrIgnore([
            ['id' => 1, 'nom' => 'admin', 'libelle' => 'Administrateur', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'nom' => 'vendeur', 'libelle' => 'Vendeur', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'nom' => 'client', 'libelle' => 'Client', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
