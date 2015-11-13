<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\producto;

class productosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos=producto::get();
        return view('inventario.index')->with('inventario',$productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $producto=new producto;
        $producto->descripcion= $request->input('descripcion');
        $producto->tipo= $request->input('tipo');
        $producto->precio= $request->input('precio');
        $producto->inventario= $request->input('inventario');

        $producto->save();
        return redirect()->route('inventario.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_producto)
    {
        $producto=producto::find($id_producto);
        return view('inventario.edit')->with('producto',$producto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_producto)
    {
        $producto=producto::find($id_producto);
        $producto->descripcion= $request->input('descripcion');
        $producto->tipo= $request->input('tipo');
        $producto->precio= $request->input('precio');
        $producto->inventario= $request->input('inventario');

        $producto->save();
        return redirect()->route('inventario.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_producto)
    {
        $producto=producto::find($id_producto);
        $producto->delete();
        return redirect()->route('inventario.index');
    }

    
}
