<h1 class="text-primary">Calendario</h1>



<table class="table table-bordered dataTable" id="MyTable">
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
      </tbody>
      
    </table>