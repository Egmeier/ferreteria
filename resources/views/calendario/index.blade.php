@extends('master')

@section('content')
@if(Auth::User()->hasRole(1))
    <!--<a class="btn btn-success pull-right" href="{{ url("/calendario/create") }}" role="button">Nuevo evento</a>-->
@endif
   <!-- @include('calendario.partials.table')-->
    <!--@include('calendario.calendar')-->

    <!-- Responsive calendar - START -->
<div class="responsive-calendar" >
  <div class="controls">
      <a class="pull-left" data-go="prev"><div class="btn"><span class="glyphicon glyphicon-chevron-left"></span></div></a>
      <h4><span data-head-year></span> <span data-head-month></span></h4>
      <a class="pull-right" data-go="next"><div class="btn"><span class="glyphicon glyphicon-chevron-right"></span></div></a>
  </div><hr/>
  <div class="day-headers">
    <div class="day header">Lun</div>
    <div class="day header">Mar</div>
    <div class="day header">Mier</div>
    <div class="day header">Jue</div>
    <div class="day header">Vie</div>
    <div class="day header">Sab</div>
    <div class="day header">Dom</div>
  </div>
  <div class="days" data-group="days">
    <!-- the place where days will be generated -->

  </div>
</div>
<!-- Responsive calendar - END -->

@endsection

@section('scripts')
<script>


$( document ).ready( function() {
  //$('.responsive-calendar').responsiveCalendar();
var str= '{';
@foreach($registro as $ordencompra)
str=str+'"{{$ordencompra->fecha_entrega}}": {"number":{{$ordencompra->id_oc}},"badgeClass": "badge-warning", "url": "/ordenescompra/{{$ordencompra->id_oc}}"},'
@endforeach
str=str+'"":{}}';

appointment="2015-12-01"; 
 //var options={"badgeClass":"badge-warning", "url": ""};

 //var str = '{"' + appointment + '":{"badgeClass":"badge-warning"}}';
 var test2=JSON.parse(str);

   $(".responsive-calendar").responsiveCalendar({
    events: test2

  });

});
</script>
@endsection