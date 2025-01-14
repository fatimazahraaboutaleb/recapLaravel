@extends('layouts.master')

@section('header')
<h1>Bienvenue, {{ Auth::user()->name }}</h1>
<nav>
    <a href="{{ route('dashboard') }}">Dashboard</a>
    <a href="{{ route('profile.edit') }}">Mon Profil</a>
    <a href="{{ route('logout') }}" 
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
       Déconnexion
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</nav>
@stop

@section('contenu')
<h1>Liste des Produits et Catégories</h1>
<a href="{{ route('nouveau') }}">Ajouter un nouveau produit</a>
<ul>
    @foreach($categories as $categorie)
    <li>
        <strong>{{ $categorie->NomCategorie }}</strong>
        <ul>
            @foreach($categorie->produits as $produit)
            <li>
                {{ $produit->NomProduit }} - {{ $produit->DescriptionP }}
                <a href="{{ route('edition', $produit->id) }}">Modifier</a>
                <form action="{{ route('delete', $produit->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
            @endforeach
        </ul>
    </li>
    @endforeach
</ul>
@stop
