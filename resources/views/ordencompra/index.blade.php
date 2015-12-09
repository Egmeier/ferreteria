@extends('master')

@section('content') 

<h1 class="text-primary">Ordenes de Compra</h1>

{!! Form::open() !!}
<input type="text" id="ingresarCodigo" placeholder="Ingrese código de producto">
<button id="mascampos" class="btn btn-info">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                </button>
 {!! Form::close() !!}
    <!--<input type="text" id="ingresarCodigo">
   <a id="mascampos" class="btn btn-success pull-right" role="button">ok</a>

   -->
     {!! Form::open([ 'route' => 'ordenescompra.store', 'method' => 'POST','onkeypress'=>'return pulsar(event)']) !!}
    <div class="form-group">
     <label>Fecha solicitud</label><input type="date" name="fecha_solicitud" id="fecha_solicitud">
     <label>Fecha entrega</label><input type="date" name="fecha_entrega" id="fecha_entrega">

    <label>Cliente</label>
     <select name="lista">

     <?php 
        $clientes=App\Cliente::all();
        foreach ($clientes as $cliente) {
          echo "<option value='".$cliente->id_cliente."'>".$cliente->nombre."</option>";
        }
      ?>
</select>
     </div>


     <input type="hidden" name="cantidadFilas" id="cantidadFilas" value="0">
     <table class="table table-bordered dataTable" >

  <thead>
    <tr>
        <th class="text-center">Código</th>
        <th class="text-center">Descripción</th>
        <th class="text-center">Cantidad</th>
        
        <th class="text-center">Acciones</th>      
    </tr>
  </thead>
  <tbody>
  
    <tr id="tabla"    >
    	
    	
    </tr>
    
  </tbody>
  
</table>


        <button type="submit" class="btn btn-success btn-block">Vender</button>
    {!! Form::close() !!}

    
@endsection

@section('scripts')

<script>

function pulsar(e) { 
  tecla = (document.all) ? e.keyCode :e.which; 
  return (tecla!=13); 
} 

	indice=1;
	jQuery.fn.generaNuevosCampos = function(){
    var codigo;
    
   $(this).each(function(){
      elem = $(this);
      //elem.data("etiqueta",etiqueta);
      //elem.data("nombreCampo",nombreCampo);
      //elem.data("indice",indice);
      
      elem.click(function(e){
         e.preventDefault();
         elem= $("#tabla");
         codigo=document.getElementById('ingresarCodigo').value;
       
   
      
      $("#ingresarCodigo").val("");
      if ( $("#"+codigo).length ) {
alert("Ya existe");
      }
      else
      {
        
         texto_insertar='<tr id="'+codigo+'"><td><div class="form-group"><input type="text" name="codigo'+indice+'" class=form-control value="'+codigo+'" ></div></td><td><div class="form-group"> <input type="text" name="descripcion'+indice+'" class=form-control ></div></td><td><div class="form-group"><input type="number" name="cantidad'+indice+'" min="1" class=form-control></div></td><td><div><input type="button" class="btn btn-danger btn-xs" onClick="eliminarElemento(\''+codigo+'\');" ></div></td></tr>';
         //texto_insertar = '<p>' + etiqueta + ' ' + indice + ':<br><input type="text" name="' + nombreCampo + indice + '" /></p>';
         $("#cantidadFilas").val(indice);
         indice ++;
         //<?php echo 'nombreCampo = elem.data("nombreCampo");'; ?>
         //elem.data("indice",indice);
         nuevo_campo = $(texto_insertar);
         elem.before(nuevo_campo);
      }         
      });
   });
   return this;
}

$(document).ready(function(){

   $("#mascampos").generaNuevosCampos();
   $('#fecha_solicitud').val(new Date().toDateInputValue());
  

   $("#fecha_entrega").attr({
   "min" : document.getElementById('fecha_solicitud').value
});

});

function eliminarElemento(id){
  
  fila = document.getElementById(id); 
  
  if (!fila){
    alert("El elemento selecionado no existe");
  } else {
    padre = fila.parentNode;
    padre.removeChild(fila);
  }
}

Date.prototype.toDateInputValue = (function() {
    var local = new Date(this);
    local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
    return local.toJSON().slice(0,10);
});


</script>
@endsection