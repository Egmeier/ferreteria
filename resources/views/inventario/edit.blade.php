@extends('master')

@section('content')
    <h4 class="text-center">Editar Producto: {{ $producto->descripcion  }}</h4>
    {!! Form::model($producto, [ 'route' => ['inventario.update', $producto], 'method' => 'PUT']) !!}
        @include('inventario.partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
    {!! Form::close() !!}
@endsection