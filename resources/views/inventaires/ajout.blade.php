@extends('layouts.layout')

@section('content')
<div class="wrapper ajout-produit">
    <h1>Ajouter un nouveau produit</h1>
    <form action="/api/inventaires" method="POST">
        @csrf
        <label for="name"> Nom du produit:</label>
        <input type="text" id="name" name="name">
        <label for="type"> Type du produit:</label>
        <select name="type" id="type">
            <option value="rn2629">RN2629.Inc</option>
            <option value="bestbuy">Bestbuy.Inc</option>
            <option value="amazon">Amazon.Inc</option>
        </select>
        <label for="description"> Description du produit:</label>
        <input type="text" id="description" name="description">
        <label for="prix"> Prix du produit:</label>
        <input type="text" id="prix" name="prix"><br/>
        <label for="image"> Image Produit:</label>
        <input type="text" id="image" name="image" placeholder="Entrer Url de l'image"><br/>

        <input type="submit" value="Ajouter Produit">
    </form>
</div>

<a href="/api/inventaires" class="Retour"><= Retour a l'inventaire</a><br/>
<a href="/" class="RetourAccueil"><= Retour a la page d'accueil</a>
@endsection