@extends('layouts.master')

@section('header')
<div style="background-color: #f7f7b6; padding: 15px; text-align: center; font-size: 24px; font-weight: bold;">
    Edit Product
</div>
@stop

@section('contenu')
<div  style="max-width: 600px; margin-left: 300px ; padding: 20px; padding-right:20px; border: 1px solid #ccc; border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); background-color: #f9f9f9;">
    <form action="{{ route('edit', ['id' => $produit->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div style="margin-bottom: 15px;">
            <label for="NomProduit" style="display: block; font-weight: bold; margin-bottom: 5px;">Product Name:</label>
            <input type="text" id="NomProduit" name="NomProduit" value="{{ $produit->NomProduit }}" style="width: 96%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="Description" style="display: block; font-weight: bold; margin-bottom: 5px;">Description:</label>
            <textarea id="Description" name="Description" style="width: 96%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">{{ $produit->Description }}</textarea>
        </div>
        <div style="margin-bottom: 15px;">
            <label for="Categorie_id" style="display: block; font-weight: bold; margin-bottom: 5px;">Category:</label>
            <input type="text" id="Categorie_id" name="Categorie_id" value="{{ $produit->Categorie_id }}" style="width: 96%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
        </div>        
        <div style="text-align: center; margin-top: 20px;">
            <button type="submit" style="background-color: #007bff; color: white; border: none; padding: 11px 15px; border-radius: 5px;" >
                Save Changes
            </button>
            <a href="{{ route('afficher') }}" class="btn btn-secondary" 
                style="margin-left: 10px; margin-top: 5px; padding: 10px 20px; background-color: #6c757d; color: #fff; text-decoration: none; border-radius: 5px; font-size: 16px;">
                Cancel
            </a>
        </div>
    </form>
</div>
@stop