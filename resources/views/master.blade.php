<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Alameda y Cia</title>
 {!! Html::script('assets/js/jquery-2.1.4.min.js') !!}
 {!! Html::style('assets/css/bootstrap.css') !!}
 {!! Html::script('assets/js/bootstrap.min.js') !!}

<style type="text/css">
body{
	background:rgba(171, 180, 183, 0.09);
}
</style>

<style>
 nav.es1{
 	background: #E6E3B9;
 }

  
 .nav.navbar-nav.navbar-right a{
  color: #3352A1;
 }

 </style>



</head>

<body>
 <nav class="navbar navbar-default es1">
     <div class="container-fluid">
     <div class="navbar-header">    		 
       		 <img style="max-width:200px;"
             src="logo2.gif">
   			 
    
      </div>

    
        	<div>
        	<ul class="nav navbar-nav navbar-right">
        	<a class="navbar-brand" href="#">
        	<span class="glyphicon glyphicon-user" aria-hidden="true"></span> Usuario</a>

        	<a class="navbar-brand" href="#">
        	<span class="glyphicon glyphicon-off" aria-hidden="true"></span> Salir</a>
        	</ul>
 	    	</div>
 	  </div>
 </nav>

<div class="col-md-2"> <!--COLUMNA 1-->
 	<div class="row">
  
 </div>
 
 <div class="row">
  	<div class="list-group">
  	<button type="button" class="list-group-item">
  	<span class="glyphicon glyphicon-align-left" aria-hidden="true"><strong> Inicio</strong></button>
  	<button type="button" class="list-group-item">
  	<span class="glyphicon glyphicon-list-alt" aria-hidden="true"><strong> Inventario</strong>
  	<button type="button" class="list-group-item">
  	<span class="glyphicon glyphicon-calendar" aria-hidden="true"><strong> Calendario</strong></button>
  	<button type="button" class="list-group-item">
  	<span class="glyphicon glyphicon-folder-open" aria-hidden="true"><strong> Documentos</strong></button>
  	
  	
</div>
 </div>
</div>

<div style= "padding-left: 20px;"class="col-xs-10"><!--COLUMNA 2-->
@yield('content')
</div>

<!--arreglar esta fila, no permanece en la parte inferior de la pantalla-->
<!--arreglar esta fila, no permanece en la parte inferior de la pantalla-->
<!--arreglar esta fila, no permanece en la parte inferior de la pantalla-->
<!--arreglar esta fila, no permanece en la parte inferior de la pantalla-->
	<div class="navbar navbar-fixed-bottom text-center">
	<span>Dirección: Calle Miguel León Prado #192, Comuna Santiago </span>
 	<span style="padding-left: 20px;">Telefonos: 224019291 - 224019292 - 225563873</span>
 	<span style="padding-left: 20px;">Contacto: ferreteriaalemeda@hotmail.com </span>
	</div>



 

 <!-- Scripts -->
 {!! Html::script('assets/js/bootstrap.min.js') !!}
</body>
</html>