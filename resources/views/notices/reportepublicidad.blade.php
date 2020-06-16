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
      <h2>Publicidad</h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>No. Publicidad</th>
            <th>Nombre</th>
            <th>Archivo</th>
            <th>Descripcion</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($publicidad as $pub)
          <tr>
            <td>{{$pub->idbanner}}</td>
            <td>{{$pub->nombre}}</td>
            <td><center><img src = "{{asset('Storage/app/public/'.$pub->banner)}}" height=90 width=120></center></td>
            <td>{{$pub->descripcion}}</td>
            <td><center><a class="btn btn-success" href="{{URL::action('BannerController@editarpublicidad',['idbanner'=>$pub->idbanner])}}"><i class="fa fa-edit"></i> Editar</a></center></td>
            <td><center><a class="btn btn-danger" onclick="return Confirm()" href="{{URL::action('BannerController@eliminarpublicidad',['idbanner'=>$pub->idbanner])}}"><i class="fa fa-trash"></i> Eliminar</a></center></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@stop
