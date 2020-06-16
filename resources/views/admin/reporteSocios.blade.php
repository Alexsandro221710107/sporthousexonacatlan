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
      <h2>Socios</h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>No. Socio</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Fecha de Nacimiento</th>
            <th>Dirección</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Tipo de Membresia</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($socios as $soc)
          <tr>
            <td>{{$soc->idsocio}}</td>
            <td><center><img src = "{{asset('storage/app/public/'.$soc->fotosoc)}}" height=50 width=50></center></td>
            <td>{{$soc->nombresoc}} {{$soc->apellidopsoc}} {{$soc->apellidomsoc}}</td>
            <td>{{$soc->fechanacsoc}}</td>
            <td>{{$soc->callesoc}},No {{$soc->numsoc}},{{$soc->nombreestado}},{{$soc->nombremunicipio}}</td>
            <td>{{$soc->telefonosoc}}</td>
            <td>{{$soc->correosoc}}</td>
            <td>{{$soc->tipomembresia}}</td>
            <td><center><a class="btn btn-success" href="{{URL::action('SociosController@editaSocio',['idsocio'=>$soc->idsocio])}}"><i class="fa fa-edit"></i> Editar</a></center></td>
            <td><center><a class="btn btn-danger" onclick="return Confirm()" href="{{URL::action('SociosController@eliminaSocio',['idsocio'=>$soc->idsocio])}}"><i class="fa fa-trash"></i> Eliminar</a></center></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@stop
