@extends('admintemplate.main')

@section('contenido')
<script language="JavaScript">
function Confirm() {
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
      <h2>Empleados</h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>No. Empleado</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Fecha de Nacimiento</th>
            <th>Dirección</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Tipo de Empleado</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($empleados as $empleado)
          <tr>
            <td>{{$empleado->idempleado}}</td>
            <td><center><img src = "{{asset('storage/app/public/'.$empleado->fotoemp)}}" height=50 width=50></center></td>
            <td>{{$empleado->nombreemp}} {{$empleado->apellidope}} {{$empleado->apellidome}}</td>
            <td>{{$empleado->fechanac}}</td>
            <td>{{$empleado->calle}},No {{$empleado->num}},{{$empleado->nombreestado}},{{$empleado->nombremunicipio}}</td>
            <td>{{$empleado->telefono}}</td>
            <td>{{$empleado->correoemp}}</td>
            <td>{{$empleado->tipoempleado}}</td>
            <td><center><a class="btn btn-success" href="{{URL::action('EmpleadosController@editaEmpleado',['idempleado'=>$empleado->idempleado])}}"><i class="fa fa-edit"></i> Editar</a></center></td>
            <td><center><a class="btn btn-danger" onclick="return Confirm()" href="{{URL::action('EmpleadosController@eliminaEmpleado',['idempleado'=>$empleado->idempleado])}}"><i class="fa fa-trash"></i> Eliminar</a></center></td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@stop
