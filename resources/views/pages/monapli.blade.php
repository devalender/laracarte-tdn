@extends('layouts/master')
@section('contenu')
	<form action="" method="post">
    <div>

    	{{csrf_field()}}

        <label for="name"></label>
        <input type="text" id="name" name="url_name" placeholder="Entrez votre URL" value="{{ old('url_name') }}">

    </div>
    <!--<div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>-->
    <div class="button">
        <button type="submit" >Racourcir l'URL</button>
    </div>
    {!! $errors->first('url_name','<p class="error-msg">:message</p>') !!}
   <!-- Cliquez sur <input type="submit" value="Valider"> pour soumettre votre requête.,
 sinon <input type="reset" value="Annuler">-->
@endsection