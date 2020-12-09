@extends('layouts.app')
@section('content')

<form>
        <h3 style="color:#005a65"><strong>MIS OBRAS PUBLICADAS</strong></h3>

        <table class="table table-light">
        <thead>
          <tr class="w3-dark-gray">
            <th scope="col">Imagen Obra</th>
            <th scope="col">Caracteristicas</th>
            <th scope="col">Acciones</th>          
          </tr>
        </thead>
        <tbody>
        @foreach($obras as $obras)
            @if(auth()->user()->id == $obras->obraClienteId)   
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
                   
                    <th>
                    
                        <div class="container">

                            <br>
                            <br>
                            <br>
                            <a href="{{route('edit.obras',$obras->obraId)}}" style="background-color:#E5CF9C;color:white"class="btn btn-primary">EDITAR</a>
                            <br>
                            <br>
                            <a href="{{route('delete.obras',$obras->obraId)}}" class="btn btn-danger" style="background-color:#801E36!important;color:white">MARCAR COMO VENDIDO</a>
              
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



                  


