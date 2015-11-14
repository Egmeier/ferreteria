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
  <strong>Oops! Something went wrong : </strong>
  @foreach ($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
  </ul>
  </div>
  @endif
  <div class="row">
  <div class="col-md-6 col-md-offset-3">
  <div class="panel panel-default">
  <div class="panel-heading"><span style= "font-size: 18px;" class= "glyphicon glyphicon-triangle-right"></span>
<span style= "font-size: 20px;"> Iniciar Sesión</span></div>
  <div class="panel-body">
  <form method="POST" action="/auth/login">
  {!! csrf_field() !!}
  <div class="form-group">
  <label>Email</label>
  <input type="email" class="form-control" name="email" value="{{ old('email') }}">
  </div>
  <div class="form-group">
  <label>Password</label>
  <input type="password" class="form-control" name="password" id="password">
  </div>
  <div class="checkbox">
  <label><input name="remember" type="checkbox"> Recordar Usuario</label>
  </div>
  <div>  
 <button type="submit" class="btn btn-primary" >Login</button> 
  </div>
   
  </form>
  </div> 
  </div>
  </div>
  </div>
  </div>
</body>
</html>