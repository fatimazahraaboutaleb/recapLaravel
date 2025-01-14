@extends('layouts.master')

@section('header')
    <div class="header-container">
        <div class="auth-buttons">
            @if (!Auth::check())
                <a href="{{ url('/login') }}" class="btn ">Login</a>
                <a href="{{ url('/register') }}" class="btn ">Register</a>
            @else
                <span class="welcom">Welcome, {{ Auth::user()->name }}!</span>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn ">Logout</button>
                </form>
            @endif
        </div>
        <div class="title"  style="background-color: #f7f7b6; text-align: center; font-size: 20px; font-weight: bold;"> 
            <h1>Products list</h1>
        </div>
       
    </div>
@stop

@section('contenu')
    <div class="content-container" >
        <div class="main-content" style="width: 75%; margin-right: 20px;">
            <ul style="list-style: none;">
                @foreach($produits as $produit)
                    <li class="produit">
                        <div style="border: 1px solid #ddd; border-radius: 5px; margin-bottom: 15px; padding: 15px;">
                            <h2>
                                <a href="#" style="text-decoration: none; color: #007bff;">{{ $produit->NomProduit }}</a>
                            </h2>
                            <p style="color: #666;">{{ $produit->Description }}</p>
                            @auth
                            <div style="margin-top: 10px;">
                                <a href="{{ route('nouveau') }}" style="background-color: #007bff; color: white; border: none; padding: 10px 15px; border-radius: 5px; margin-right: 5px; text-decoration: none;">
                                    Add
                                </a>
                                <a href="{{ route('edition', ['id' => $produit->id]) }}" style="background-color: #ffc107; color: white; border: none; padding: 10px 15px; border-radius: 5px; margin-right: 5px; text-decoration: none;">
                                    Edit
                                </a>
                                <form action="{{ route('delete', ['id' => $produit->id]) }}" method="POST" style="display: inline; margin-buttom: 2px">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="background-color: #dc3545; color: white; border: none; padding: 11px 15px; border-radius: 5px;">
                                        Delete
                                    </button>
                                </form>
                            </div>
                            @endauth
                        </div>
                    </li>
                @endforeach
            </ul>

            @auth
            @endauth
        </div>

        
        @section('aside')
            <aside class="sidebar" style="width: 20%; border-left: 1px solid #ddd; padding-left: 15px;">
                <h4 style="font-size: 18px; margin-bottom: 10px;">Categories</h4>
                <ul style="list-style: none; padding: 0; line-height: 1.8;">
                    @foreach($categories as $categorie)
                        <li>
                            <a href="{{ url('/categorie', $categorie->id) }}" style="text-decoration: none; color: #007bff;">
                                {{ $categorie->NomCategorie }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        @stop
    </div>
@stop