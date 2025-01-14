@extends('layouts.master')

@section('header')
<div style="background-color: #f7f7b6; padding: 15px; text-align: center; font-size: 24px; font-weight: bold;">
    Liste des Produits
</div>
@stop

@section('contenu')
<div style="width: 75%; margin-right: 20px;">
    @foreach($produits as $produit)
    <div style="border: 1px solid #ddd; border-radius: 5px; margin-bottom: 15px; padding: 15px;">
        <h3>
            <a href="#" style="text-decoration: none; color: #007bff;">{{ $produit->NomProduit }}</a>
        </h3>
        <p style="color: #666;">{{ $produit->Description }}</p>
        <div style="margin-top: 10px;">
            <a href="{{ route('nouveau') }}" style="background-color: #007bff; color: white; border: none; padding: 10px 15px; border-radius: 5px; margin-right: 5px; text-decoration: none;">
                Ajouter
            </a>
            <a href="{{ route('edition', ['id' => $produit->id]) }}" style="background-color: #ffc107; color: white; border: none; padding: 10px 15px; border-radius: 5px; margin-right: 5px; text-decoration: none;">
                Editer
            </a>
            <form action="{{ route('delete', ['id' => $produit->id]) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" style="background-color: #dc3545; color: white; border: none; padding: 10px 15px; border-radius: 5px;">
                    Supprimer
                </button>
            </form>
        </div>
    </div>
    @endforeach
</div>
@stop

@section('aside')
<aside style="width: 20%; border-left: 1px solid #ddd; padding-left: 15px;">
    <h4 style="font-size: 18px; margin-bottom: 10px;">Categories</h4>
    <ul style="list-style: none; padding: 0; line-height: 1.8;">
        <li><a href="{{ route('categorie.show', ['id' => 1]) }}" style="text-decoration: none; color: #007bff;">Shoes</a></li>
        <li><a href="{{ route('categorie.show', ['id' => 2]) }}" style="text-decoration: none; color: #007bff;">Téléphone & Tablette</a></li>
        <li><a href="{{ route('categorie.show', ['id' => 3]) }}" style="text-decoration: none; color: #007bff;">Électroménager</a></li>
        <li><a href="{{ route('categorie.show', ['id' => 4]) }}" style="text-decoration: none; color: #007bff;">Supermarché</a></li>
        <li><a href="{{ route('categorie.show', ['id' => 5]) }}" style="text-decoration: none; color: #007bff;">Sports & Loisirs</a></li>
        <li><a href="{{ route('categorie.show', ['id' => 6]) }}" style="text-decoration: none; color: #007bff;">Beauté & Santé</a></li>
    </ul>
</aside>
@stop
