<head>
<link href="{{ asset('admintemplate/build/css/login.css')}}" rel="stylesheet">
<link href="{{ asset('admintemplate/build/css/all.css')}}" rel="stylesheet">
<link href="{{ asset('admintemplate/build/css/bootstrap.min.css')}}" rel="stylesheet">
<script src="{{ asset('admintemplate/build/js/jquery.slim.js')}}"></script>
<script src="{{ asset('admintemplate/build/js/bootstrap.bundle.min.js')}}"></script>
<link rel="icon" href="{{ asset('admintemplate/sport-house.png')}}" type="image/ico" />
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
              <center><h3 class="login-heading mb-4">¡Bienvenido!</h3></center>
              <form action = "{{route('index')}}" method = "POST">
                {{csrf_field()}}
                <div class="form-label-group">
                  <input type="email" id="inputEmail" class="form-control" placeholder="Correo Electronico" autofocus name='email'>
                  <label for="inputEmail">Correo Electronico</label>
                </div>

                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" name='contraseña'>
                  <label for="inputPassword">Contraseña</label>
                </div>

                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Recordar Contraseña</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Iniciar Sesión</button>
                  <div class="text-center">
                    <a href="http://localhost/sporthouse-local/" class="small">Cancelar</a>
                  </div>
                  <br><br>
                  <div class="text-center">
                    <a  href="{{URL::action('LoginController@restablecercontraseña')}}" class="small">Restablecer Contraseña</a>
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
