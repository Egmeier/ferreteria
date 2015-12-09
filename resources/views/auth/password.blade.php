<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
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

<form method="POST" action="/password/email">
    {!! csrf_field() !!}

 <div class="row">
  <div class="col-md-6 col-md-offset-3">
  <div class="panel panel-default">

  <div class="panel-heading"><span style= "font-size: 18px;" class= "glyphicon glyphicon-triangle-right"></span>
<span style= "font-size: 20px;"> Recuperación Contraseña</span></div>

  <div class="panel-body">

    <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
    </div>

     <div>  
     <button type="submit" class="btn btn-primary" >Enviar</button> 
     </div>

  </div> 

</div>
</div>
</div>
</form>

</body>
</html>