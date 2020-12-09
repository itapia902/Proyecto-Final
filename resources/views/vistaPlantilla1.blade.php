<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="../../public/css/bootstrap.min.css" rel "stylesheet">
    <link href="{{asset ('../../public/css/bootstrap.min.css')}}" rel "stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style media="screen">

      .container
      {
        text-align: center;
      }
    </style>

  </head>
  <body>


  <div class="container my-4">
    <a href="{{route('index.clientes')}}" style="color:#E5CF9C" class="btn btn-primary">Clientes</a>
    <a href="" style="color:#000000" class="btn btn-primary ">Obras</a>
    <a href="" class="btn btn-primary">Servicios</a>
  </div>
  <div class="container">
    @yield('a')
  </div>
  </body>
</html>
