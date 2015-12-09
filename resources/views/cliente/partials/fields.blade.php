<div class="form-group">
    {!! Form::label('rut', 'Rut', ['for' => 'rut'] ) !!}
    {!! Form::text('rut', null , ['class' => 'form-control', 'id_cliente' => 'rut', 'placeholder' => 'Escribe el rut...' ]  ) !!}
</div>

<div class="form-group">
    {!! Form::label('nombre', 'Nombre', ['for' => 'nombre'] ) !!}
    {!! Form::text('nombre', null , ['class' => 'form-control', 'id_cliente' => 'nombre', 'placeholder' => 'Escribe el nombre...' ]  ) !!}
</div>

<div class="form-group">
    {!! Form::label('telefono', 'Telefono', ['for' => 'telefono'] ) !!}
    {!! Form::text('telefono', null , ['class' => 'form-control', 'id_cliente' => 'telefono', 'placeholder' => 'Escribe el telefono...' ]  ) !!}
</div>


<div class="form-group">
    {!! Form::label('mail', 'Mail', ['for' => 'mail'] ) !!}
    {!! Form::email('mail',null, ['class' => 'form-control', 'id_cliente' => 'mail', 'placeholder' => 'Escribe el mail...' ]) !!}
</div>

<div class="form-group">
    {!! Form::label('direccion', 'Dirección', ['for' => 'direccion'] ) !!}
    {!! Form::text('direccion',null, ['class' => 'form-control', 'id_cliente' => 'direccion', 'placeholder' => 'Escribe la direccion...' ]) !!}
</div>



