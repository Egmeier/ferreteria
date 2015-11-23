<h1 class="text-primary">Calendario</h1>



table class="table table-bordered dataTable" id="MyTable">
  <thead>
    <tr>
     <th class="text-center">ID</th>
     <th class="text-center">Pedido</th>
     <th class="text-center">Cantidad</th>
     <th class="text-center">Fecha inicio</th>
     <th class="text-center">Fecha entrega</th>
     @if(Auth::User()->hasRole(1))
     <th class="text-center">Acciones</th>
     @endif
     </tr>
  </thead>
  <tbody>    
     @foreach($calendario as $evento)
            <tr>
                <td class="text-center">{{ $evento->id_evento }}</td>
                <td class="text-center">{{ $evento->pedido }}</td>
                <td class="text-center">{{ $evento->cantidad }}</td>
                <td class="text-center">{{ $evento->fecha_inicio }}</td>
                <td class="text-center">{{ $evento->fecha_entrega }}</td>

            {!! Form::open(['route' => ['calendario.destroy', $evento->id_evento], 'method' => 'DELETE']) !!}

                <td class="text-center">
                    <button type="submit" class="btn btn-danger btn-xs">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>
                    <a href="{{ url("/calendario/".$evento->id_evento."/edit") }}" class="btn btn-info btn-xs">
                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                    </a>
                </td>

            {!! Form::close() !!}




            </tr>
        @endforeach
      </tbody>
      
    </table>