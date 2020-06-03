
<nav class="navbar navbar-expand-md navbar-light bg-light fixe-top">

   <img src="/logocorwnci.png" width="90" height="20" alt="">

  <a class="navbar-brand" href="{{route('acceuil') }}"><p><h3 class="text-primary">GESTION COLLECTIVITE</p></h3></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

   <div class="collapse navbar-collapse" id="navbarsExampleDefault1">
    <ul class="navbar-nav mr-auto">

     <li class="nav-item">
        <a class="nav-link" href="#">Laracarte</a>
      </li>
      <li class="nav-item {{ set_active_route('acceuil') }}">
        <a class="nav-link" href="{{route('acceuil') }}">home</a>
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
         <!-- Authentication si le user est un visiteur affiche login et Register-->
      @guest
      <li class="nav-item {{ set_active_route('login') }} ">
        <a class="nav-link" href="{{route('login') }}">Login</a>
      </li>

       <li class="nav-item {{ set_active_route('register') }}">
        <a class="nav-link" href="{{route('register') }}">Register</a>
      </li>

      @else
     <!-- Authentication sinon  le user est connecter et on affiche son nom et le bouton deconnexion-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
          </a>
     <!-- pour la deconnection il une requete de type POST, si on met un lien on fait une reque te type Get-->
     <!-- d'ou le systeme du formulaire et du code javascript-->
     <!--le formulaire est soumis dinamiquement via du jeva script avec une requete de type POST-->
         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         @csrf
         </form>

      </div>
    </li>

      @endguest
      </ul>

    </div>

   
 </nav>
