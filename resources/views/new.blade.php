@extends('layouts.master')

@section('header')
    <h1 style="text-align: center; font-size: 24px; font-weight: bold; color: #333;">Ajouter un Nouveau Produit</h1>
@stop

@section('contenu')
    <div style="max-width: 600px; margin-left: 300px ; padding: 20px; padding-right:20px; border: 1px solid #ccc; border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); background-color: #f9f9f9;">
        <form action="{{ route('creationProd') }}" method="POST">
            @csrf
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="NomProduit" style="display: block; font-weight: bold; margin-bottom: 5px;">Product Name:</label>
                <input type="text" id="NomProduit" name="NomProduit" class="form-control" 
                       style="width: 96%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;" required>
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <label for="Description" style="display: block; font-weight: bold; margin-bottom: 5px;">Description:</label>
                <textarea id="Description" name="Description" class="form-control" rows="4" 
                          style="width: 96%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;" required></textarea>
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <label for="Categorie_id" style="display: block; font-weight: bold; margin-bottom: 5px;">Catégory:</label>
                <select id="Categorie_id" name="Categorie_id" class="form-control" 
                        style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;" required>
                    @foreach($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->NomCategorie }}</option>
                    @endforeach
                </select>
            </div>

            <div style="text-align: center; margin-top: 20px;">
                <button type="submit" class="btn btn-primary" 
                        style="background-color: #007bff; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; font-size: 16px; cursor: pointer;">
                    Add Product
                </button>
                <a href="{{ route('afficher') }}" class="btn btn-secondary" 
                   style="margin-left: 10px; padding: 10px 20px; background-color: #6c757d; color: #fff; text-decoration: none; border-radius: 5px; font-size: 16px;">
                   Cancel
                </a>
            </div>
        </form>
    </div>
@stop
