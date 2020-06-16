@extends('admintemplate.main')

@section('contenido')
<div class="col-md-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Editar Asignación de Área(Empleados)</h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
    <br />
      <form class="form-horizontal form-label-left input_mask" action = "{{route('actualizaAsignacion')}}" method="POST" enctype='multipart/form-data'>
        {{csrf_field()}}
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Id Asignación: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='idasignacion' name='idasignacion' value="{{$asignaciones->idasignacion}}" readonly>
              <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Área a Asignar: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <select id='idarea' name='idarea' class="form-control" required>
                <option value = '{{$idarea}}'>{{$areas}}</option>
                @foreach($area as $a)
                  <option value = '{{$a->idarea}}'>{{$a->nombrearea}}</option>
                @endforeach
              </select>
              <span class="fa fa-building form-control-feedback right" aria-hidden="true"></span>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Empleado: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <select id='idempleado' name='idempleado' class="form-control" required>
                <option value = '{{$idempleado}}'>{{$empleados}} {{$empleadosape}} {{$empleadosame}}</option>
                @foreach($empleado as $e)
                  <option value = '{{$e->idempleado}}'>{{$e->nombreemp}} {{$e->apellidope}} {{$e->apellidome}}</option>
                @endforeach
              </select>
              <span class="fa fa-users form-control-feedback right" aria-hidden="true"></span>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha de Asignación: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='fecha' name='fecha' value="{{$asignaciones->fecha}}" readonly>
              <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
            </div>
        </div>
        <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
              <a type="button" class="btn btn-warning" href="{{URL::action('AsignacionesController@reporteAsignaciones')}}"><i class="fa fa-rotate-left"></i> Cancelar</a>
              <button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Guardar</button>
            </div>
          </div>
      </form>
    </div>
  </div>
</div>
@stop
