@extends('layouts/master',['title' => 'Contact'])
@section('moncontenu')
<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
				<p>ENVOI DE MESSAGES</p>

				<p><span class="text-muted">Si vous avez des probleme envoi un mail a cette adresse, svp ! <a href="mailto:devaledner@gmail.com" data-helpful="laracarte" data-helpful-modal="on">Aide</a>.</span></p>

				<form action="#" method="POST">

		             {{csrf_field()}}<!--protection contre les failles-->

		            <div class="form-group ">
		                <label for="name" class="control-label">Name</label>
		                <input type="text" name="name" id="name" class="form-control" value="" required="required">
		                
		            </div>

		            <div class="form-group ">
		                <label for="email" class="control-label">Email</label>
		                <input type="email" name="email" value="" class="form-control" required="required">
		                
		            </div>


		            <div class="form-group ">
		            	<label for="message" class="control-label sr-only">Message</label>
		                <textarea class="form-control" name="message" rows="10" cols="10" required="required"></textarea>
		                
		            </div>

		            <div class="form-group">
		                  <button type="submit" class="btn btn-outline-primary">Soumettre le message &raquo;</button>
		            </div>
		        </form>
			</div>
		</div>
	</div>
@endsection