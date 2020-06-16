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
      <h2>Casilleros Asignados</h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>No. Casillero</th>
            <th>Nombre Socio</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($casilleros as $casillero)
          <tr>
            <td>{{$casillero->idcasillero}}</td>
            <td>{{$casillero->nombresoc}} {{$casillero->apellidopsoc}} {{$casillero->apellidomsoc}}</td>
            <td><center><a class="btn btn-danger" onclick="return pregunta()" href="{{URL::action('CasillerosController@eliminaCasillero',['idcasillero'=>$casillero->idcasillero])}}"><i class="fa fa-trash"></i> Eliminar</a></center></td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@stop
