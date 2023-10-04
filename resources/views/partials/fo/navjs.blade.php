<nav class="navbar main-nav fixed-top navbar-expand-lg large">
  <div class="container">
      <a class="navbar-brand" href=""><h3 style="color: white;">E-Street</h3></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="ti-menu text-white"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link scrollTo" href="/">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link scrollTo" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link scrollTo" href="#feature">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link scrollTo" href="#pricing">Magasin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link scrollTo" href="{{ route('inscriptionPage')}}">S'inscrire</a>
        </li>
        <li class="nav-item">
          <a class="nav-link scrollTo" href="{{ route('loginPage')}}">Se connecter</a>
        </li>
      </ul>
      </div>
  </div>
</nav>