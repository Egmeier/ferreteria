<div class="form-group">
    {!! Form::label('pedido', 'Pedido', ['for' => 'pedido'] ) !!}
    {!! Form::text('pedido', null , ['class' => 'form-control', 'id_evento' => 'pedido', 'placeholder' => 'Describe el pedido...' ]  ) !!}
</div>

<div class="form-group">
    {!! Form::label('cantidad', 'Cantidad', ['for' => 'cantidad'] ) !!}
    {!! Form::number('cantidad',null, ['class' => 'form-control', 'id_evento' => 'cantidad', 'placeholder' => 'Escribe la cantidad a producir...' ]) !!}
</div>

<div class="form-group">
    {!! Form::label('fecha_inicio', 'Fecha inicio', ['for' => 'fecha_inicio'] ) !!}
    {!! Form::text('fecha_inicio', null , ['class' => 'form-control', 'id_evento' => 'fecha_inicio', 'placeholder' => 'tipo: dd/mes/año...ejemplo 09/12/20015' ]  ) !!}
</div>

<div class="form-group">
    {!! Form::label('fecha_entrega', 'Fecha entrega', ['for' => 'fecha_entrega'] ) !!}
    {!! Form::text('fecha_entrega', null , ['class' => 'form-control', 'id_evento' => 'fecha_entrega', 'placeholder' => 'tipo: dd/mes/año...ejemplo 09/12/20015' ]  ) !!}
</div>


