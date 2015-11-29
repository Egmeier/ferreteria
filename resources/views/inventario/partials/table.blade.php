<h1 class="text-primary">Control de Inventario</h1>

<table class="table table-bordered dataTable" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">Código</th>
        <th class="text-center">Descripción</th>
        <th class="text-center">Tipo</th>
        <th class="text-center">Precio</th>
        <th class="text-center">Inventario</th>
        @if(Auth::User()->hasRole(1))
        <th class="text-center">Acciones</th>
        @endif
    </tr>
  </thead>
  <tbody>
    @foreach($inventario as $producto)
        <tr>
            <td class="text-center">{{ $producto->codigo }}</td>
            <td class="text-center">{{ $producto->descripcion }}</td>
            <td class="text-center">{{ $producto->tipo }}</td>
            <td class="text-center">{{ $producto->precio }}</td>
            <td class="text-center">{{ $producto->inventario }}</td>
@if(Auth::User()->hasRole(1))
        
        {!! Form::open(['route' => ['inventario.destroy', $producto->id_producto], 'method' => 'DELETE']) !!}

            <td class="text-center">
                <button type="submit" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
                <a href="{{ url("/inventario/".$producto->id_producto."/edit") }}" class="btn btn-info btn-xs">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                </a>
            </td>

        {!! Form::close() !!}
        
        @endif
        </tr>
    @endforeach
  </tbody>
  
</table>