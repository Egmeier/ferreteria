@extends('master')
@section('content')

<h1 class="text-primary">Detalle de venta {{$venta->cod_venta }}</h1>

<table class="table table-bordered dataTable" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">Código</th>
        <th class="text-center">Descripción</th>
        <th class="text-center">Tipo</th>
        <th class="text-center">Precio</th>
        <th class="text-center">Cantidad vendida</th>
        
    </tr>
  </thead>
  <tbody> 
    @foreach($venta->productos as $producto)
        <tr>
            <td class="text-center">{{ $producto->codigo }}</td>
            <td class="text-center">{{ $producto->descripcion }}</td>
            <td class="text-center">{{ $producto->tipo }}</td>
            <td class="text-center">{{ $producto->precio }}</td>
            <td class="text-center">{{ $producto->pivot->cantidad_venta }}</td>

        
        
        </tr>
    @endforeach
  </tbody>
  
</table>

@endsection