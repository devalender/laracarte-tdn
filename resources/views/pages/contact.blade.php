@extends('layouts/master',['title' => 'Contact'])
@section('moncontenu')
<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
				<p>ENVOI DE MESSAGES</p>

				<p><span class="text-muted">Si vous avez des probleme envoi un mail a cette adresse, svp ! <a href="mailto:{{ config('app.cheminmail') }}" data-helpful="laracarte" data-helpful-modal="on">Aide</a>.</span></p>

				<form action="{{route('contact')}}" method="POST">

		             {{csrf_field()}}<!--protection contre les failles-->

		            <div class="form-group">
		                <label for="name" class="control-label">Nom Complet</label>
		                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}"  required="required">
		               {!! $errors->first('name','<span class="help-block">:message</span>') !!}
		            </div>

		            <div class="form-group ">
		                <label for="email" class="control-label">Adresse Mail</label>
		                <input type="email" name="email" value="{{ old('email') }}" class="form-control" required="required">
		                {!! $errors->first('email','<span class="help-block">:message</span>') !!}
		            </div>


		            <div class="form-group ">
		            	<label for="messages" class="control-label sr-only">Message</label>
		                <textarea class="form-control" id="messages" name="messages" rows="10" cols="10" required="required">{{ old('messages') }}</textarea>
		                {!! $errors->first('messages','<span class="help-block">:message</span>') !!}
		            </div>

		            <div class="form-group">
		                  <button type="submit" class="btn btn-outline-primary" formnovalidate="">Soumettre le message &raquo;</button>
		            </div>
		        </form>
			</div>
		</div>
	</div>
@endsection
