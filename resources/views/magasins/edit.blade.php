@extends('layouts/master')
@section('contenu')
<h1>EDITER LE MAGASIN : {{$magasins->nomagasin}}</h1>

<br/>
<!--On appelle la methode update avec son paramètres-->
	<form action="{{route('magasins.update', $magasins)}}" method="POST">
        
    {{ csrf_field() }}<!--protection contre les failles-->
    <!--PUT et PATCH sont pas connu pas les navigteur-->
     <!--On va donc créer un champ caché pour gerer xa-->

    <input type="hidden" name="_method" value="PUT"><!--on peut aussi ecrire method_field('PUT')-->

    <div class="form-group {{ $errors->has('nomagasin') ? ' has-error' : ''}}">

        <label for="nomagasin" class="control-label sr-only">Le Nom :</label>
        <input type="text" id="nomagasin" name="nomagasin" placeholder="Entrer le nom du magasin" value="{{old('nomagasin') ?? $magasins->nomagasin}}" class="form-control">
    <!--gestion des erreurs issues de la validation-->
      {!! $errors->first('nomagasin','<span class="help-block">:message</span>') !!}
    </div>
    

    <div class="form-group {{ $errors->has('localisation') ? ' has-error' : ''}}">
        <label for="localisation" class="control-label sr-only">L'Adresse :</label>
        <textarea name="localisation" id="localisation" cols="30" rows="10" placeholder="Entrer l'adresse du magasin" class="form-control">{{old('localisation') ?? $magasins->localisation}}</textarea>
        <!--gestion des erreurs issues de la validation-->
     {!! $errors->first('localisation','<span class="help-block">:message</span>') !!}
    </div>
    
<div class="form-group {{ $errors->has('slug') ? ' has-error' : ''}}">
        <label for="slug" class="control-label sr-only">Le Slug :</label>
        <input type="text" name="slug" id="slug" placeholder="Entrer le Slug du magasin" value="{{old('slug') ?? $magasins->slugn}}" class="form-control">
        <!--gestion des erreurs issues de la validation-->
     {!! $errors->first('slug','<span class="help-block">:message</span>') !!}
</div>

<hr>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-primary">Modifier Votre Magasin</button>
    </div>

     <!-- Cliquez sur <input type="submit" value="Valider"> pour soumettre votre requête.,
 sinon <input type="reset" value="Annuler">-->
 <hr>
    </form>
     <div class="form-group">
         <a class="btn btn-outline-success" href="{{route('home')}}">Annuler</a>  
     </div>

@endsection