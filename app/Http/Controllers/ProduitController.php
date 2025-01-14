<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categorie;


class ProduitController extends Controller
{
    public function index()
    {
        $produits = Produit::all();
        $categories = Categorie::all();

        return view('showprod', compact('produits','categories'));
    }
    public function Nouveau_produit()
    {
        $categories = Categorie::all();
        return view('new', compact('categories'));
    }

    public function Creation_produit(Request $request)
    {
        Produit::create($request->all());
        return redirect('/showProd');
    }

    public function Edition_produit($id)
    {
        $produit = Produit::find($id);
        $categories = Categorie::all();
        return view('edit', compact('produit', 'categories'));
    }

    public function Edit_produit(Request $request, $id)
    {
        $produit = Produit::find($id);
        $produit->update($request->all());
        return redirect('/showProd');
    }

    public function Delete_produit($id)
    {
        Produit::destroy($id);
        return redirect('/showProd');
    }
}
