
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Evenements</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="devalender" content="devalender 1.33" />

	<style>
		.bling {
			background-color:orange;
		}
	</style>

</head>

<body>
	<h1>En cours {{$evenements->count()}} Concert ! </h1>
	
	@foreach($evenements as $evenement)

	<article class="{{ $loop->index % 2 == 0 ? 'bling' : '' }}">

		<h1>{{ $evenement->nom }} </h1>
		<p>{{ $evenement->description }} </p>
		<p>Lieu : {{ $evenement->localisation }} </p>
		<p>Date : {{ $evenement->datedebut }} </p>
	    <p>{!! format_price($evenement) !!}</p>
		</article>

    @if(!$loop->last)

	<hr>
    
    @endif
	
	@endforeach
</body>

</html>
