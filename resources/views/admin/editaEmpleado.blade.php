@extends('admintemplate.main')

@section('contenido')
<div class="col-md-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Edita Empleado </h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <center><div class="profile_img">
        <div id="crop-avatar">
          <img class="img-responsive avatar-view" src = "{{asset('storage/app/public/'.$empleados->fotoemp)}}"  alt="Avatar" title="Foto de Perfil" width="150" height="150">
        </div>
      </div></center>
    <br />
      <form class="form-horizontal form-label-left input_mask" action = "{{route('actualizaEmpleado')}}" method="POST" enctype='multipart/form-data'>
        {{csrf_field()}}
        <center><h2>Datos Personales:</h2></center>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Id Empleado: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='idempleado' name='idempleado' value="{{$empleados->idempleado}}" readonly>
              <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre(s): </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='nombreemp' name='nombreemp' value="{{$empleados->nombreemp}}" placeholder="Escriba su Nombre">
              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
              @if($errors->first('nombreemp'))<b>{{ $errors->first('nombreemp')}}@endif</b>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Apellido Paterno: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='apellidope' name='apellidope' value="{{$empleados->apellidope}}" placeholder="Escriba su Apellido Paterno">
              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
              @if($errors->first('apellidope'))<b>{{ $errors->first('apellidope')}}@endif</b>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Apellido Materno: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='apellidome' name='apellidome' value="{{$empleados->apellidome}}" placeholder="Escriba su Apellido Materno">
              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
              @if($errors->first('apellidome'))<b>{{ $errors->first('apellidome')}}@endif</b>
            </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 col-sm-3 col-xs-12 control-label">Sexo: </label>
        <div class="col-md-9 col-sm-9 col-xs-12">
          <div class="radio">
            <label>
              <input type="radio" checked="" value='H' id='activo' name="sexo"> Hombre
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" value='M' id='activo' name="sexo"> Mujer
            </label>
          </div>
        </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha de Nacimiento: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="date" class="form-control has-feedback-left" id='fechanac' name='fechanac' value="{{$empleados->fechanac}}">
              <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
              @if($errors->first('fechanac'))<b>{{ $errors->first('fechanac')}}@endif</b>
            </div>
        </div>
        <hr>
        <center><h2>Domicilio:</h2></center>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Calle: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='calle' name='calle' value="{{$empleados->calle}}" placeholder="Escriba su Calle">
              <span class="fa fa-reorder form-control-feedback left" aria-hidden="true"></span>
              @if($errors->first('calle'))<b>{{ $errors->first('calle')}}@endif</b>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Numero Interior: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='num' name='num' value="{{$empleados->num}}" placeholder="Escriba su Número Interior">
              <span class="fa fa-reorder form-control-feedback left" aria-hidden="true"></span>
              @if($errors->first('num'))<b>{{ $errors->first('num')}}@endif</b>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Estado: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <select id='idestado' name='idestado' class="form-control" required>
                <option value="{{$idestado}}">{{$estados}}</option>
                @foreach($estado as $estado)
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
                <option value="{{$idmunicipio}}">{{$municipios}}</option>
                @foreach($municipio as $municipio)
                  <option value = '{{$municipio->idmunicipio}}'>{{$municipio->nombremunicipio}}</option>
                @endforeach
              </select>
              <span class="fa fa-reorder form-control-feedback right" aria-hidden="true"></span>
            </div>
        </div>
        <hr>
        <center><h2>Contacto:</h2></center>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-3">Número de Teléfono:</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" class="form-control" data-inputmask="'mask' : '(999) 999-9999'" id='telefono' name='telefono' value="{{$empleados->telefono}}">
              <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
              @if($errors->first('telefono'))<b>{{ $errors->first('telefono')}}@endif</b>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Email: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="email" class="form-control has-feedback-left" id='correoemp' name='correoemp' value="{{$empleados->correoemp}}" placeholder="Escriba su E-mail">
              <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
              @if($errors->first('correoemp'))<b>{{ $errors->first('correoemp')}}@endif</b>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo de Empleado: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <select id='idtipoempleado' name='idtipoempleado' class="form-control" required>
                <option value="{{$idtipoempleado}}">{{$tiposempleados}}</option>
                @foreach($tipoempleado as $tipo)
                  <option value = '{{$tipo->idtipoempleado}}'>{{$tipo->tipoempleado}}</option>
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
              <a type="button" class="btn btn-warning" href="{{URL::action('EmpleadosController@reporteEmpleados')}}"><i class="fa fa-rotate-left"></i> Regresar</a>
						  <button class="btn btn-danger" type="reset"><span class="fa fa-trash"></span> Borrar</button>
              <button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Guardar</button>
            </div>
          </div>
      </form>
    </div>
  </div>
</div>
@stop
