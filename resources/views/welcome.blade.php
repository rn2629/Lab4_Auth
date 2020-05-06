@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <img src="/img/img1.png" alt="logo inventaire">
        <div class="title m-b-md">
            Gestion d'inventaire Remasterisé
        </div>
        <p class="msg">{{ session('msg') }}</p>
        <a href="/api/inventaires/ajout"> Ajouter un produit</a><br />
        <a href="/api/inventaires"> Afficher la liste de produit</a>
    </div>
</div>
    @endsection

