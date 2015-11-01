@extends('master')
@section('content')


<ol class="breadcrumb">
<li><a href="#">Inventario</a></li>
  <li class="active"><strong>Mostrar</strong></li>
  </ol>
   

   
  <div style="margin-bottom: 1px;" class="panel panel-default">
  <!-- Default panel contents ->
  

  <!- Table -->
  <table class="table">
  <thead>
  <th>Descripción</th>
  <th>Código</th>
  <th>Disponibilidad</th>
  <th>Precio</th>
  </thead>
  <tbody>
 	 
  <tr>
 	 
  <td> Taladro </td>
  <th scope="cod"> 800 </td>
  <td> 5 </td>
  <td> $30000 </td>

  </tr>

  <tr>
 	 
  <td> Alicate cortante </td>
  <th scioe="cod"> 900 </td>
  <td> 10 </td>
  <td> $5000 </td>

  </tr>

  <tr>
 	 
  <td> Martillo </td>
  <th scope="cod"> 52 </td>
  <td> 30 </td>
  <td> $2000 </td>

  </tr>

  <tr>
 	 
  <td> Set de herramientras </td>
  <th scioe="cod"> 6 </td>
  <td> 12 </td>
  <td> $50000 </td>

  </tr>

  </tbody>
  </table>


</div>

@endsection