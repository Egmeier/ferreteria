@extends('master')

@section('content') 
@if(Auth::User()->hasRole(1))
    <a class="btn btn-success pull-right" href="{{ url("/cliente/create") }}" role="button">Nuevo cliente</a>
    
@endif
    @include('cliente.partials.table')
@endsection