<?php

namespace App\Http\Controllers;

use App;
use App\User;
use App\Obras;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ControllerCrudClientes 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios=App\User::where('usuaStatus', '=', 'Activo')->get();

        //$usuarios=App\User::all();        
        return view('vistaVisualizarClientes',compact('usuarios'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $status="Activo";
        $nuevoCliente=new App\User;        
        $nuevoCliente->usuaPassword=$request->usuaPassword;
        $nuevoCliente->usuaNombre=$request->usuaNombre;
        $nuevoCliente->usuaApellido=$request->usuaApellido;
        $nuevoCliente->email=$request->email;
        $nuevoCliente->usuaTelefono1=$request->usuaTelefono1;
        $nuevoCliente->usuaTelefono2=$request->usuaTelefono2;
        $nuevoCliente->usuaStatus=$status;


        $nuevoCliente->save();        
        return back();
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model=App\User::where('id', '=', $id)->firstOrFail();
        return view ('vistaEditarClientes',compact('model'));
        //
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        
            User::where('id',$id)->update(array(
                'usuaNombre'=>$request->usuaNombre,'usuaApellido'=>$request->usuaApellido,'email'=>$request->email,
                'usuaTelefono1'=>$request->usuaTelefono1,'usuaTelefono2'=>$request->usuaTelefono2
                ));

        return back()->with('mensaje','Se ha cambiado sus datos exitosamente');
                     
    }
    public function  Deshabilitar()
    {
        return view ('vistaDeshabilitarCuenta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$status="No disponible";
        
        User::where('id',$id)->update(array(
            'usuaStatus'=>"Inactivo"


            
         ));

        $obras=App\Obras::where('obraClienteId', '=',$id)->get();

        foreach($obras as $obras)
        {
            if($obras->obraStatus=="Disponible")

            {
                Obras::where('obraId',$obras->obraId)->update(array(
                    'obraStatus'=>"No disponible"                                    
                 ));
            }
        }         
         Auth::logout();
         return redirect('/welcome')->with('mensaje','Se ha deshabilitado su cuenta');

        //User::where('id',$id)->delete();

        //return back();
        //
    }
    public function Habilitar($id) /*Vista para Habilitar la cuenta*/
    {
        User::where('id',$id)->update(array(
            'usuaStatus'=>"Activo"
            
         ));

        $obras=App\Obras::where('obraClienteId', '=',$id)->get();

        foreach($obras as $obras)
        {
            if($obras->obraStatus=="No disponible")

            {
                Obras::where('obraId',$obras->obraId)->update(array(
                    'obraStatus'=>"Disponible"                                    
                 ));
            }
        }         
         Auth::logout();
        return redirect('/welcome')->with('mensaje','Se ha habilitado su cuenta');        
    }
}