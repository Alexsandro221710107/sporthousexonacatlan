@extends('site.machote')
@section('contenido')
<script type="text/javascript">
  function ShowSelected()
  {
    /* Para obtener el valor */
    var cod = document.getElementById("area").value;
    document.getElementById("idarea").value=cod;
    /* Para obtener el texto */
    var combo = document.getElementById("area");
    var selected = combo.options[combo.selectedIndex].text;
    document.getElementById("nombrearea").value=selected;
  }
</script>
<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img bg-overlay" style="background-image: url(sitetemplate/img/bg-img/breadcumb-2.jpg);">
    <div class="bradcumbContent">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Agendar Cita</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Agendar Cita</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->
<section class="contact-area section-padding-100">
    <div class="container">

        <div class="col-md-12 col-xs-12">
          <div class="x_panel">
            <div class="x_content">
                  <form class="form-horizontal form-label-left input_mask" action = "{{route('enviarcita')}}" method="POST" enctype='multipart/form-data' name="form_reloj">
                    {{csrf_field()}}
                      <input type="text" id="reloj" name="reloj" size="6"  class="count" style="background-color : white; color : bold; font-family : Arial, Arial, Helvetica; font-size : 30pt; text-align : center; border:none;" onfocus="window.document.form_reloj.reloj.blur()" hidden>
                        <div class="form-group">
                          <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre: </label>
                            <div class="col-md-9 col-sm-9 col-xs-12 form-group">
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese Su Nombre Completo" onblur="fieldSizeNombre()">
                            </div>
                            <p id="errornombre"></p>
                          <script>
                            const $nombre = document.querySelector("#nombre");
                            const nombre = /[A-Z a-z]+/;

                              $nombre.addEventListener("keydown", event => {
                              if(nombre.test(event.key)){
                                document.getElementById('nombre').style.border="1px solid #00cc00";
                              }
                              else{
                                if(event.keyCode==8){
                                  //console.log("backspace");
                                }
                                else{
                                  event.preventDefault();
                                  //var tcla = event.keyCode;
                                  //console.log(tcla);
                                }
                              }
                              });
                              function fieldSizeNombre(){
                                var tam = document.getElementById("nombre").value;
                                  if(tam.length>=5 && tam.length<=50){
                                    document.getElementById("errornombre").innerHTML = "";
                                  }
                                  else{
                                    document.getElementById("errornombre").innerHTML = "Error: Tamaño del texto";
                                    document.getElementById('nombre').style.border= "1px solid #FF0000"
                                  }
                              }
                          </script>
                        </div>
                        <div class="form-group">
                          <span class="fa fa-inbox form-control-feedback right" aria-hidden="true"></span>
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Servicios: </label>
                            <div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback">
                              <select id='area' name='area' class="form-control" required style="height:50px; text-align:center;" onchange="ShowSelected();">
                                <option value="" selected>Seleccione una Opción</option>
                                @foreach($areas as $ar)
                                  <option value = '{{$ar->idarea}}'>{{$ar->nombrearea}}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3  form-group has-feedback" hidden>
                          <input type="text" class="form-control has-feedback-left" id="idarea" name="idarea">
                          <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <div class="form-group">
                          <div class="col-md-9 col-sm-9  form-group has-feedback">
                            <span class="fa fa-tasks form-control-feedback left" aria-hidden="true"></span>
                            <label>Nombre del Servicio:</label>
                          </div>
                        </div>
                        <div class="col-md-9 col-sm-9  form-group has-feedback">
                          <input type="text" class="form-control has-feedback-left" id="nombrearea" name="nombrearea" readonly style="text-align:center;">
                          @if($errors->first('nombrearea'))<b>{{ $errors->first('nombrearea')}}@endif</b>
                        </div>
                        <div class="form-group">
                          <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha: </label>
                            <div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback">
                              <input type="date" class="form-control has-feedback-left" id='fecha' name='fecha' value="{{old('fecha')}}" placeholder="Escriba su Contraseña" style="text-align:center;">
                            </div>
                        </div>
                        <div class="form-group">
                          <span class="fa fa-info form-control-feedback right" aria-hidden="true"></span>
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Asunto: </label>
                            <div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback">
                              <textarea  class="form-control" id="mensaje" name="mensaje" cols="30" rows="10" placeholder="Asunto" style="text-align:center;"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                          <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Email: </label>
                            <div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback">
                              <input type="email" class="form-control has-feedback-left" id='email' name='email'  placeholder="Escriba su E-mail" style="text-align:center;" onblur="fieldSizeEmail()">
                            </div>

                            <p id="erroremail"></p>
                          <script>
                            const $email = document.querySelector("#email");
                            const email = /[0-9A-Za-z_@.]+/;

                              $email.addEventListener("keydown", event => {
                              if(email.test(event.key)){
                                document.getElementById('email').style.border="1px solid #00cc00";
                              }
                              else{
                                if(event.keyCode==8){
                                  //console.log("backspace");
                                }
                                else{
                                  event.preventDefault();
                                  //var tcla = event.keyCode;
                                  //console.log(tcla);
                                }
                              }
                              });
                              function fieldSizeEmail(){
                                var tam = document.getElementById("email").value;
                                  if(tam.length>=5 && tam.length<=25){
                                    document.getElementById("erroremail").innerHTML = "";
                                  }
                                  else{
                                    document.getElementById("erroremail").innerHTML = "Error: Tamaño del texto";
                                    document.getElementById('email').style.border= "1px solid #FF0000"
                                  }
                              }
                          </script>
                        </div>
                        <div class="form-group">
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                          <label class="control-label col-md-3 col-sm-3 col-xs-3">Número de Teléfono:</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" class="form-control" data-inputmask="'mask' : '(999) 999-9999'" id='telefonocita' name='telefonocita' style="text-align:center;">
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                          <div class="form-group">
                            <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-4">
                              <button class="fitness-btn mr-3" type="submit" value="enviar"><span class="fa fa-arrow-right"></span>  Envíar</button>
                              <a type="button" class="fitness-btn mr-3 " href="{{URL::action('CitasController@agendarcita')}}" style="background-color:white;border-color: #f05a0a; color:orange;"><i class="fa fa-rotate-left"></i> Cancelar</a>
                              <a type="button" class="fitness-btn mr-3 " type="reset" href="" style="background-color:white;border-color:  #f00a0a ; color:red;"><span class="fa fa-trash"></span> Borrar</a>
                            </div>
                          </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- ##### Contact Area End ##### -->
@stop
