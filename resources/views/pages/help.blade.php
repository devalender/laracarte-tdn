

@inject('madate','App\Utilitaires\madate')

 @if($madate->IsWeekend())
       {{"C'est le weekend"}}
      @else
       {{"Ce n'est pas le weekend"}}
      @endif

      {{$name}}


@extends('layouts/master',['title' => 'home'])
@section('contenu')
<h1> Ma démontration en pleine figure </h1>
@endsection

@section('piedpage')
corewin@ copyright 2020
@endsection
         <h1> Page Aide Demo-Corewin</h1> 
         
         <?php echo $name.' '.$localisation; ?>
