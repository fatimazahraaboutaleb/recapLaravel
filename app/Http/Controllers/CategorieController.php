<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
{
    public function ProduitsCategorie($id)
    {
        $categorie = Categorie::find($id);
        $produits = $categorie->produits;
        return view('categprod', compact('produits', 'categorie'));
    }
}
