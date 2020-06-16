<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href="{{ asset('admintemplate/sport-house.png')}}" type="image/ico" />

    <title>SportHouse Xonacatlán | Sistema</title>


    <!-- Bootstrap -->
    <link href="{{ asset('admintemplate/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('admintemplate/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('admintemplate/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('admintemplate/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="{{ asset('admintemplate/vendors/google-code-prettify/bin/prettify.min.css')}}" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{ asset('admintemplate/vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <!-- Switchery -->
    <link href="{{ asset('admintemplate/vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">
    <!-- starrr -->
    <link href="{{ asset('admintemplate/vendors/starrr/dist/starrr.css')}}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('admintemplate/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('admintemplate/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('admintemplate/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <script language="JavaScript">
        function Cerrarsesion(){
          if (confirm('¿Esta Seguro De Cerrrar Sesión?')){
              return true;
            }
            else{
        	       return false;
                }
        }
      </script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script language="JavaScript">
  function mueveReloj(){
    momentoActual = new Date()
    hora = momentoActual.getHours()
    minuto = momentoActual.getMinutes()
    segundo = momentoActual.getSeconds()
    str_segundo = new String (segundo)
      if (str_segundo.length == 1)
        segundo = "0" + segundo
        str_minuto = new String (minuto)
          if (str_minuto.length == 1)
            minuto = "0" + minuto
            str_hora = new String (hora)
              if (str_hora.length == 1)
                hora = "0" + hora
                horaImprimible = hora + " : " + minuto + " : " + segundo
                  document.form_reloj.reloj.value = horaImprimible
                    setTimeout("mueveReloj()",1000)
                }
