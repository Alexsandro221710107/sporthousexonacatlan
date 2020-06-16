@extends('admintemplate.main')

@section('contenido')
<div class="col-md-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Asignar Casillero</h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
    <br />
      <form class="form-horizontal form-label-left input_mask" action = "{{route('guardaCasillero')}}" method="POST" enctype='multipart/form-data'>
        {{csrf_field()}}
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Id Casillero: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='idcasillero' name='idcasillero' value="{{$idcasilleros}}" readonly>
              <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre Socio: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <select id='idsocio' name='idsocio' class="form-control" required>
                @foreach($socios as $soc)
                  <option value = '{{$soc->idsocio}}'>{{$soc->nombresoc}} {{$soc->apellidopsoc}} {{$soc->apellidomsoc}}</option>
                @endforeach
              </select>
              <span class="fa fa-users form-control-feedback right" aria-hidden="true"></span>
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
