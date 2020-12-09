<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Obras;
use App;

class ControllerCrudObras 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obras=App\Obras::where('obraStatus', '=', 'Disponible')->get();
        //return view ('vistaEditarObras',compact('model'));

       //$obras=App\Obras::all();        
        return view('home',compact('obras'));
       
    }
    public function MisObras()
    {
        
        $obras=App\Obras::where('obraStatus', '=', 'Disponible')->get();        
        return view('vistaMisObras',compact('obras'));
    
    }
    public function Tatuajes()
    {
        $obras=App\Obras::where('obraStatus', '=', 'Disponible')->get();        
        return view('vistaIndividuales\vistaTatuajes',compact('obras'));

   }
   public function Retratos()
    {
        $obras=App\Obras::where('obraStatus', '=', 'Disponible')->get();        
        return view('vistaIndividuales\vistaRetratos',compact('obras'));

   }
   public function Pinturas()
    {
        $obras=App\Obras::where('obraStatus', '=', 'Disponible')->get();        
        return view('vistaIndividuales\vistaPinturas',compact('obras'));

   }
   public function Esculturas()
    {
        $obras=App\Obras::where('obraStatus', '=', 'Disponible')->get();        
        return view('vistaIndividuales\vistaEsculturas',compact('obras'));
   }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('vistaIngresarObras'); 
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
            if($request->hasfile('obraImagen'))
            {
                $status="Disponible";

                //$obraImagen['obraImagen']=$request->file('obraImagen')->move(public_path().'/images/');/
                $file=$request->file('obraImagen');
                $obraImagen=time().$file->getClientOriginalName(); 
                $file->move(public_path().'/images/',$obraImagen);

                $nuevoObra=new App\Obras;      
                $nuevoObra->tipoObra=$request->tipoObra;
                $nuevoObra->obraPrecio=$request->obraPrecio;
                $nuevoObra->obraDescripcion=$request->obraDescripcion;
                $nuevoObra->obraImagen=$obraImagen;
                $nuevoObra->obraStatus=$status;
                $id=Auth::id();
                $nuevoObra->obraClienteId=$id;
                $nuevoObra->save();                   
            }
        
            else
            {
                return ("No se cargo la imagen");

            } 
            return back()->with('mensaje','Obra ingresada exitosamente');
            
       /* return back();*/
        //
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
        $model=App\Obras::where('obraId', '=', $id)->firstOrFail();
        return view ('vistaEditarObras',compact('model'));
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
        //
        obras::where('obraId',$id)->update(array(
            'obraDescripcion'=>$request->obraDescripcion,'obraPrecio'=>$request->obraPrecio,'tipoObra'=>$request->tipoObra
            
            ));

            return back()->with('mensaje','Se ha cambiado sus datos exitosamente');
                
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        obras::where('obraId',$id)->update(array(
            'obraStatus'=>"Vendida"
            
         ));
             
        return redirect('/home');  
  
    }
}