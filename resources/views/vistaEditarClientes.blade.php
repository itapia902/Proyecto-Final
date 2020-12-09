
@extends('layouts.app')
@section('content')
<h2 style="color:#005a65" class="w3-center">SUS DATOS PERSONALES</h2>

<form action="{{route('update.clientes',$model->id)}}" method="Post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
  @method('PUT')
  @csrf

  @if (session('mensaje'))
      <div class="alert alert-success">
          {{ session('mensaje') }}
      </div>
  @endif

  @if ($errors->any())
    <div class="errors">        
        <ul>
            @foreach ($errors->all() as $error)
            
            <div class="alert alert-danger">
                {{$error}} 
            </div>
                               
            @endforeach
        </ul>
    </div>
@endif
 
  <div class="w3-row w3-section">
      <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
      <div class="w3-rest">
      <input class="w3-input w3-border" name="usuaNombre" type="text" placeholder="Nombres" value="{{$model->usuaNombre}}" maxlength="30" required>
      </div>
  </div>

  <div class="w3-row w3-section">
      <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
      <div class="w3-rest">
      <input class="w3-input w3-border" name="usuaApellido" type="text" value="{{$model->usuaApellido}}" maxlength="30" required>
      </div>
  </div>

  <div class="w3-row w3-section">

      <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
      <div class="w3-rest">
      <input class="w3-input w3-border" name="email" type="email" value="{{$model->email}}" maxlength="50" readonly>
      </div>
  </div>

  <div class="w3-row w3-section">
      <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
      <div class="w3-rest">
      <input class="w3-input w3-border" name="usuaTelefono1" type="text" value="{{$model->usuaTelefono1}}" maxlength="10" required>
      </div>
  </div>

  <div class="w3-row w3-section">
      <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
      <div class="w3-rest">
      <input class="w3-input w3-border" name="usuaTelefono2" type="text" value="{{$model->usuaTelefono2}}" maxlength="10">
      </div>
  </div>
  <br>
  <button class="btn btn-primary" style="background-color:#E5CF9C;color:white" type="submit" >Actualizar Datos</button>
  <br>
  <br>
</form>  
@endsection
