<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obras;
use App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $obras=App\Obras::where('obraStatus', '=', 'Disponible')->get();
        $usuarios=App\User::all();  
        
        if(Auth()->user()->usuaStatus =="Activo")
        {
    
            return view('home',compact('obras'));
        }
        else
        {
            return view ('vistaHabilitarCuenta');

        }
    
    }
}
