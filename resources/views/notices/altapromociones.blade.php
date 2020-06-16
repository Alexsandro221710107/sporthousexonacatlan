@extends('admintemplate.main')

@section('contenido')
<div class="col-md-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Alta Promocion</h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
    <br />
    <form class="form-horizontal form-label-left input_mask" action = "{{route('guardapromocion')}}" method="POST" enctype='multipart/form-data'>
      {{csrf_field()}}
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Id Promocion: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='idprom' name='idprom' value="{{$idprom}}"  readonly>
              <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Promocion: </label>
            <div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback">
              <input type="file" name="promocion" id="promocion">
            </div>
        </div>

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Descripcion: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='descripcionprom' name='descripcionprom' placeholder="Escriba una descripcion de la promocion">
              <span class="fa fa-navicon form-control-feedback left" aria-hidden="true"></span>
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
