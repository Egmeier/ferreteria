<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cliente;
use Illuminate\Support\Facades\Auth;

class clientesController extends Controller
{
    
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $clientes=Cliente::get();
        return view('cliente.index')->with('cliente',$clientes);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::User()->hasRole(1))
        return view('cliente.create');
        else
        return redirect('cliente');
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'rut' => 'required|unique:clientes|max:255',
        
    ]);

        $cliente=new Cliente;
        $cliente->rut= $request->input('rut');
        $cliente->nombre= $request->input('nombre');
        $cliente->telefono= $request->input('telefono');
        $cliente->mail= $request->input('mail');
        $cliente->direccion= $request->input('direccion');

        $cliente->save();
        return redirect()->route('cliente.index');
     


    }

    /**
     * Display the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($codigo)
    {
        
         
            
    }

    

    /**
     * Show the form for editing the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_cliente)
    {
        
        $cliente=Cliente::find($id_cliente);
        return view('cliente.edit')->with('cliente',$cliente);
        
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_cliente)
    {
        if(Auth::User()->hasRole(1))
        {
        $cliente=Cliente::find($id_cliente);
        $cliente->rut= $request->input('rut');
        $cliente->nombre= $request->input('nombre');
        $cliente->telefono= $request->input('telefono');
        $cliente->mail= $request->input('mail');
        $cliente->direccion= $request->input('direccion');

        $cliente->save();
        return redirect()->route('cliente.index');
        }
        else
        return redirect('cliente');
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_cliente)
    {
        if(Auth::User()->hasRole(1))
        {
        $cliente=Cliente::find($id_cliente);
        $cliente->delete();
        return redirect()->route('cliente.index');
        }
        else
        return redirect('cliente');
    }
}
