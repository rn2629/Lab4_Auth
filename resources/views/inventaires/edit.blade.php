@extends('layouts.layout')

@section('content')
    <div class="wrapper ajout-produit">
        <h3>Modification Produit</h3>

        <form method="POST" action="/api/inventaires">
            @csrf
            <label for="name"> Nom du produit:</label>
            <input type="text" id="name" name="name" value="{{ $produit->name }}" placeholder="Entrer le nom du produit">
            <label for="type"> Type du produit:</label>
            <select name="type" id="type" value="{{ $produit->type }}">
                <option value="rn2629">RN2629.Inc</option>
                <option value="bestbuy">Bestbuy.Inc</option>
                <option value="amazon">Amazon.Inc</option>
            </select>
            <label for="description"> Description du produit:</label>
            <input type="text" id="description" name="description" value="{{ $produit->description }}">
            <label for="prix"> Prix du produit:</label>
            <input type="text" id="prix" name="prix" value="{{ $produit->prix }}"><br/>
            <label for="image"> Image Produit:</label>
            <input type="text" id="image" name="image"  value="{{ $produit->image }}" placeholder="Entrer Url de l'image"><br/>


            <input type="submit" value="Modifier Produit">

        </form>

    </div>

    <a href="/api/inventaires" class="Retour"><= Retour a l'inventaire</a><br/>
    <a href="/" class="RetourAccueil"><= Retour a la page d'accueil</a>
    @endsection