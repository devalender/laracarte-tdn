<nav class="navbar navbar-expand-md navbar-light bg-light static-top">

   <img src="/logocorwnci.png" width="90" height="40" alt="">

  <a class="navbar-brand" href="{{route('home') }}"><p><h3 class="text-primary">GESTION COLLECTIVITE</p></h3></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

   <div class="collapse navbar-collapse" id="navbarsExampleDefault1">
    <ul class="navbar-nav mr-auto">

     <li class="nav-item">
        <a class="nav-link" href="#">Laracarte</a>
      </li>
      <li class="nav-item {{ set_active_route('home') }}">
        <a class="nav-link" href="{{route('home') }}">home</a>
      </li>
      <li class="nav-item {{ set_active_route('about') }}">
        <a class="nav-link" href="{{route('about') }}">About</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Artisans</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
       </li>
      
      <li class="nav-item {{ set_active_route('contact') }}">
      <a class="nav-link" href="{{route('contact') }}">Contact</a>
      <li>

      </ul>
</div>

<div class="collapse navbar-collapse" id="navbarsExampleDefault2">
      <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Register</a>
      </li>

      </ul>

    </div>

   
 </nav>