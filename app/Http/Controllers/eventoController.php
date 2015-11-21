<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\evento;
use Illuminate\Support\Facades\Auth;

class eventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evento=evento::get();
        return view('calendario.index')->with('calendario',$evento);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::User()->hasRole(1))
        return view('calendario.create');
        else
        return redirect('calendario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::User()->hasRole(1))
        {
        $evento=new evento;
        $evento->pedido= $request->input('pedido');
        $evento->cantidad= $request->input('cantidad');
        $evento->fecha_inicio= $request->input('fecha_inicio');
        $evento->fecha_entrega= $request->input('fecha_entrega');
     
        $evento->save();
        return redirect()->route('calendario.index');
        }
        else
        return redirect('calendario');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_evento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_evento)
    {
        if(Auth::User()->hasRole(1))
        {
        $evento=evento::find($id_evento);
        return view('calendario.edit')->with('evento',$evento);
        }
        else
        return redirect('calendario');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_evento)
    {
        if(Auth::User()->hasRole(1))
        {
        $evento=evento::find($id_evento);
        $evento->pedido= $request->input('pedido');
        $evento->cantidad= $request->input('cantidad');
        $evento->fecha_inicio= $request->input('fecha_inicio');
        $evento->fecha_entrega= $request->input('fecha_entrega');

        $producto->save();
        return redirect()->route('calendario.index');
        }
        else
        return redirect('calendario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_evento)
    {
        if(Auth::User()->hasRole(1))
        {
        $evento=evento::find($id_evento);
        $evento->delete();
        return redirect()->route('calendario.index');
        }
        else
        return redirect('calendario');
    }

    
}