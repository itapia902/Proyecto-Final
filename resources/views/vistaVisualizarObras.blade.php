
@extends('vistaPlantilla1')
@extends('layouts.app')
@section('a')
<form>
    <div class="container my-2">
      <h1>Datos de las Obras</h1>
      <table class="table table-light">
        <thead>
          <tr class="w3-dark-gray">
            <!--th scope="col">id</th-->
            <th scope="col">Tipo Obra</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
            <th scope="col">Imagen</th> 
            <th scope="col">Acciones</th>            
            <th scope="col"> </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach($obras as $obras)
              <th scope="row">{{$obras->tipoObra}}</th>
              <td>{{$obras->obraDescripcion}}</td>
              <td><label for="$">${{$obras->obraPrecio}}</label></td>
              <td>
                <img src="images/{{$obras->obraImagen}}" width="100px" height="100px"> 
              </td>
              <td>
                  <a href="{{route('edit.obras',$obras->obraId)}}" class="btn btn-primary">EDITAR</a>
              </td>
              <td>
                  <a href="{{route('delete.obras',$obras->obraId)}}" class="btn btn-danger">MARCAR COMO VENDIDO</a>
              </td>
            </tr>
            @endforeach
        </tbody>
        </table>
</form>
<br></br>
<a href="{{route('create.obras')}}" class="btn btn-primary">Registrar Obra</a>
@endsection
