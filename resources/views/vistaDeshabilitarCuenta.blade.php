@extends('layouts.app')
@section('content')

<div class="container my-5" style="padding-bottom:154px">
<h1 style="color:#005a65"><strong>Que lástima que nos abandones</strong></h1>

<i style="font-size:75px"class="far fa-frown"></i> 

<h3 style="color:#005a65"><strong>Guardaremos tus obras para cuando decidas regresar</strong></h3>

<div class="container my-5">

    <?php
    
        $id=auth()->user()->id ;        
    ?>

    <a href="{{route('delete.clientes',$id)}}" style="background-color:#801E36!important;color:white"  class="btn btn-danger">DESHABILITAR CUENTA</a>

</div>

</div>
@endsection