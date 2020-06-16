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
            <th>No. Aviso</th>
            <th>Aviso</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($avisos as $aviso)
          <tr>
            <td>{{$aviso->ida}}</td>
            <td><center><img src= "{{asset('Storage/app/public/'.$aviso->aviso)}}" height=80 width=80></center></td>
            <td>{{$aviso->nombre}}</td>
            <td>{{$aviso->descripcion}}</td>
            <td><center><a class="btn btn-success" href="{{URL::action('AvisosController@editarAviso',['ida'=>$aviso->ida])}}"><i class="fa fa-edit"></i> Editar</a></center></td>
            <td><center><a class="btn btn-danger" onclick="return Confirm()" href="{{URL::action('AvisosController@eliminarAviso',['ida'=>$aviso->ida])}}"><i class="fa fa-trash"></i> Eliminar</a></center></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@stop
