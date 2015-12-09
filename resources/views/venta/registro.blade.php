@extends('master')
@section('content')
<h1 class="text-primary">Registro de Ventas</h1>

<table class="table table-bordered dataTable" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">Código</th>
        <th class="text-center">Monto Total</th>
        <!--<th class="text-center">Cliente</th>-->
        @if(Auth::User()->hasRole(1))
        <th class="text-center">Acciones</th>
        @endif
    </tr>
  </thead>
  <tbody>
    @foreach($registro as $Venta)
        <tr>
            <td class="text-center">{{ $Venta->cod_venta }}</td>
            <td class="text-center">{{ $Venta->monto_total }}</td>
           <!-- <td class="text-center">{{ $Venta->id_cliente }}</td> -->
            
@if(Auth::User()->hasRole(1))
        
        {!! Form::open(['route' => ['venta.destroy', $Venta->cod_venta], 'method' => 'DELETE']) !!}

            <td class="text-center">
                <button type="submit" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
                <a href="{{ url("/venta/".$Venta->cod_venta) }}" class="btn btn-info btn-xs">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                </a>
            </td>

        {!! Form::close() !!}
        
        @endif
        </tr>
    @endforeach
  </tbody>
  
</table>


@endsection