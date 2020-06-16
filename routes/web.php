<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('site.index');
});

//Sitio

Route::get('/index','SiteController@index');

Route::get('/machote','SiteController@machote');

Route::get('/sobrenosotros','SiteController@sobrenosotros');

Route::get('/contacto','SiteController@contacto');

Route::get('/galeria','SiteController@galeria');

Route::get('/servicios','SiteController@servicios');

//Login
Route::get('iniciarsesion','LoginController@iniciarsesion');

Route::get('/cerrarsesion','LoginController@cerrarsesion');

Route::POST('/index','LoginController@index')->name('index');

Route::get('/restablecer','LoginController@restablecercontraseña');

Route::POST('/validar','LoginController@validarCorreo')->name('validarCorreo');

//Administrador
Route::get('inicio','AdminController@inicio');

//Usuarios
Route::get('reporteUsuarios','UsuariosController@reporteUsuarios');

Route::get('formularioUsuarios','UsuariosController@formularioUsuarios');

Route::POST('/guardaUsuario','UsuariosController@guardaUsuario')-> name('guardaUsuario');

Route::get('/editaUsuario/{idusuario}','UsuariosController@editaUsuario')->name('editaUsuario');

Route::POST('/actualizaUsuario','UsuariosController@actualizaUsuario')-> name('actualizaUsuario');

Route::get('/eliminaUsuario/{idusuario}','UsuariosController@eliminaUsuario')->name('eliminaUsuario');

//Empleados
Route::get('reporteEmpleados','EmpleadosController@reporteEmpleados');

Route::get('formularioEmpleados','EmpleadosController@formularioEmpleados');

Route::POST('/guardaEmpleado','EmpleadosController@guardaEmpleado')-> name('guardaEmpleado');

Route::get('/editaEmpleado/{idempleado}','EmpleadosController@editaEmpleado')->name('editaEmpleado');

Route::POST('/actualizaEmpleado','EmpleadosController@actualizaEmpleado')-> name('actualizaEmpleado');

Route::get('/eliminaEmpleado/{idempleado}','EmpleadosController@eliminaEmpleado')->name('eliminaEmpleado');

//Socios
Route::get('reporteSocios','SociosController@reporteSocios');

Route::get('formularioSocios','SociosController@formularioSocios');

Route::POST('/guardaSocio','SociosController@guardaSocio')-> name('guardaSocio');

Route::get('/editaSocio/{idsocio}','SociosController@editaSocio')->name('editaSocio');

Route::POST('/actualizaSocio','SociosController@actualizaSocio')-> name('actualizaSocio');

Route::get('/eliminaSocio/{idsocio}','SociosController@eliminaSocio')->name('eliminaSocio');

//Casilleros
Route::get('reporteCasilleros','CasillerosController@reporteCasilleros');

Route::get('formularioCasilleros','CasillerosController@formularioCasilleros');

Route::POST('/guardaCasillero','CasillerosController@guardaCasillero')-> name('guardaCasillero');

Route::get('/editaCasillero/{idcasillero}','CasillerosController@editaCasillero')->name('editaCasillero');

Route::POST('/actualizaCasillero','CasillerosController@actualizaCasillero')-> name('actualizaCasillero');

Route::get('/eliminaCasillero/{idcasillero}','CasillerosController@eliminaCasillero')->name('eliminaCasillero');

//Asignaciones
Route::get('reporteAsignaciones','AsignacionesController@reporteAsignaciones');

Route::get('formularioAsignaciones','AsignacionesController@formularioAsignaciones');

Route::POST('/guardaAsignacion','AsignacionesController@guardaAsignacion')-> name('guardaAsignacion');

Route::get('/editaAsignacion/{idasignacion}','AsignacionesController@editaAsignacion')->name('editaAsignacion');

Route::POST('/actualizaAsignacion','AsignacionesController@actualizaAsignacion')-> name('actualizaAsignacion');

Route::get('/eliminaAsignacion/{idasignacion}','AsignacionesController@eliminaAsignacion')->name('eliminaAsignacion');

//Pagos
Route::get('reportePagos','PagosController@reportePagos');

Route::get('formularioPagos','PagosController@formularioPagos');

Route::POST('/guardaPago','PagosController@guardaPago')-> name('guardaPago');

//Combos Dinamicos
Route::get('municipios/{idestado}', 'EstadosController@municipios');

Route::get('municipioSoc/{idestado}', 'EstadosController@municipioSoc');

//Email
Route::POST('/contacto', 'ContactoController@contacto')->name('contacto');

//Modulo de Control
Route::get('entrada','ModuloController@entrada');

Route::get('salida','ModuloController@salida');

Route::POST('/guardaEntrada','ModuloController@guardaEntrada')-> name('guardaEntrada');

Route::POST('buscar','ModuloController@buscar')->name('buscar');

Route::POST('fecha','ModuloController@fecha')->name('fecha');

Route::POST('hora','ModuloController@hora')->name('hora');

Route::POST('/guardaSalida','ModuloController@guardaSalida')-> name('guardaSalida');

