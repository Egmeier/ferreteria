<div class="form-group">
    {!! Form::label('codigo', 'Código', ['for' => 'codigo'] ) !!}
    {!! Form::text('codigo', null , ['class' => 'form-control', 'id_producto' => 'codigo', 'placeholder' => 'Escribe el codigo...' ]  ) !!}
</div>

<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion', ['for' => 'descripcion'] ) !!}
    {!! Form::text('descripcion', null , ['class' => 'form-control', 'id_producto' => 'descripcion', 'placeholder' => 'Escribe la descripción...' ]  ) !!}
</div>

<div class="form-group">
    {!! Form::label('tipo', 'Tipo', ['for' => 'tipo'] ) !!}
    {!! Form::text('tipo', null , ['class' => 'form-control', 'id_producto' => 'tipo', 'placeholder' => 'Escribe el tipo...' ]  ) !!}
</div>


<div class="form-group">
    {!! Form::label('precio', 'Precio', ['for' => 'precio'] ) !!}
    {!! Form::number('precio',null, ['class' => 'form-control', 'id_producto' => 'precio', 'placeholder' => 'Escribe el precio...' ]) !!}
</div>

<div class="form-group">
    {!! Form::label('inventario', 'Cantidad', ['for' => 'inventario'] ) !!}
    {!! Form::number('inventario',null, ['class' => 'form-control', 'id_producto' => 'inventario', 'placeholder' => 'Escribe la cantidad...' ]) !!}
</div>



