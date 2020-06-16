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
      <h2>Eventos</h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>No Evento</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Evento</th>
            <th>Fecha</th>
            <th></th>
            <th></th>

          </tr>
        </thead>
        <tbody>
          @foreach($eventos as $ev)
          <tr>
            <td>{{$ev->idev}}</td>
            <td>{{$ev->nombreev}}</td>
            <td>{{$ev->descripcionev}}</td>
            <td><center><img src = "{{asset('Storage/app/public/'.$ev->evento)}}" height=50 width=50></center></td>
            <td>{{$ev->fechaev}}</td>
			<td><center><a class="btn btn-success" href="{{URL::action('EventosController@editaEvento',['idev'=>$ev->idev])}}"><i class="fa fa-edit"></i> Editar</a></center></td>
			<td><center><a class="btn btn-danger" onclick="return Confirm()" href="{{URL::action('EventosController@eliminaEvento',['idev'=>$ev->idev])}}"><i class="fa fa-trash"></i> Eliminar</a></center></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@stop
