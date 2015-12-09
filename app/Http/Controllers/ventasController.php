<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Venta;
use App\producto;
use Illuminate\Support\Facades\Auth;

class ventasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('venta.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('venta.registro');
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
        'cantidadFilas' => 'numeric|min:1',
        
    ]);

        $venta=new Venta;
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
        $venta=Venta::find($id);
        return view('venta.show')->with('venta',$venta);
    }

    public function ingresarProducto(Request $request)
    {
         $producto =producto::where('codigo',$request->input('codigo'))->first();
        return response()->json(
            $producto->toJson()
            );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $venta=Venta::find($id);
        //return view('inventario.edit')->with('producto',$producto);
        return $venta->producto();
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
        $venta = Venta::find($id);

       foreach ($venta->productos as $ventaproducto) {
    //echo $producto->pivot->id_producto;
    //echo $producto->inventario;

        $producto=producto::find($ventaproducto->pivot->id_producto);
    $producto->inventario=$producto->inventario + $ventaproducto->pivot->cantidad_venta;
    $producto->save();


        }


      $venta->delete(); //borra la venta y la relacion producto venta
      return redirect('venta/registro');
    }

    public function registro()
    {
        $ventas=venta::get();
        return view('venta.registro')->with('registro',$ventas);
        
    }
}
