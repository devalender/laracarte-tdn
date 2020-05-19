

@extends('layouts/master')

@section('contenu')

<h1>LISTE DE MAGASINS</h1>

<h1>{{ $magasins->count()}}  {{Str::plural('Magasin',$magasins->count())}} à Voir ! </h1>

@if(! $magasins-> isEmpty())
	
	<ul>
	@foreach($magasins as $magasin)
     <li> <a href="{{route('magasins.show',['magasin'=> $magasin] ) }}">{{ $magasin->nomagasin }}</a></li>
     @endforeach
    </ul>

{{ $magasins->links()}}
@else

<p>Aucun magasin enregistré !</p>

@endif

@endsection

