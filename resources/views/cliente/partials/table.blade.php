<h1 class="text-primary">Control de Cliente</h1>

<table class="table table-bordered dataTable" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">Rut</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Telefono</th>
        <th class="text-center">Mail</th>
        <th class="text-center">Direccion</th>
        @if(Auth::User()->hasRole(1))
        <th class="text-center">Acciones</th>
        @endif
    </tr>
  </thead>
  <tbody>
    @foreach($cliente as $cliente)
        <tr>
            <td class="text-center">{{ $cliente->rut }}</td>
            <td class="text-center">{{ $cliente->nombre }}</td>
            <td class="text-center">{{ $cliente->telefono }}</td>
            <td class="text-center">{{ $cliente->mail }}</td>
            <td class="text-center">{{ $cliente->direccion }}</td>

@if(Auth::User()->hasRole(1))
        
       

            <td class="text-center">
               
                <a href="{{ url("/cliente/".$cliente->id_cliente."/edit") }}" class="btn btn-info btn-xs">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                </a>
            </td>

        {!! Form::close() !!}
        
        @endif
        </tr>
    @endforeach
  </tbody>
  
</table>