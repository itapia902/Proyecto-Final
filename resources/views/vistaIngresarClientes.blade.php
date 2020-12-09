@extends('layouts.app')
@section('content')
<h1>Registro</h1>
<form action="{{route('ingresar.clientes')}}" method="Post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin"  >
    @csrf

    <!--input class="w3-input w3-border" name="usuaId" value= "1"></input-->
    <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
        <div class="w3-rest">
        <input class="w3-input w3-border" name="usuaNombre" type="text" placeholder="Nombres">
        </div>
    </div>
   
   
    <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
        <div class="w3-rest">
        <input class="w3-input w3-border" name="usuaApellido" type="text" placeholder="Apellidos">
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
        <div class="w3-rest">
        <input class="w3-input w3-border" name="usuaCorreo" type="email" placeholder="Email">
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
        <div class="w3-rest">
        <input class="w3-input w3-border" name="usuaTelefono1" type="text" placeholder="Telefono 1">
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
        <div class="w3-rest">
        <input class="w3-input w3-border" name="usuaTelefono2" type="text" placeholder="Telefono 2">
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-lock"></i></div>
        <div class="w3-rest">
        <input class="w3-input w3-border" name="usuaPassword" type="password" placeholder="Contraseña">
        </div>
    </div>
    <button class="btn btn-primary" type="submit" >Guardar Datos</button>
</form>
@endsection