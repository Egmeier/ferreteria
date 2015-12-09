@extends('master')

@section('content')
    {!! Form::open([ 'route' => 'cliente.store', 'method' => 'POST']) !!}
        @include('cliente.partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar</button>
    {!! Form::close() !!}
@endsection