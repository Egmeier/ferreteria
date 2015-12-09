@extends('master')

@section('content') 

<h1 class="text-primary">Ventas</h1>

{!! Form::open() !!}
<input type="text" id="ingresarCodigo" placeholder="Ingrese código de producto">
<button id="mascampos" type="submit" class="btn btn-info">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                </button>
 {!! Form::close() !!}
    <!--<input type="text" id="ingresarCodigo">
   <a id="mascampos" class="btn btn-success pull-right" role="button">ok</a>

   -->
     {!! Form::open([ 'route' => 'venta.store', 'method' => 'POST','onkeypress'=>'return pulsar(event)']) !!}
     <input type="hidden" type="number" name="cantidadFilas" id="cantidadFilas" value="0">
     <table class="table table-bordered dataTable" >

  <thead>
    <tr>
        <th class="text-center">Código</th>
        <th class="text-center">Descripción</th>
        <th class="text-center">Tipo</th>
        <th class="text-center">Precio</th>
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
       


         $.ajax({
    // la URL para la petición
    url : 'http://localhost:8000/venta/ingresarProducto',
 
    // la información a enviar
    // (también es posible utilizar una cadena de datos)
    data : { codigo : codigo },
 
    // especifica si será una petición POST o GET
    type : 'POST',
 
    // el tipo de información que se espera de respuesta, entrega STRING
    //Recomendado convertirlo a JSON con var dato=JSON.parse(json);
    dataType : 'json',
 
    // código a ejecutar si la petición es satisfactoria;
    // la respuesta es pasada como argumento a la función
    success : function(json) {
      var dato=JSON.parse(json);
      var id=dato.id_producto;
      var descripcion=dato.descripcion;
      var tipo=dato.tipo;
      var precio=dato.precio;
      var cantidadMaxima=dato.inventario;
      $("#ingresarCodigo").val("");
      if ( $("#"+codigo).length ) {
alert("Ya existe");
      }
      else
      {
        
         texto_insertar='<tr id="'+codigo+'"><input type="hidden" name="id_producto'+indice+'" class=form-control value="'+id+'" readonly><td><div class="form-group"><input required type="text" name="codigo'+indice+'" class=form-control value="'+codigo+'" readonly></div></td><td><div class="form-group"> <input required type="text" name="descripcion'+indice+'" class=form-control value="'+descripcion+'" readonly></div></td><td><div class="form-group"><input required type="text" name="tipo'+indice+'" class=form-control value="'+tipo+'" readonly></div></td><td><div class="form-group"><input required type="number" name="precio'+indice+'" class=form-control value="'+precio+'" readonly></div></td><td><div class="form-group"><input required type="number" name="cantidad'+indice+'" min="1" max="'+cantidadMaxima+'" value="1" class=form-control></div></td><td><div><input required type="button" class="btn btn-danger btn-xs" onClick="eliminarElemento(\''+codigo+'\');" value="Borrar"></div></td></tr>';
         //texto_insertar = '<p>' + etiqueta + ' ' + indice + ':<br><input type="text" name="' + nombreCampo + indice + '" /></p>';
         $("#cantidadFilas").val(indice);
         indice ++;
         //<?php echo 'nombreCampo = elem.data("nombreCampo");'; ?>
         //elem.data("indice",indice);
         nuevo_campo = $(texto_insertar);
         elem.before(nuevo_campo);
      }
     

    },
 
    // código a ejecutar si la petición falla;
    // son pasados como argumentos a la función
    // el objeto de la petición en crudo y código de estatus de la petición
   // error : function(xhr, status) {
     //   alert('Disculpe, existió un problema');
    //},
 
    // código a ejecutar sin importar si la petición falló o no
    //complete : function(xhr, status) {
      //  alert('Petición realizada');
    //}
});






         

         
      });
   });
   return this;
}

$(document).ready(function(){

   $("#mascampos").generaNuevosCampos();
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

</script>
@endsection