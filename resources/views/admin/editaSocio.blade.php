@extends('admintemplate.main')

@section('contenido')
<div class="col-md-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Edita Socio </h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <center><div class="profile_img">
        <div id="crop-avatar">
          <img class="img-responsive avatar-view" src = "{{asset('storage/app/public/'.$socios->fotosoc)}}"  alt="Avatar" title="Foto de Perfil" width="150" height="150">
        </div>
      </div></center>
    <br />
      <form class="form-horizontal form-label-left input_mask" action = "{{route('actualizaSocio')}}" method="POST" enctype='multipart/form-data'>
        {{csrf_field()}}
        <center><h2>Datos Personales:</h2></center>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Id Socio: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='idsocio' name='idsocio' value="{{$socios->idsocio}}" readonly>
              <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre(s): </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='nombresoc' name='nombresoc' value="{{$socios->nombresoc}}" placeholder="Escriba su Nombre">
              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
              @if($errors->first('nombresoc'))<b>{{ $errors->first('nombresoc')}}@endif</b>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Apellido Paterno: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='apellidopsoc' name='apellidopsoc' value="{{$socios->apellidopsoc}}" placeholder="Escriba su Apellido Paterno">
              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
              @if($errors->first('apellidopsoc'))<b>{{ $errors->first('apellidopsoc')}}@endif</b>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Apellido Materno: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='apellidomsoc' name='apellidomsoc' value="{{$socios->apellidomsoc}}" placeholder="Escriba su Apellido Materno">
              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
              @if($errors->first('apellidomsoc'))<b>{{ $errors->first('apellidomsoc')}}@endif</b>
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
              <input type="date" class="form-control has-feedback-left" id='fechanacsoc' name='fechanacsoc' value="{{$socios->fechanacsoc}}">
              <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
              @if($errors->first('fechanacsoc'))<b>{{ $errors->first('fechanacsoc')}}@endif</b>
            </div>
        </div>
        <hr>
        <center><h2>Domicilio:</h2></center>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Calle: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='callesoc' name='callesoc' value="{{$socios->callesoc}}" placeholder="Escriba su Calle">
              <span class="fa fa-reorder form-control-feedback left" aria-hidden="true"></span>
              @if($errors->first('callesoc'))<b>{{ $errors->first('callesoc')}}@endif</b>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Numero Interior: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='numsoc' name='numsoc' value="{{$socios->numsoc}}" placeholder="Escriba su Número Interior">
              <span class="fa fa-reorder form-control-feedback left" aria-hidden="true"></span>
              @if($errors->first('numsoc'))<b>{{ $errors->first('numsoc')}}@endif</b>
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
              <input type="text" class="form-control" data-inputmask="'mask' : '(999) 999-9999'" id='telefonosoc' name='telefonosoc' value="{{$socios->telefonosoc}}">
              <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
              @if($errors->first('telefonosoc'))<b>{{ $errors->first('telefonosoc')}}@endif</b>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Email: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="email" class="form-control has-feedback-left" id='correosoc' name='correosoc' value="{{$socios->correosoc}}" placeholder="Escriba su E-mail">
              <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
              @if($errors->first('correosoc'))<b>{{ $errors->first('correosoc')}}@endif</b>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo de Membresia: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <select id='idtipomembresia' name='idtipomembresia' class="form-control" required>
                <option value="{{$idtipomembresia}}">{{$tiposmembresias}}</option>
                @foreach($tiposmembresia as $tipo)
                  <option value = '{{$tipo->idtipomembresia}}'>{{$tipo->tipomembresia}}</option>
                @endforeach
              </select>
              <span class="fa fa-users form-control-feedback right" aria-hidden="true"></span>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto: </label>
            <div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback">
              <input type="file" name="fotosoc">
            </div>
        </div>
        <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
              <a type="button" class="btn btn-warning" href="{{URL::action('SociosController@reporteSocios')}}"><i class="fa fa-rotate-left"></i> Regresar</a>
						  <button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Guardar</button>
            </div>
          </div>
      </form>
    </div>
  </div>
</div>
@stop
