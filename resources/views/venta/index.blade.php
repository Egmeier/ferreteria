@extends('master')

@section('content') 
    <a class="btn btn-success pull-right" href="{{ url("/inventario/create") }}" role="button">Nuevo producto</a>
    @include('inventario.partials.table')
@endsection