//Archivos
Route::get('nuevoArchivo','ArchivosController@nuevoArchivo');

Route::POST('/guardarArchivo','ArchivosController@guardarArchivo')-> name('guardarArchivo');

Route::get('reporteArchivos','ArchivosController@reporteArchivos');

Route::get('/editarArchivo/{idfile}','ArchivosController@editarArchivo')->name('editarArchivo');

Route::POST('/actualizarArchivo','ArchivosController@actualizarArchivo')-> name('actualizarArchivo');

Route::get('/eliminarArchivo/{idfile}','ArchivosController@eliminarArchivo')->name('eliminarArchivo');

//Archivos
Route::get('nuevoAviso','AvisosController@nuevoAviso');

Route::POST('/guardarAviso','AvisosController@guardarAviso')-> name('guardarAviso');

Route::get('reporteAvisos','AvisosController@reporteAvisos');

Route::get('/editarAviso/{ida}','AvisosController@editarAviso')->name('editarAviso');

Route::POST('/actualizarAviso','AvisosController@actualizarAviso')-> name('actualizarAviso');

Route::get('/eliminarAviso/{ida}','AvisosController@eliminarAviso')->name('eliminarAviso');

//Promociones
Route::get('reportePromociones','PromocionesController@reportePromociones');

Route::get('altapromociones','PromocionesController@altapromociones');

Route::POST('/guardapromocion','PromocionesController@guardapromocion')-> name('guardapromocion');

Route::get('/editaPromocion/{idprom}','PromocionesController@editaPromocion')->name('editaPromocion');

Route::POST('/actualizaPromocion','PromocionesController@actualizaPromocion')-> name('actualizaPromocion');

Route::get('/eliminaPromocion/{idprom}','PromocionesController@eliminaPromocion')->name('eliminaPromocion');

//Eventos
Route::get('reporteEventos','EventosController@reporteEventos');

Route::get('altaeventos','EventosController@altaeventos');

Route::POST('/guardaevento','EventosController@guardaevento')-> name('guardaevento');

Route::get('/editaEvento/{idev}','EventosController@editaEvento')->name('editaEvento');

Route::POST('/actualizaEvento','EventosController@actualizaEvento')-> name('actualizaEvento');

Route::get('/eliminaEvento/{idev}','EventosController@eliminaEvento')->name('eliminaEvento');

//Sitio Files

Route::get('siteArchivos','SiteNoticesController@siteArchivos');

Route::get('siteAvisos','SiteNoticesController@siteAvisos');

Route::get('siteEventos','SiteNoticesController@siteEventos');

Route::get('sitePromociones','SiteNoticesController@sitePromociones');

Route::get('siteArchivos','SiteNoticesController@siteArchivos');

Route::get('publicidad','SiteNoticesController@publicidad');

Route::get('productos','SiteNoticesController@productos');

//Mensajes Cotizaciones
Route::POST('/enviargym','CotizacionesController@enviargym')->name('enviargym');

Route::POST('/enviarbox','CotizacionesController@enviarbox')->name('enviarbox');

Route::POST('/enviaryoga','CotizacionesController@enviaryoga')->name('enviaryoga');

Route::POST('/enviarfutbol','CotizacionesController@enviarfutbol')->name('enviarfutbol');

Route::POST('/enviarnatacion','CotizacionesController@enviarnatacion')->name('enviarnatacion');

Route::POST('/enviartaekwondo','CotizacionesController@enviartaekwondo')->name('enviartaekwondo');

Route::POST('/enviarbasquetbol','CotizacionesController@enviarbasquetbol')->name('enviarbasquetbol');

Route::POST('/enviarsalon','CotizacionesController@enviarsalon')->name('enviarsalon');

Route::POST('/enviarballet','CotizacionesController@enviarballet')->name('enviarballet');

//Citas
Route::get('/agendarcita','CitasController@agendarcita');

Route::POST('/enviarcita','CitasController@enviarcita')->name('enviarcita');

//Banners
Route::get('altapublicidad','BannerController@altapublicidad');

Route::POST('/guardarPublicidad','BannerController@guardarPublicidad')-> name('guardarPublicidad');

Route::get('reportepublicidad','BannerController@reportepublicidad');

Route::get('/editarpublicidad/{idfilep}','BannerController@editarpublicidad')->name('editarpublicidad');

Route::POST('/actualizarpublicidad','BannerController@actualizarpublicidad')-> name('actualizarpublicidad');

Route::get('/eliminarpublicidad/{idfilep}','BannerController@eliminarpublicidad')->name('eliminarpublicidad');

//Productos
Route::get('reporteProductos','ProductosController@reporteProductos');

Route::get('altaproductos','ProductosController@altaproductos');

Route::POST('/guardaproducto','ProductosController@guardaproducto')-> name('guardaproducto');

Route::get('/editaProducto/{idproducto}','ProductosController@editaProducto')->name('editaProducto');

Route::POST('/actualizaProducto','ProductosController@actualizaProducto')-> name('actualizaProducto');

Route::get('/eliminaProducto/{idproducto}','ProductosController@eliminaProducto')->name('eliminaProducto');
