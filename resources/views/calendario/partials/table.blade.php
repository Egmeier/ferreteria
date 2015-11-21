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

<!--
<div align="right">
      <br/><br/>
      <div id="calendario">
      <div id="anterior" onclick="mesantes()"></div>
      <div id="posterior" onclick="mesdespues()"></div>
      <h2 id="titulos"></h2>
      <table id="diasc">
      <tr id="fila0"><th></th><th></th><th></th><th></th><th></th><th></th><th></th></tr>
      <tr id="fila1"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
      <tr id="fila2"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
      <tr id="fila3"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
      <tr id="fila4"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
      <tr id="fila5"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
      <tr id="fila6"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
      </table>
      <div id="fechaactual"><i onclick="actualizar()">HOY: </i></div>
      <div id="buscafecha">
        <form action="#" name="buscar">
          <p>Buscar ... MES
            <select name="buscames">
              <option value="0">Enero</option>
              <option value="1">Febrero</option>
              <option value="2">Marzo</option>
              <option value="3">Abril</option>
              <option value="4">Mayo</option>
              <option value="5">Junio</option>
              <option value="6">Julio</option>
              <option value="7">Agosto</option>
              <option value="8">Septiembre</option>
              <option value="9">Octubre</option>
              <option value="10">Noviembre</option>
              <option value="11">Diciembre</option>
            </select>
          ... AÑO ...
            <input type="text" name="buscaanno" maxlength="4" size="4" />
          ... 
            <input type="button" value="BUSCAR" onclick="mifecha()" />
          </p>  
           </form>
            </div>
          </div>
-->


            </tr>
        @endforeach
      </tbody>
      
    </table>