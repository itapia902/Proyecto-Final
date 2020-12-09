@extends('layouts.app')
@section('content')
<form>
        <h3 style="color:#005a65"><strong>ESCULTURAS DISPONIBLES</strong></h3>

        <table class="table table-light">
        <thead>
          <tr class="w3-dark-gray">
            <th scope="col">Imagen Obra</th>
            <th scope="col">Caracteristicas</th>
            <th scope="col">Datos del cliente</th>          
          </tr>
        </thead>
        <tbody>
        @foreach($obras as $obras)
            @if($obras->tipoObra=="Esculturas")   
            <tr>
                
                    <th>
                    <div class="container">
                        <img src="images/{{$obras->obraImagen}}" width="300px" height="300px">     
                    </div>
                    
                    </th>
                    <th>

                    <div class="container">

                        <h4 style="text-align:left;color:black">
                        
                        Tipo: {{$obras->tipoObra}} <br> <br>
                        Descripcion: {{$obras->obraDescripcion}} <br><br>
                        Precio: ${{$obras->obraPrecio}} dólares<br><br>
                                                                                                        
                        </h4>
                                        
                    </div>
                    
                    </th>

                    <?php
                    
                        $usuarios=App\User::where('id', '=', $obras->obraClienteId)->get();                                              
                    ?>
                    <th>
                    
                        <div class="container">

                            @foreach($usuarios as $usuarios)
                            <h4 style="text-align:left;color:black">
                            
                            Nombres: {{$usuarios->usuaNombre}} {{$usuarios->usuaApellido}} <br> <br>                    
                            Telefono 1: {{$usuarios->usuaTelefono1}} <br><br>
                            Telefono 2: {{$usuarios->usuaTelefono1}} <br><br>
                                                                                    
                            </h4>
                            @endforeach
                        
                        </div>
                    </th>                                 
            </tr> 
            @endif                                                                                                                            
        @endforeach 
        </tbody>
        </table>
        <br></br>
        @auth<a href="{{route('create.obras')}}" style="background-color:#E5CF9C;color:white" class="btn btn-primary">Registrar Obra</a>@endauth 
        <br>
                    
</form>

@endsection