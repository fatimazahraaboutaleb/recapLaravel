<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('produits')->insert([
            ['NomProduit' => 'Laptop', 'Description' => 'A high-end laptop', 'Categorie_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['NomProduit' => 'Sofa', 'Description' => 'A comfortable sofa', 'Categorie_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
