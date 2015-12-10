@extends('master')
@section('content')
<h1 class="text-primary">Registro de Ordenes de Compra</h1>

<table class="table table-bordered dataTable" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">Código</th>
        <th class="text-center">Fecha solicitud</th>
        <th class="text-center">Fecha entrega</th>
        <th class="text-center">Cliente</th>

        @if(Auth::User()->hasRole(1))
        <th class="text-center">Acciones</th>
        @endif
    </tr>
  </thead>
  <tbody>
    @foreach($registro as $ordencompra)
        <tr>
            <td class="text-center">{{ $ordencompra->id_oc }}</td>
            <td class="text-center">{{ $ordencompra->fecha_solicitud }}</td>
            <td class="text-center">{{ $ordencompra->fecha_entrega }}</td>
            <td class="text-center">{{ $ordencompra->cliente->nombre }}</td>
            
@if(Auth::User()->hasRole(1))
        
        {!! Form::open(['route' => ['ordenescompra.destroy', $ordencompra->id_oc], 'method' => 'DELETE']) !!}

            <td class="text-center">
                <button type="submit" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
                <a href="{{ url("/ordenescompra/".$ordencompra->id_oc) }}" class="btn btn-warning btn-xs">
                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                </a>
            </td>

        {!! Form::close() !!}
        
        @endif
        </tr>
    @endforeach
  </tbody>
  
</table>


@endsection