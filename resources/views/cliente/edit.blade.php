@extends('master')

@section('content')
    <h4 class="text-center">Editar cliente: {{ $cliente->nombre  }}</h4>
    {!! Form::model($cliente, [ 'route' => ['cliente.update', $cliente], 'method' => 'PUT']) !!}
        @include('cliente.partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
    {!! Form::close() !!}
@endsection