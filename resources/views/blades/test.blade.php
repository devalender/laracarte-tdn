
@inject('madate','App\Utilitaires\madate')

 @if($madate->IsWeekend())
       {{"C'est le weekend"}}
      @else
       {{"Ce n'est pas le weekend"}}
      @endif


@extends('layouts/master',['title' => 'home'])

{{$name}}


      
      