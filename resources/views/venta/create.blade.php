@extends('master')

@section('content')
    {!! Form::open([ 'route' => 'inventario.store', 'method' => 'POST']) !!}
        @include('inventario.partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar</button>
    {!! Form::close() !!}
@endsection