<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <title>@yield('title')</title>{{--Le titre change en fonction de la page, a recupéré ailleurs--}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">{{--Link un fichier CSS avec laravels. Le fichier CSS est dans public/css--}}
  </head>
  <body>
    <header>
      <h2>Images d'animaux trop mignons </h2>
      @if (Auth::check())
        <span>Bienvenue : {{ Auth::user()->name }}</span>
      @endif
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="contact">Contact</a></li>
        <li><a href="magasin">Magasin</a></li>
        @if (Auth::check()) {{--Si l'utilisateur est co--}}
          <li><a href="logout">Logout</a></li>
          <li><a href="panier">Panier</a></li>
        @else {{--Si l'utilisateur n'est pas co--}}
          <li><a href="login">Login</a></li>
          <li><a href="register">Register</a></li>
        @endif
      </ul>
    </header>

    <div class='container'>@yield('content')</div>

    <footer>
      <p>Copyright : ITAkademy 2017</p>
      <p><a href="/contact">Nous contacter</a></p>
    </footer>
  </body>
</html>
