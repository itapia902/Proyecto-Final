<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ControllerPaginas extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function InsertarClientes()
    {
        return view('vistaIngresarClientes');

    }
     public function VisualizarClientes()
    {
        $usuarios=App\Usuarios::all();        
        return view('vistaVisualizarClientes',compact('usuarios'));
    }

}
