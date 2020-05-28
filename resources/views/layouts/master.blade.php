<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{{ app()->getLocale() }}" lang="{{ app()->getLocale() }}">

<head>

	<title>{{ page_title($title ?? '') }}</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Optional JavaScript -->
   
    <script 
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>


    <!-- Bootstrap CSS -->
    <link 
    rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
    crossorigin="anonymous">

    <link 
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
    rel="stylesheet" 
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" 
    crossorigin="anonymous">

   	<link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   	<link rel="stylesheet" type="text/css" href="{{ asset('css/application.css') }}">


</head>

<style> 
footer {
margin: 4em 0;
}

</style>

<body>
   
   @include('layouts/_nav') <!--ajout de la barre de navigation (menue)-->

	<div class="container">
		@yield('moncontenu')
	</div>

	<div class="container">
      @include('layouts/_pied') 
	</div>




 @include('flashy::message')
<script src="/js/larails.js"></script>


</body>

</html>
