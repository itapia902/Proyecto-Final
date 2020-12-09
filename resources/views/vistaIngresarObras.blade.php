
@extends('layouts.app')
@section('content')
<h3 style="color:#005a65"><strong>REGISTRO DE OBRAS</strong></h3>
<form action="{{route('store.obras')}}" method="POST" enctype="multipart/form-data" style="background-color:black" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" >
    @csrf
    
    @if (session('mensaje'))
      <div class="alert alert-success">
          {{ session('mensaje') }}
      </div>
  @endif

    <div class="w3-row w3-section" style="color:#005a65">
    
        <div class="w3-col" style="width:50px;color:#005a65"><i class="w3-xxlarge fa fa-list"></i></div>
        <div class="w3-rest">
            <select class="w3-col" style="width:300px;color:#005a65" id="tipoObra" name="tipoObra">
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
        <input class="w3-input w3-border" name="obraDescripcion" type="text" placeholder="Ingrese Descripcion de la obras" required>
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px;color:#005a65"><i class="w3-xxlarge fa fa-money"></i></div>
        <div class="w3-rest">
        <input class="w3-input w3-border" name="obraPrecio" type="number" step="any" placeholder="Ingrese el precio de la obra" required>
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px;color:#005a65"><i class="w3-xxlarge fa fa-image"></i></div>
        <div class="w3-rest">
        <input class="w3-input w3-border" name="obraImagen" type="file" style="color:black" placeholder="Ingrese el precio de la obra" required>
        </div>
    </div>
    <button class="btn btn-primary" style="background-color:#E5CF9C;color:white"type="submit" >Guardar Datos</button>
    <br>
    <br>
</form>
@endsection