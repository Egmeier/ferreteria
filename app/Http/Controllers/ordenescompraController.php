<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Perno;
use App\Ordencompra;

class ordenescompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ordencompra.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ordenescompra.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
        'fecha_entrega' => 'required|after:'.$request->input('fecha_solicitud'),
        'cantidadFilas' => 'numeric|min:1',
        
    ]);
        


       $ordencompra=new Ordencompra;
       $ordencompra->fecha_solicitud=$request->input('fecha_solicitud');
       $ordencompra->fecha_entrega=$request->input('fecha_entrega');
       $ordencompra->id_cliente=$request->input('lista');
       $ordencompra->save(); 


        $cantidadFilas=$request->input('cantidadFilas');
        for ($i=1; $i <= $cantidadFilas; $i++) { 
            
            $perno=new Perno;
            $perno->codigo=$request->input('codigo'.$i);
            $perno->descripcion=$request->input('descripcion'.$i);
            $perno->cantidad=$request->input('cantidad'.$i);
            $perno->id_oc=$ordencompra->id_oc;
            $perno->save();
            
        }


      return redirect('ordenescompra');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ordencompra=Ordencompra::find($id);
        return view('ordencompra.show')->with('ordencompra',$ordencompra);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ordencompra=Ordencompra::find($id);
        $ordencompra->delete();
        return redirect('ordenescompra/registro');
    }

    public function registro()
    {
        $ordencompra=Ordencompra::get();
        return view('ordencompra.registro')->with('registro',$ordencompra);
        
    }
}
