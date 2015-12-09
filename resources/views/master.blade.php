<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="csrf-token" content="{{ csrf_token() }}">
 <title>Alameda y Cia</title>
 
  {!! Html::style('assets/css/bootstrap.css') !!}
  {!! Html::style('assets/css/dataTables.bootstrap.css') !!}
  {!! Html::script('assets/js/jquery-2.1.4.js') !!}
  {!! Html::script('assets/js/jquery.dataTables.js') !!}
  {!! Html::script('assets/js/bootstrap.min.js') !!}
  {!! Html::script('assets/js/dataTables.bootstrap.js') !!}
  {!! Html::style('assets/css/calendario.css') !!}
  {!! Html::script('assets/js/calendario.js') !!}

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
             src="/logo2.gif">
      </div>



  <div class="btn-group"> 
    <button type="button" class="btn btn-danger dropdown-toggle"
      data-toggle="dropdown">
      <span class= "glyphicon glyphicon-user"></span>
      {{Auth::User()->name}}
      <span class="caret"></span>
    </button>
          <ul class="dropdown-menu" role="menu">
          <li><a href="/auth/register" >
          Registrar</a></li>
          <li><a href="/inventario">
          Cambiar contraseña</a></li>
          <li><a href="/auth/logout">
          Salir</a></li>
          </ul>
  </div>
  </div>
 </nav>


<div class="col-md-2"> <!--COLUMNA 1-->
  <div class="row">
  
 </div>


 <div class="row">
    <div class="list-group"> 
    
    <a href="/home">
    <button type="button" class="list-group-item"> 
    <span class="glyphicon glyphicon-align-left" aria-hidden="true"><strong> Venta</strong></button></span>
    </a>

    <a href="/venta/registro">
    <button type="button" class="list-group-item"> 
    <span class="glyphicon glyphicon-align-left" aria-hidden="true"><strong> Registro de Ventas</strong></button></span>
    </a>

    <a href="/inventario">
    <button type="button" class="list-group-item">
    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"><strong> Inventario</strong></button></span>
    </a>
     <a href="/calendario">
  	<button type="button" class="list-group-item">
  	<span class="glyphicon glyphicon-list-alt" aria-hidden="true"><strong> Calendario</strong></button></span>
    </a>

  	<button type="button" class="list-group-item">
  	<span class="glyphicon glyphicon-folder-open" aria-hidden="true"><strong> Documentos</strong></button></span>
  	
  	

</div>
 </div>
</div>

<div style= "padding-left: 20px;"class="col-xs-10"><!--COLUMNA 2-->

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@yield('content')
</div>

 


 <!-- Scripts -->


 @yield('scripts')

 <script>
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});

$(document).ready(function(){
            $('#MyTable').dataTable({
              language: {
   
              url: '/assets/Spanish.json'
              }
            });
        });

</script>
<!-- Scripts -->


</body>
</html>
