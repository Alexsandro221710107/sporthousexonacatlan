@extends('admintemplate.main')

@section('contenido')
<div class="col-md-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Edita Evento </h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <center><div class="profile_img">
        <div id="crop-avatar">
          <img class="img-responsive avatar-view" src="{{asset('Storage/app/public/'.$eventos->evento)}}"  alt="Avatar" title="Foto de Perfil" width="150" height="150">
        </div>
      </div></center>
    <br />
      <form class="form-horizontal form-label-left input_mask" action = "{{route('actualizaEvento')}}" method="POST" enctype='multipart/form-data'>
        {{csrf_field()}}
                <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Id Evento: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='idev' name='idev' value="{{$eventos->idev}}" readonly>
              <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
            </div>
        </div>
       <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre del Evento: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='nombreev' name='nombreev' value="{{$eventos->nombreev}}">
              <span class="fa fa-birthday-cake form-control-feedback left" aria-hidden="true"></span>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Descripcion: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='descripcionev' name='descripcionev' value="{{$eventos->descripcionev}}">
              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Evento: </label>
            <div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback">
              <input type="file" name="evento" id="evento">
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="date" class="form-control has-feedback-left" id='fechaev' name='fechaev' value="{{$eventos->fechaev}}">
              <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
            </div>
        </div>
        <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
              <a type="button" class="btn btn-warning" href="{{URL::action('EventosController@reporteEventos')}}"><i class="fa fa-rotate-left"></i> Regresar</a>
						  <button class="btn btn-danger" type="reset"><span class="fa fa-trash"></span> Borrar</button>
              <button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Guardar</button>
            </div>
          </div>
      </form>
    </div>
  </div>
</div>
@stop
