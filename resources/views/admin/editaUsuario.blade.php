@extends('admintemplate.main')

@section('contenido')
<div class="col-md-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Nuevo Usuario </h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
          <center><div class="profile_img">
            <div id="crop-avatar">
              <img class="img-responsive avatar-view" src = "{{asset('storage/app/public/'.$usuarios->foto)}}"  alt="Avatar" title="Foto de Perfil" width="150" height="150">
            </div>
          </div></center>
      <br />
      <form class="form-horizontal form-label-left input_mask" action="{{route('actualizaUsuario')}}" method="POST" enctype='multipart/form-data'>
        {{csrf_field()}}
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Id Usuario: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='idusuario' name='idusuario' value="{{$usuarios->idusuario}}" readonly>
              <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre(s): </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='nombre' name='nombre' value="{{$usuarios->nombre}}" placeholder="Escriba su Nombre">
              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
              @if($errors->first('nombre'))<b>{{ $errors->first('nombre')}}@endif</b>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Apellido Paterno: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='apellidopu' name='apellidopu' value="{{$usuarios->apellidopu}}" placeholder="Escriba su Apellido Paterno">
              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
              @if($errors->first('apellidopu'))<b>{{ $errors->first('apellidopu')}}@endif</b>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Apellido Materno: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='apellidomu' name='apellidomu' value="{{$usuarios->apellidomu}}" placeholder="Escriba su Apellido Materno">
              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
              @if($errors->first('apellidomu'))<b>{{ $errors->first('apellidomu')}}@endif</b>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Email: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="email" class="form-control has-feedback-left" id='email' name='email' value="{{$usuarios->email}}" placeholder="Escriba su E-mail">
              <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
              @if($errors->first('email'))<b>{{ $errors->first('email')}}@endif</b>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Contraseña: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="password" class="form-control has-feedback-left" id='contraseña' name='contraseña' value="{{$usuarios->contraseña}}" placeholder="Escriba su Contraseña">
              <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
            </div>
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
              <input type="radio" value='2' id='activo' name="activo"> No
            </label>
          </div>
        </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo de Usuario: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <select id='idrol' name='idrol' class="form-control" required>
                <option value="{{$idrol}}">{{$rol}}</option>
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
              <input type="file"  id='foto' name='foto'>
            </div>
        </div>
        <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
              <a type="button" class="btn btn-warning" href="{{URL::action('UsuariosController@reporteUsuarios')}}"><i class="fa fa-rotate-left"></i> Regresar</a>
              <button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Actualizar</button>
            </div>
          </div>
      </form>
    </div>
  </div>
</div>
@stop
