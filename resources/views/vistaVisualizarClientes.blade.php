@extends('home')
@section('a')
<form>
    <div class="container my-2">
      <h1>Datos de clientes</h1>
      <table class="table table-light">
        <thead>
          <tr class="w3-dark-gray">
            <!--th scope="col">id</th-->
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Correo</th>
            <th scope="col">Teléfono 1</th>
            <th scope="col">Teléfono 2</th>
            <th scope="col"> Acciones </th>
            <th scope="col">  </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach($usuarios as $usuarios)
              <th scope="row">{{$usuarios->usuaNombre}}</th>
              <td>{{$usuarios->usuaApellido}}</td>
              <td>{{$usuarios->email}}</td>
              <td>{{$usuarios->usuaTelefono1}}</td>
              <td>{{$usuarios->usuaTelefono2}}</td>
              <td>
                  <a href="{{route('edit.clientes',$usuarios->id)}}" class="btn btn-primary">EDITAR</a>
              </td>
              <td>
                  <a href="{{route('delete.clientes',$usuarios->id)}}" class="btn btn-danger">DESHABILITAR CUENTA</a>
              </td>
            </tr>
            @endforeach
        </tbody>
        </table>
</form>
<br></br>
<!--a href="{{route('vista.clientes')}}" class="btn btn-primary">Registrarse</a -->
@endsection
