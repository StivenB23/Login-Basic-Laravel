<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Basic</title>

    <link rel="stylesheet" href="{{ asset('materialize/css/materialize.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    {{-- directivas especiales
        @endguest-visit and @auth-auth --}}   
<nav>
    <div class="nav-wrapper  blue lighten-1">
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/">Home</a></li>
        @guest
        <li><a href="/login">Login</a></li>
        @else
        <li><a href="/dashboard">Dashboard</a></li>
        <li class="right"> 
            <form style="display:inline" action="/logout" method="POST">
            @csrf
                <a  href="#" onclick="this.closest('form').submit()" > <i class="material-icons">exit_to_app</i></a>
            </form>
        </li>
        @endguest
      </ul>
    </div>
  </nav>
 {{-- validation message --}}
 @if(session('status'))
 <br>
 <h5 class="green-text text-light-green">{{ session('status') }}</h5>
@endif
@yield('contenido')
<script src=" {{ asset('materialize/js/materialize.js')}} "></script>
</body>