@extends('admintemplate.main')

@section('contenido')
<script language="JavaScript">
function pregunta() {
if(confirm('¿Estas seguro de eliminar este registro?')){
  return true;
}
else{
  return false;
}
}
</script>
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Empleados Asignados</h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>No. Asignación</th>
            <th>Empleado</th>
            <th>Área Asignada</th>
            <th>Fecha de Asignación</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($asignaciones as $asignacion)
          <tr>
            <td>{{$asignacion->idasignacion}}</td>
            <td>{{$asignacion->nombreemp}} {{$asignacion->apellidope}} {{$asignacion->apellidome}}</td>
            <td>{{$asignacion->nombrearea}}</td>
            <td>{{$asignacion->fecha}}</td>
            <td><center><a class="btn btn-success" href="{{URL::action('AsignacionesController@editaAsignacion',['idasignacion'=>$asignacion->idasignacion])}}"><i class="fa fa-edit"></i> Editar</a></center></td>
            <td><center><a class="btn btn-danger" onclick="return pregunta()" href="{{URL::action('AsignacionesController@eliminaAsignacion',['idasignacion'=>$asignacion->idasignacion])}}"><i class="fa fa-trash"></i> Eliminar</a></center></td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@stop
