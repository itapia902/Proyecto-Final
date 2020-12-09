
@extends('layouts.app')
@section('content')
<h2 style="color:#005a65" class="w3-center">ACTUALICE DATOS</h2>

<form action="{{route('update.obras',$model->obraId)}}" method="GET" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
  @csrf

  @if (session('mensaje'))
      <div class="alert alert-success">
          {{ session('mensaje') }}
      </div>
  @endif
  
  <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px;color:#005a65"><i class="w3-xxlarge fa fa-list"></i></div>
        <div class="w3-rest">
            <select class="w3-col" style="width:300px" id="tipoObra" name="tipoObra">
                <option value="Tatuajes">Tatuajes</option>
                <option value="Pinturas">Pinturas</option>
                <option value="Retratos">Retratos</option>
                <option value="Esculturas">Esculturas</option>
            </select>
        </div>
    </div>

  <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px;color:#005a65"><i class="w3-xxlarge fa fa-file"></i></div>
        <div class="w3-rest">
        <input class="w3-input w3-border" name="obraDescripcion" value="{{$model->obraDescripcion}}" type="text" placeholder="Ingrese la nueva descripcion de la obras" required>
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px;color:#005a65"><i class="w3-xxlarge fa fa-money"></i></div>
        <div class="w3-rest">
        <input class="w3-input w3-border" name="obraPrecio" type="number" step="any" value="{{$model->obraPrecio}}" placeholder="Ingrese el nuevo precio de la obra" required>
        </div>
    </div>
  <br>
  <button class="btn btn-primary" style="background-color:#E5CF9C;color:white" type="submit" >Actualizar Datos Obras</button>
  <br>
  <br>
</form>  
@endsection
