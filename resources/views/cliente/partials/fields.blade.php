<div class="form-group">
    {!! Form::label('rut', 'Rut', ['for' => 'rut'] ) !!}
    {!! Form::text('rut', null , ['class' => 'form-control', 'id_cliente' => 'rut', 'placeholder' => 'Escribe el rut...','required','pattern'=>'\d{3,8}-[\d|kK]{1}','title'=>'Debe ser Rut válido' ]  ) !!}
</div>

<div class="form-group">
    {!! Form::label('nombre', 'Nombre', ['for' => 'nombre'] ) !!}
    {!! Form::text('nombre', null , ['class' => 'form-control', 'id_cliente' => 'nombre', 'placeholder' => 'Escribe el nombre...','required','pattern'=>'[a-zA-Z]+','title'=>'Sólo letras' ]  ) !!}
</div>

<div class="form-group">
    {!! Form::label('telefono', 'Telefono', ['for' => 'telefono'] ) !!}
    {!! Form::text('telefono', null , ['class' => 'form-control', 'id_cliente' => 'telefono', 'placeholder' => 'Escribe el telefono...','required','pattern'=>'[0-9]{7,9}$','title'=>'Sólo números, entre 7 y 9 digitos' ]  ) !!}
</div>


<div class="form-group">
    {!! Form::label('mail', 'Mail', ['for' => 'mail'] ) !!}
    {!! Form::email('mail',null, ['class' => 'form-control', 'id_cliente' => 'mail', 'placeholder' => 'Escribe el mail...','required' ]) !!}
</div>

<div class="form-group">
    {!! Form::label('direccion', 'Dirección', ['for' => 'direccion'] ) !!}
    {!! Form::text('direccion',null, ['class' => 'form-control', 'id_cliente' => 'direccion', 'placeholder' => 'Escribe la direccion...','required' ]) !!}
</div>



