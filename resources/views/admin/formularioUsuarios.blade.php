@extends('admintemplate.main')

@section('contenido')
<script>
$( document ).ready(function() {
    var now = new Date();
    var day = ("0" + now.getDate()).slice(-2);
    var month = ("0" + (now.getMonth() + 1)).slice(-2);
    var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
    $("#fecha").val(today);
});
</script>
<div class="col-md-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Nuevo Usuario </h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
    <br />
      <form class="form-horizontal form-label-left input_mask" action = "{{route('guardaUsuario')}}" method="POST" enctype='multipart/form-data' name="form_reloj">
        {{csrf_field()}}
        <input type="text" id="reloj" name="reloj" size="6"  class="count" style="background-color : white; color : bold; font-family : Arial, Arial, Helvetica; font-size : 30pt; text-align : center; border:none;" onfocus="window.document.form_reloj.reloj.blur()" hidden>
        <input type="hidden" class="form-control has-feedback-left" id='fecha' name='fecha'>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Id Usuario: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='idusuario' name='idusuario' value="{{$idusers}}"readonly>
              <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre(s): </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='nombre' name='nombre' value="{{old('nombre')}}" placeholder="Escriba su Nombre" onblur="fieldSizeNombre()">
              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
              @if($errors->first('nombre'))<b>{{$errors->first('nombre')}}@endif</b>
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
                  if(tam.length>=5 && tam.length<=25){
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
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Apellido Paterno: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='apellidopu' name='apellidopu' value="{{old('apellidopu')}}" placeholder="Escriba su Apellido Paterno" onblur="fieldSizeApellidopu()">
              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
              @if($errors->first('apellidopu'))<b>{{$errors->first('apellidopu')}}@endif</b>
            </div>

            <p id="errorapellidopu"></p>
          <script>
            const $apellidopu = document.querySelector("#apellidopu");
            const apellidopu = /[A-Z a-z]+/;

              $apellidopu.addEventListener("keydown", event => {
              if(apellidopu.test(event.key)){
                document.getElementById('apellidopu').style.border="1px solid #00cc00";
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
              function fieldSizeApellidopu(){
                var tam = document.getElementById("apellidopu").value;
                  if(tam.length>=5 && tam.length<=25){
                    document.getElementById("errorapellidopu").innerHTML = "";
                  }
                  else{
                    document.getElementById("errorapellidopu").innerHTML = "Error: Tamaño del texto";
                    document.getElementById('apellidopu').style.border= "1px solid #FF0000"
                  }
              }
          </script>

        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Apellido Materno: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='apellidomu' name='apellidomu' value="{{old('apellidomu')}}" placeholder="Escriba su Apellido Materno" onblur="fieldSizeApellidomu()">
              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
              @if($errors->first('apellidomu'))<b>{{$errors->first('apellidomu')}}@endif</b>
            </div>

            <p id="errorapellidomu"></p>
          <script>
            const $apellidomu = document.querySelector("#apellidomu");
            const apellidomu = /[A-Z a-z]+/;

              $apellidomu.addEventListener("keydown", event => {
              if(apellidomu.test(event.key)){
                document.getElementById('apellidomu').style.border="1px solid #00cc00";
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
              function fieldSizeApellidomu(){
                var tam = document.getElementById("apellidomu").value;
                  if(tam.length>=5 && tam.length<=25){
                    document.getElementById("errorapellidomu").innerHTML = "";
                  }
                  else{
                    document.getElementById("errorapellidomu").innerHTML = "Error: Tamaño del texto";
                    document.getElementById('apellidomu').style.border= "1px solid #FF0000"
                  }
              }
          </script>


        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Email: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="email" class="form-control has-feedback-left" id='email' name='email' value="{{old('email')}}" placeholder="Escriba su E-mail" onblur="fieldSizeEmail()">
              <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
              @if($errors->first('email'))<b>{{$errors->first('email')}}@endif</b>
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
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Contraseña: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="password" class="form-control has-feedback-left" id='contraseña' name='contraseña' value="{{old('contraseña')}}" placeholder="Escriba su Contraseña" onblur="fieldSizecontraseña()">
              <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
            </div>
            <p id="errorcontraseña"></p>
        <script>
          const $contraseña = document.querySelector("#contraseña");
          const contraseña = /[0-9A-Za-z_@]+/;

            $contraseña.addEventListener("keydown", event => {
            if(contraseña.test(event.key)){
              document.getElementById('contraseña').style.border="1px solid #00cc00";
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
            function fieldSizecontraseña(){
              var tam = document.getElementById("contraseña").value;
                if(tam.length>=8 && tam.length<=12){
                  document.getElementById("errorcontraseña").innerHTML = "";
                }
                else{
                  document.getElementById("errorcontraseña").innerHTML = "Error: Tamaño del texto";
                  document.getElementById('contraseña').style.border= "1px solid #FF0000"
                }
            }
        </script>
        </div>
        <div class="form-group">
          <label class="col-md-3 col-sm-3 col-xs-12 control-label">Activo: </label>
        <div class="col-md-9 col-sm-9 col-xs-12">
          <div class="radio">
            <label>
              <input type="radio" checked="" value='1' id='activo' name="activo"> Si
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" value='2' id='activo2' name="activo"> No
            </label>
          </div>
        </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo de Usuario: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <select id='idrol' name='idrol' class="form-control" required>
                @foreach($roles as $rol)
                  <option value = '{{$rol->idrol}}'>{{$rol->tipo}}</option>
                @endforeach
              </select>
              <span class="fa fa-users form-control-feedback right" aria-hidden="true"></span>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto: </label>
            <div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback">
              <input type="file" name="foto">
            </div>
        </div>
        <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
              <a type="button" class="btn btn-warning" href="{{URL::action('AdminController@inicio')}}"><i class="fa fa-rotate-left"></i> Cancelar</a>
						  <button class="btn btn-danger" type="reset"><span class="fa fa-trash"></span> Borrar</button>
              <button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Guardar</button>
            </div>
          </div>
      </form>
    </div>
  </div>
</div>
@stop
