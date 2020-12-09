<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ControllerPrincipal extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function Anadir()
    {
      $usuario = $_GET['usuario'];
      $contraseña = $_GET['password'];

      if ($usuario == "admin" && $contraseña == "123")
      {
          echo "BIENVENIDOOOOOOOOOO ! " . $usuario;
          setCookie("Usuario",$usuario, time() + 60);
          session_start();
          $_SESSION['Usuario'] = $usuario;

      }
      else
      {
          echo "Datos Incorrectos";

      }


    }
}
