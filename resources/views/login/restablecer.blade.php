<head>
<link href="admintemplate/build/css/login.css" rel="stylesheet">
<link href="admintemplate/build/css/all.css" rel="stylesheet">
<link href="admintemplate/build/css/bootstrap.min.css" rel="stylesheet">
<script src="admintemplate/build/js/jquery.slim.js"></script>
<script src="admintemplate/build/js/bootstrap.bundle.min.js"></script>
<link rel="icon" href="admintemplate/sport-house.png" type="image/ico" />
<title> SportHouse Xonacatlán | Iniciar Sesión</title>
</head>
<body>
<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <center><h3 class="login-heading mb-4">¡Restablecer Contraseña!</h3></center>

	<form action="{{route('validarCorreo')}}" method="POST">
	{{csrf_field()}}
  <div class="form-label-group">
    <input type="email" id="email" class="form-control" placeholder="Correo Electronico" autofocus name='email'>
    <label for="email">Correo Electronico</label>
  </div>

  <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit" value="restablecer">Restablecer</button>
  <div class="text-center">
    <a href="iniciarsesion" class="small">Cancelar</a>
  </div>

	</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
