@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">


    <div class="content">
       <!-- <div class="title m-b-md">
            Inventaire Remasterisé
        </div> -->

<div class="wrapper inventaire-index">
    <h1>Inventaire Remasterisé</h1>
    @foreach($inventaires as $inv)
        <div class="inventaire-item">
            <img src={{ $inv->image }} alt="icone">
            <h4><a href="/api/inventaires/{{ $inv->id }}">{{ $inv->name }}</a></h4>
        </div>
        @endforeach

</div>
<div class="lien">
<a href="/api/inventaires/ajout" class="ajout"><= Ajouter un produit</a><br/>
<a href="/" class="RetourA"><= Accueil</a>
</div>
    @endsection

