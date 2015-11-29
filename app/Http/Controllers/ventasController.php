<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Venta;
use App\producto;

class ventasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('venta/index');
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
        $venta=new venta;
        $venta->save();
        $monto_total=0;

        $cantidadFilas=$request->input('cantidadFilas');
        for ($i=1; $i <= $cantidadFilas; $i++) { 
            $id_producto=$request->input('id_producto'.$i);
            $producto=producto::find($id_producto);

            $cantidad=$request->input('cantidad'.$i);
            $producto->inventario=$producto->inventario-$cantidad;
            $producto->save();
            $precioProducto=$producto->precio;
            $monto_total=($cantidad*$precioProducto)+$monto_total;
            $venta->id_cliente=null;
            $venta->monto_total=$monto_total; 
            $venta->productos()->save($producto,['cantidad_venta'=>$cantidad]);
        }

        $id=$venta->cod_venta;
        $venta=venta::find($id);
        $venta->monto_total=$monto_total;
        $venta->save();
        
        return redirect('venta');

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
        //
    }
}