</script>
    <!-- Custom Theme Style -->
    <link href="{{ asset('admintemplate/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md" onload="mueveReloj()">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="inicio" class="site_title"><i class="fa fa-institution"></i> <span>SportHouse</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('Storage/app/public/')}}/{{Session::get('sesionfoto')}}" width="55" height="55" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2>{{Session::get('sesionname')}} {{Session::get('sesionapu')}} {{Session::get('sesionamu')}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menú General</h3>
                <ul class="nav side-menu">
                  <li><a href="inicio"><i class="fa fa-home"></i> Inicio </a></li>
                  <li><a href="#"><i class="fa fa-exchange"></i> Mis Ventas </a></li>
                  <li><a><i class="fa fa-plus"></i> Nuevo <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="formularioUsuarios"><i class="fa fa-user"></i> Usuario </a></li>
                      <li><a href="formularioEmpleados"><i class="fa fa-users"></i> Empleado </a></li>
                      <li><a href="formularioSocios"><i class="fa fa-users"></i> Socio </a></li>
                      <li><a href="formularioCasilleros"><i class="fa fa-building"></i> Asignar Casillero </a></li>
                      <li><a href="formularioAsignaciones"><i class="fa fa-exchange"></i> Asignacion(Empleado) </a></li>
                      <li><a href="formularioPagos"><i class="fa fa-money"></i> Pago </a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Reportes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="reporteUsuarios"><i class="fa fa-user"></i> Usuarios </a></li>
                      <li><a href="reporteEmpleados"><i class="fa fa-users"></i> Empleados </a></li>
                      <li><a href="reporteSocios"><i class="fa fa-users"></i> Socios </a></li>
                      <li><a href="reporteCasilleros"><i class="fa fa-building"></i> Casilleros Asignados </a></li>
                      <li><a href="reporteAsignaciones"><i class="fa fa-exchange"></i> Asignaciones(Empleados) </a></li>
                      <li><a href="reportePagos"><i class="fa fa-money"></i> Pagos Realizados </a></li>
                    </ul>
                  </li>
                  <!-- <li><a><i class="fa fa-exchange"></i> Módulo de Control <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="entrada"><i class="fa fa-arrow-circle-right"></i> Entrada </a></li>
                      <li><a href="salida"><i class="fa fa-arrow-circle-left"></i> Salida </a></li>
                    </ul>
                  </li> -->
                  <li><a><i class="fa fa-file-o"></i> Archivos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="nuevoArchivo"><i class="fa fa-upload"></i> Subir un Archivo </a></li>
                      <li><a href="reporteArchivos"><i class="fa fa-folder-open"></i> Consultar Archivos </a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-file-image-o"></i> Avisos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="nuevoAviso"><i class="fa fa-upload"></i> Subir un Aviso </a></li>
                      <li><a href="reporteAvisos"><i class="fa fa-folder-open"></i> Consultar Avisos </a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-birthday-cake"></i> Eventos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="altaeventos"><i class="fa fa-upload"></i> Subir un Evento </a></li>
                      <li><a href="reporteEventos"><i class="fa fa-folder-open"></i> Consultar Eventos </a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-ticket"></i> Promociones <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="altapromociones"><i class="fa fa-upload"></i> Subir Promocion </a></li>
                      <li><a href="reportePromociones"><i class="fa fa-folder-open"></i> Consultar Promociones </a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-shopping-cart"></i> Productos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="altaproductos"><i class="fa fa-upload"></i> Subir Productos </a></li>
                      <li><a href="reporteProductos"><i class="fa fa-folder-open"></i> Productos Disponibles </a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-exclamation-triangle"></i> Banners <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="altapublicidad"><i class="fa fa-upload"></i> Subir Banner </a></li>
                      <li><a href="reportepublicidad"><i class="fa fa-folder-open"></i> Banners Disponibles </a></li>
                    </ul>
                  </li>
              </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('Storage/app/public/')}}/{{Session::get('sesionfoto')}}" alt="">{{Session::get('sesionname')}} {{Session::get('sesionapu')}} {{Session::get('sesionamu')}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{URL::action('LoginController@cerrarsesion')}}" onclick="return Cerrarsesion()"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesión</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          @yield('contenido')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            SportHouse Xonacatlán
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('admintemplate/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('admintemplate/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset('admintemplate/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{ asset('admintemplate/vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{ asset('admintemplate/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{ asset('admintemplate/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('admintemplate/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{ asset('admintemplate/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{ asset('admintemplate/vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{ asset('admintemplate/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('admintemplate/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{ asset('admintemplate/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{ asset('admintemplate/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{ asset('admintemplate/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('admintemplate/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{ asset('admintemplate/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{ asset('admintemplate/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{ asset('admintemplate/vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('admintemplate/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{ asset('admintemplate/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{ asset('admintemplate/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('admintemplate/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{ asset('admintemplate/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="{{ asset('admintemplate/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>
    <script src="{{ asset('admintemplate/vendors/jquery.hotkeys/jquery.hotkeys.js')}}"></script>
    <script src="{{ asset('admintemplate/vendors/google-code-prettify/src/prettify.js')}}"></script>
    <!-- jQuery Tags Input -->
    <script src="{{ asset('admintemplate/vendors/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
    <!-- Switchery -->
    <script src="{{ asset('admintemplate/vendors/switchery/dist/switchery.min.js')}}"></script>
    <!-- Select2 -->
    <script src="{{ asset('admintemplate/vendors/select2/dist/js/select2.full.min.js')}}"></script>
    <!-- Parsley -->
    <script src="{{ asset('admintemplate/vendors/parsleyjs/dist/parsley.min.js')}}"></script>
    <!-- Autosize -->
    <script src="{{ asset('admintemplate/vendors/autosize/dist/autosize.min.js')}}"></script>
    <!-- jQuery autocomplete -->
    <script src="{{ asset('admintemplate/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js')}}"></script>
    <!-- starrr -->
    <script src="{{ asset('admintemplate/vendors/starrr/dist/starrr.js')}}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('admintemplate/build/js/custom.min.js')}}"></script>
    <!-- jquery.inputmask -->
    <script src="{{ asset('admintemplate/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js')}}"></script>
    <!--<script src="{{ asset('jquery-3.3.1.js')}}"></script>-->
    <!-- Datatables -->
    <script src="{{ asset('admintemplate/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('admintemplate/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{ asset('admintemplate/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('admintemplate/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{ asset('admintemplate/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{ asset('admintemplate/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('admintemplate/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{ asset('admintemplate/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{ asset('admintemplate/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{ asset('admintemplate/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('admintemplate/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{ asset('admintemplate/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{ asset('admintemplate/vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{ asset('admintemplate/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{ asset('admintemplate/vendors/pdfmake/build/vfs_fonts.js')}}"></script>

  </body>
</html>
