<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://kit.fontawesome.com/0d1045cfed.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style media="screen">
      .container
      {
        text-align: center;
      }
      html, body {
                background-color:white; /*#E5CF9C*/
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0px;
                padding: 0px;               
            }
            .footer{
            position:relative;
            left:0;
            bottom:0;
            width:100%;
            color: white;
            text-align:center;
            }
    </style>

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script 
    src="{{ asset('js/app.js') }}" defer>
    $(document).ready(function () {

    $('.first-button').on('click', function () {

    $('.animated-icon1').toggleClass('open');
    });
    $('.second-button').on('click', function () {

    $('.animated-icon2').toggleClass('open');
    });
    $('.third-button').on('click', function () {

    $('.animated-icon3').toggleClass('open');
    });
    });
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app">
<!--Navbar-->
<!--Navbar-->
<!--Navbar-->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="background-color: #005a65!important;">
  <!-- Brand -->
  <div class="container">

  <a class="navbar-brand" href="{{ url('/') }}">
                
                <h1 style="color:#ffffff" ><span style="color:#E5CF9C">YOUR </span> ART <span style="color:#E5CF9C">IN</span> OUR<span style="color:#E5CF9C"> HANDS</span></h1>
        
            </a>
            <ul class="navbar-nav ml-auto">
        
                <!-- Dropdown -->
                @if(auth()->user()->usuaStatus=="Activo")
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color:#ffffff">
                        Mi cuenta
                    </a>
            
                    <div class="dropdown-menu">
                        @guest
                            <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>

                            @if (Route::has('register'))
                                <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif

                            @else
                                <?php

                                    $id=auth()->user()->id;


                                ?>                                
                                <a class="dropdown-item" href="{{route('edit.clientes',$id)}}">Datos personales</a>                                                                
                                <a class="dropdown-item" href="{{route('deshabilitar')}}">Deshabilitar Cuenta</a>
                                <a class="dropdown-item" style="color:black" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Salir') }}
                                </a>                                                                                                                                                                          
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                        
                        @endguest
                   
                        
                    </div>
                </li>
                @endif
          </ul>
  
  </div>
  

</nav>
        
        <div class="container my-4" style="text-align:center">  

            @if(auth()->user()->usuaStatus=="Activo")
            @auth
            <a href="{{route('misObras')}}" style="background-color:#005a65" class="btn btn-primary">Mis obras</a>
            @endauth

            <a href="{{route('home')}}" style="background-color:#E5CF9C" class="btn btn-primary">Todo</a>
            <a href="{{route('tatuajes')}}" style="background-color:#E5CF9C" class="btn btn-primary">Tatuajes</a>
            <a href="{{route('retratos')}}" style="background-color:#E5CF9C" class="btn btn-primary">Retratos</a>
            <a href="{{route('pinturas')}}" style="background-color:#E5CF9C" class="btn btn-primary">Pinturas</a>
            <a href="{{route('esculturas')}}" style="background-color:#E5CF9C" class="btn btn-primary">Esculturas</a>
            @endif
        </div>

        <div class="container my-2">
            @yield('content')
        </div>
    </div>
    
</body>
            <div class="footer" style="background-color:#801E36!important;">
                
                <a href="https://www.facebook.com/" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="https://www.twitter.com/" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="https://www.youtube.com/" class="youtube"><i class="fa fa-youtube-play"></i></a>
                <a href="https://www.instagram.com/" class="instagram"><i class="fa fa-instagram"></i></a>
                <p><small>TODOS LOS DERECHOS RESERVADOS</small></P>

            </div>    
</html>