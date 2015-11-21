@extends('master')

@section('content') 
@if(Auth::User()->hasRole(1))
    <a class="btn btn-success pull-right" href="{{ url("/calendario/create") }}" role="button">Nuevo evento</a>
@endif
    @include('calendario.partials.table')
@endsection