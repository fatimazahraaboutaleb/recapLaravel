@extends('layouts.master')

@section('header')
<h1>Products in {{ $categorie->NomCategorie }}</h1>
@stop

@section('contenu')
<div style="padding: 20px; font-family: Arial, sans-serif; position: relative;">
    <a href="{{ route('afficher') }}" style="
        position: absolute;
        top: 20px;
        left: 20px;
        background-color: #007bff;
        color: #ffffff;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-family: Arial, sans-serif;
        font-size: 16px;
        transition: background-color 0.3s ease;
    " 
    onmouseover="this.style.backgroundColor='#0056b3';" 
    onmouseout="this.style.backgroundColor='#007bff';">
        Return
    </a>

    <ul style="list-style-type: none; padding: 0; margin-top: 60px;">
        @foreach($produits as $produit)
        <li style="margin-bottom: 20px; border-left: 5px solid #cccccc; padding-left: 10px;">
            <strong style="font-size: 18px; color: #333333;">{{ $produit->id }} {{ $produit->NomProduit }}</strong>
            <p style="font-size: 14px; color: #555555;">{{ $produit->Description }}</p>
        </li>
        @endforeach
    </ul>
</div>
@stop