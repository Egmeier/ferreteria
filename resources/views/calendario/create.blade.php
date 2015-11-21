@extends('master')

@section('content')
    {!! Form::open([ 'route' => 'calendario.store', 'method' => 'POST']) !!}
        @include('calendario.partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar</button>
    {!! Form::close() !!}
@endsection