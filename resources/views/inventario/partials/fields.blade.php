<div class="form-group">
    {!! Form::label('codigo', 'Código', ['for' => 'codigo'] ) !!}
    {!! Form::number('codigo', null , ['class' => 'form-control', 'id_producto' => 'codigo', 'placeholder' => 'Escribe el codigo...','required' ]  ) !!}
</div>

<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion', ['for' => 'descripcion'] ) !!}
    {!! Form::text('descripcion', null , ['class' => 'form-control', 'id_producto' => 'descripcion', 'placeholder' => 'Escribe la descripción...','required' ]  ) !!}
</div>

<div class="form-group">
    {!! Form::label('tipo', 'Tipo', ['for' => 'tipo'] ) !!}
    {!! Form::text('tipo', null , ['class' => 'form-control', 'id_producto' => 'tipo', 'placeholder' => 'Escribe el tipo...','required' ]  ) !!}
</div>


<div class="form-group">
    {!! Form::label('precio', 'Precio', ['for' => 'precio'] ) !!}
    {!! Form::number('precio',null, ['class' => 'form-control', 'id_producto' => 'precio', 'placeholder' => 'Escribe el precio...','required','min'=>0 ]) !!}
</div>

<div class="form-group">
    {!! Form::label('inventario', 'Cantidad', ['for' => 'inventario'] ) !!}
    {!! Form::number('inventario',null, ['class' => 'form-control', 'id_producto' => 'inventario', 'placeholder' => 'Escribe la cantidad...','required','min'=>0 ]) !!}
</div>



