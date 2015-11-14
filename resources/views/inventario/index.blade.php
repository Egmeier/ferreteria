@extends('master')

@section('content') 
@if(Auth::User()->hasRole(1))
    <a class="btn btn-success pull-right" href="{{ url("/inventario/create") }}" role="button">Nuevo producto</a>
@endif
    @include('inventario.partials.table')
@endsection