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
      <h2>Archivos</h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>No. Archivo</th>
            <th>Nombre</th>
            <th>Archivo</th>
            <th>Descripcion</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($archivos as $archivo)
          <tr>
            <td>{{$archivo->idfile}}</td>
            <td>{{$archivo->nombre}}</td>
            <td><a href = "{{asset('Storage/app/public/'.$archivo->archivo)}}"><i class="fa fa-file-text-o"></i> {{$archivo->archivo}}</a></td>
            <td>{{$archivo->descripcion}}</td>
            <td><center><a class="btn btn-success" href="{{URL::action('ArchivosController@editarArchivo',['idfile'=>$archivo->idfile])}}"><i class="fa fa-edit"></i> Editar</a></center></td>
            <td><center><a class="btn btn-danger" onclick="return Confirm()" href="{{URL::action('ArchivosController@eliminarArchivo',['idfile'=>$archivo->idfile])}}"><i class="fa fa-trash"></i> Eliminar</a></center></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@stop
