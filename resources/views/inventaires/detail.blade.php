@extends('layouts.layout')

@section('content')
<div class="wrapper inventaire-details">
    <h1>Nom du Produit: {{ $produit->name }}</h1>
    <p class="type">Type - {{ $produit->type }}</p>
    <p class="description">Desscription - {{ $produit->description }}</p>
    <p class="prix">Prix - {{ $produit->prix }}</p>
    <p class="image">Image - {{ $produit->image }}</p>

    <form action="/api/inventaires/{{ $produit->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button>Supprimer</button>
    </form>


    <button><a href="/api/inventaires/edit/{{$produit->id}}" class="btn btn-primary"><button>Modifier</button></a></button>


</div>
    <a href="/api/inventaires" class="Retour"><= Retour a l'inventaire</a><br/>
<a href="/" class="RetourA"><= Retour a la page d'accueil</a>
@endsection

