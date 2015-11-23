<!DOCTYPE html>
<html>
<head>
	<title>Alameda y Cia</title>
  {!! Html::style('assets/css/bootstrap.css') !!}
  {!! Html::script('assets/js/jquery-2.1.4.min.js') !!}
  {!! Html::script('assets/js/bootstrap.min.js') !!}
</head>
<body>


<div class="container">
  @if (Session::has('errors'))
  <div class="alert alert-warning" role="alert">
  <ul>
  <strong>Oops! Algo ha salido mal : </strong>
  @foreach ($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
  </ul>
  </div>
  @endif
  <div class="row">
  <div class="col-md-6 col-md-offset-3">
  <div class="panel panel-default">


<div class="panel-heading">
<span style= "font-size: 18px;" class= "glyphicon glyphicon-triangle-right"></span>
<span style= "font-size: 20px;"> Registro Sesión</span></div>

<div class="panel-body">
  <form method="POST" action="/auth/register">
  {!! csrf_field() !!}

  <div class="form-group">
  <label>Nombre</label>
  <input type="text" class="form-control" name="name" value="{{ old('name') }}">
  </div>

  <div class="form-group">
  <label>Email</label>
  <input type="email" class="form-control" name="email" value="{{ old('email') }}">
  </div>

  <div class="form-group">
  <label>Contraseña</label>
  <input type="password" class="form-control" name="password">
  </div>

  <div class="form-group">
  <label>Confirmar contraseña</label>
  <input type="password" class="form-control" name="password_confirmation">
  </div>

  <div class="form-group">
  <label>Rol</label>
  <input type="number" class="form-control" name="rol">
  </div>

 
  <div>  
 <button type="submit" class="btn btn-primary" >Registrar</button> 
  </div>



</form>
</div> 
  </div>
  </div>
  </div>
  </div>

</body>
</html>