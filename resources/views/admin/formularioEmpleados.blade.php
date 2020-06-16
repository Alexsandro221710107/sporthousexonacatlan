@extends('admintemplate.main')

@section('contenido')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<div class="col-md-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Agregar Empleado </h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
    <br />
      <form class="form-horizontal form-label-left input_mask" action = "{{route('guardaEmpleado')}}" method="POST" enctype='multipart/form-data'>
        {{csrf_field()}}
        <center><h2>Datos Personales:</h2></center>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Id Empleado: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='idempleado' name='idempleado' value="{{$idempleados}}" readonly>
              <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre(s): </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='nombreemp' name='nombreemp' value="{{old('nombreemp')}}" placeholder="Escriba su Nombre" onblur="fieldSizeNombreemp()">
              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
              @if($errors->first('nombreemp'))<b>{{ $errors->first('nombreemp')}}@endif</b>
            </div>
            <p id="errornombreemp"></p>
          <script>
            const $nombreemp = document.querySelector("#nombreemp");
            const nombreemp = /[A-Z a-z]+/;

              $nombreemp.addEventListener("keydown", event => {
              if(nombreemp.test(event.key)){
                document.getElementById('nombreemp').style.border="1px solid #00cc00";
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
              function fieldSizeNombreemp(){
                var tam = document.getElementById("nombreemp").value;
                  if(tam.length>=5 && tam.length<=25){
                    document.getElementById("errornombreemp").innerHTML = "";
                  }
                  else{
                    document.getElementById("errornombreemp").innerHTML = "Error: Tamaño del texto";
                    document.getElementById('nombreemp').style.border= "1px solid #FF0000"
                  }
              }
          </script>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Apellido Paterno: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='apellidope' name='apellidope' value="{{old('apellidope')}}" placeholder="Escriba su Apellido Paterno" onblur="fieldSizeApellidope()">
              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
              @if($errors->first('apellidope'))<b>{{ $errors->first('apellidope')}}@endif</b>
            </div>
            <p id="errorapellidope"></p>
          <script>
            const $apellidope = document.querySelector("#apellidope");
            const apellidope = /[A-Z a-z]+/;

              $apellidope.addEventListener("keydown", event => {
              if(apellidope.test(event.key)){
                document.getElementById('apellidope').style.border="1px solid #00cc00";
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
              function fieldSizeApellidope(){
                var tam = document.getElementById("apellidope").value;
                  if(tam.length>=5 && tam.length<=25){
                    document.getElementById("errorapellidope").innerHTML = "";
                  }
                  else{
                    document.getElementById("errorapellidope").innerHTML = "Error: Tamaño del texto";
                    document.getElementById('apellidope').style.border= "1px solid #FF0000"
                  }
              }
          </script>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Apellido Materno: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='apellidome' name='apellidome' value="{{old('apellidome')}}" placeholder="Escriba su Apellido Materno" onblur="fieldSizeApellidome()">
              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
              @if($errors->first('apellidome'))<b>{{ $errors->first('apellidome')}}@endif</b>
            </div>
            <p id="errorapellidome"></p>
          <script>
            const $apellidome = document.querySelector("#apellidome");
            const apellidome = /[A-Z a-z]+/;

              $apellidome.addEventListener("keydown", event => {
              if(apellidome.test(event.key)){
                document.getElementById('apellidome').style.border="1px solid #00cc00";
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
              function fieldSizeApellidome(){
                var tam = document.getElementById("apellidome").value;
                  if(tam.length>=5 && tam.length<=25){
                    document.getElementById("errorapellidome").innerHTML = "";
                  }
                  else{
                    document.getElementById("errorapellidome").innerHTML = "Error: Tamaño del texto";
                    document.getElementById('apellidome').style.border= "1px solid #FF0000"
                  }
              }
          </script>
        </div>
        <div class="form-group">
          <label class="col-md-3 col-sm-3 col-xs-12 control-label">Sexo: </label>
        <div class="col-md-9 col-sm-9 col-xs-12">
          <div class="radio">
            <label>
              <input type="radio" checked="" value='H' id='sexo' name="sexo"> Hombre
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" value='M' id='sexo' name="sexo"> Mujer
            </label>
          </div>
        </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha de Nacimiento: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="date" class="form-control has-feedback-left" id='fechanac' name='fechanac'>
              <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
              @if($errors->first('fechanac'))<b>{{ $errors->first('fechanac')}}@endif</b>
            </div>
        </div>
        <hr>
        <center><h2>Domicilio:</h2></center>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Calle: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='calle' name='calle' value="{{old('calle')}}" placeholder="Escriba su Calle" onblur="fieldSizecalle()">
              <span class="fa fa-reorder form-control-feedback left" aria-hidden="true"></span>
              @if($errors->first('calle'))<b>{{ $errors->first('calle')}}@endif</b>
            </div>
            <p id="errorcalle"></p>
          <script>
            const $calle = document.querySelector("#calle");
            const calle = /[0-9A-Za-z]+/;

              $calle.addEventListener("keydown", event => {
              if(calle.test(event.key)){
                document.getElementById('calle').style.border="1px solid #00cc00";
              }
              });
              function fieldSizecalle(){
                var tam = document.getElementById("calle").value;
                  if(tam.length>=5 && tam.length<=25){
                    document.getElementById("errorcalle").innerHTML = "";
                  }
                  else{
                    document.getElementById("errorcalle").innerHTML = "Error: Tamaño del texto";
                    document.getElementById('calle').style.border= "1px solid #FF0000"
                  }
              }
          </script>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Numero Interior: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='num' name='num' value="{{old('num')}}" placeholder="Escriba su Número Interior">
              <span class="fa fa-reorder form-control-feedback left" aria-hidden="true"></span>
              @if($errors->first('num'))<b>{{ $errors->first('num')}}@endif</b>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Estado: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <select id='idestado' name='idestado' class="form-control" required>
                @foreach($estados as $estado)
                  <option value = '{{$estado->idestado}}'>{{$estado->nombreestado}}</option>
                @endforeach
              </select>
              <span class="fa fa-reorder form-control-feedback right" aria-hidden="true"></span>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Municipio: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <select id='idmunicipio' name='idmunicipio' class="form-control" required>
              </select>
              <span class="fa fa-reorder form-control-feedback right" aria-hidden="true"></span>
            </div>
        </div>
        <hr>
        <center><h2>Contacto:</h2></center>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-3">Número de Teléfono:</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" class="form-control" data-inputmask="'mask' : '(999) 999-9999'" id='telefono' name='telefono'>
              <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
              @if($errors->first('telefono'))<b>{{ $errors->first('telefono')}}@endif</b>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Email: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="email" class="form-control has-feedback-left" id='correoemp' name='correoemp' value="{{old('correoemp')}}" placeholder="Escriba su E-mail">
              <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
              @if($errors->first('correoemp'))<b>{{ $errors->first('correoemp')}}@endif</b>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo de Empleado: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <select id='idtipoempleado' name='idtipoempleado' class="form-control" required>
                @foreach($tiposempleados as $tipoemp)
                  <option value = '{{$tipoemp->idtipoempleado}}'>{{$tipoemp->tipoempleado}}</option>
                @endforeach
              </select>
              <span class="fa fa-users form-control-feedback right" aria-hidden="true"></span>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto: </label>
            <div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback">
              <input type="file" name="fotoemp">
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
<script>
  $(document).ready(function(){
    $("#idestado").change(function(){
      var idestado = $(this).val();
      $.get('municipios/'+idestado, function(data){
        //esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        console.log(data);
          var municipios = '<option value="">Seleccione un Municipio</option>'
            for (var i=0; i<data.length;i++)
              municipios+='<option value="'+data[i].idmunicipio+'">'+data[i].nombremunicipio+'</option>';
            $("#idmunicipio").html(municipios);
      });
    });
  });
</script>
@stop
