@extends('master')
@section('content')

<h1 class="text-primary">Detalle de Orden compra N° {{$ordencompra->id_oc }}</h1>

<table class="table table-bordered dataTable" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">Código</th>
        <th class="text-center">Descripción</th>
        <th class="text-center">Cantidad</th>
    </tr>
  </thead>
  <tbody> 
    @foreach($ordencompra->pernos as $perno)
        <tr>
            <td class="text-center">{{ $perno->codigo }}</td>
            <td class="text-center">{{ $perno->descripcion }}</td>
            <td class="text-center">{{ $perno->cantidad }}</td>

        
        
        </tr>
    @endforeach
  </tbody>
  
</table>

@endsection