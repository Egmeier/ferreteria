@extends('master')

@section('content')
    <h4 class="text-center">Editar Evento: {{ $evento->pedido  }}</h4>
    {!! Form::model($evetnto, [ 'route' => ['calendario.update', $producto], 'method' => 'PUT']) !!}
        @include('calendario.partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
    {!! Form::close() !!}
@endsection