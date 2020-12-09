<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
                
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title>MIELL´S ART</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://kit.fontawesome.com/0d1045cfed.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


        <style>
            html, body {
                background-color:white; /*#E5CF9C*/
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;                
            }

            .full-height {
                height: 13vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right:10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #ffffff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .nav_home{
                background-color:#000000;
            }

            .m-b-md {
                margin-bottom: 30px;
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
    </head>

    <nav class="" style="background-color: #005a65!important;">
    
        <div class="flex-center position-ref full-height">
        
        <a class="navbar-brand" href="{{ url('/') }}">
                
                <h1 style="color:#ffffff" ><span style="color:#E5CF9C">YOUR </span> ART <span style="color:#E5CF9C">IN</span> OUR<span style="color:#E5CF9C"> HANDS</span></h1>
        
            </a>
        

            @if (Route::has('login'))
                
                <div class="top-right links">
                    @auth
                        <a href="{{url('/home')}}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Iniciar sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarse</a>
                        @endif
                    @endauth
                </div>
                
            @endif
        </div>       
        
    </nav>
    
        @if (session('mensaje'))
        <div class="alert alert-success">
            {{ session('mensaje') }}
        </div>
        @endif
        
      
    <body>
        <h2 style="color:dark;padding-left:40px">Busca lo que necesitas !</h2>

        <div id="carouselExampleControls" style="padding:35px;padding-top:7px;padding-bottom:9px" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img class="d-block w-100" src="/images/escultura.jpg" width=60px height=600px>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="/images/pinturas.jpg" width=60px height=600px>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="/images/tatuaje1.jpeg" width=60px height=600px>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="/images/pintura2.jpg" width=60px height=600px>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="/images/escultura3.jpg" width=60px height=600px>
                </div>

            </div>

            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        
        <h2 style="padding-left:40px;padding-top:px">CATEGORIAS</h2>   
      
        <div align="center">
        <center>
        <table border="0" cellpadding="0" cellspacing="0" width="100">
        <tr>
            <td><img  src="/images/esculturaWelcome.jpg"width="200px" height="200px" style=" margin-right:100px" alt=""></td>

            <td><img  src="/images/tatuajeWelcome.jpg" width="200px" height="200px" style=" margin-right:100px" alt=""></td>
            
            <td><img  src="/images/retratoWelcome.jpg" width="200px" height="200px" style=" margin-right:100px" alt=""></td>
            
            <td><img  src="/images/pinturaWelcome.jpg" width="175px" height="175px" style=" margin-right:100px"alt=""></td>

 
        </tr>
        <tr>
            <td>
                <h3 style="margin-left:40px">Esculturas</h3>
            </td>
            <td>
                <h3 style="margin-left:60px">Tatuajes</h3>
            </td>
            <td>
                <h3 style="margin-left:45px">Retratos</h3>
            </td>
            <td>
                <h3 style="margin-left:42px">Pinturas</h3>
            </td> 
                                 
        </tr>
        </table>
        </center>
        </div>

        <BR></BR>
        <h2 style="padding-left:40px;padding-top:px">¿CÓMO EMPEZAR?</h2> 
              
      <!--Como EMPEZAR!--><
      @guest
      <div align="center">
      <center>
      <table border="0" cellpadding="0" cellspacing="0" width="100">
      <tr>

        <td >
            <!--Div Registrarse!-->   
            <div style="margin-right:100px">

                <center><i class="fas fa-user" style="font-size:100px;color:#005a65"></i></center>
                <h3>_Regístrate_</h3>                
                <p>
                    Ingresa tus datos en el siguiente enlace:<a style="color:blue "href="{{ route('register')}}"> <br>Registrate aquí</a>
                </p>
                
                
            </div>

        </td>
        
        <td>
            <!--Div flecha hacia delante!-->    
            <div style="padding-right:100px">

                <i  class="far fa-arrow-alt-circle-right" style="font-size:100px;color:#801E36"></i>
            
            </div>
                    
        </td>

        <td>
            <!--Div flecha Compra y vende!-->   
            <i class="far fa-money-bill-alt"  style="font-size:100px;color:#005a65"></i>
            <h3>Compra y vende</h3>
    
        </td>
         

      </tr>
      
      </table>
      </center>
      </div>
      @endguest

        <!--Empieza Ya !-->
        @auth
        <div align="center">

            <a href="{{url('/home')}}" class="btn btn-primary">PUBLICA DESDE <br>AHORA</a>   
        
        </div>
        @endauth
        <br>
        <!--ACERCA DE NOSOTROS!-->
        <div style="margin-right:100px">
            <h2 style="padding-left:40px;padding-top:px">ACERCA DE NOSOTROS</h2>   
            <div class="container my-5">
            
                <center><h4>

                Miel’s Art es un proyecto de formación cargado de ilusión que 
                crece cada día gracias a nuestros artistas.<br>
                Somos una página intermediaria para la compra y venta de obras de arte y adaptada a la demanda actual <br>con dos objetivos principales: darte una formación 
                práctica y estratégica de venta online y ayudarte todo lo <br>
                posible a potenciar tus proyectos y marca personal.
                Detrás de todo está un equipo apasionado de desarrollo<br> de 
                software que se esfuerza todos los días para que la página siga siendo una referencia.

                </h4></center>
            
            
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