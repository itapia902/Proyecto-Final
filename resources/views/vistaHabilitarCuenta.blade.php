@extends('layouts.app')
@section('content')

<div class="container my-5" style="padding-bottom:154px">
<h1 style="color:#005a65"><strong>Estamos muy contentos que vuelvas con nosotros</strong></h2>

<i style="font-size:75px"class="far fa-smile"></i> 

<h1 style="color:#005a65">Todas tus obras siguen como las dejaste <strong></strong></h2>

<div class="container my-5">

    <?php
    
        $id=auth()->user()->id ;        
    ?>

    <a href="{{route('habilitar',$id)}}" style="background-color:#801E36!important;color:white" class="btn btn-primary">HABILITAR CUENTA</a>

</div>

</div>

@endsection