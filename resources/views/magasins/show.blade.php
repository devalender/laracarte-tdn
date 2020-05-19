@extends('layouts/master')

@section('contenu')

<h1> INFORMATIONS SUR LE MAGASIN </h1>

<p  class = "text-justify">Nom : {{ $magasins->nomagasin }}</p>
<p  class = "text-justify">Localisation : {{ $magasins->localisation}}</p>
<p class = "text-justify">Slug : {{ $magasins->slug}}</p>
<hr>
<a class="btn btn-outline-primary" href="{{route('magasins.edit', $magasins->id) }}">Modifier</a>

<a href="{{route('magasins.destroy', $magasins)}}" data-method="DELETE" data-confirm="Voulez-Vous Supprimer?" class="btn btn-danger">Supprimer</a>

<hr>

<p><a class="btn btn-outline-success" href="{{route('home') }}">Home</a></p>
@endsection


