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
      <h2>Promociones</h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>Id  Promocion</th>
            <th>Promocion</th>
            <th>descripcion</th>
            <th></th>
            <th></th>

          </tr>
        </thead>
        <tbody>
          @foreach($promociones as $prom)
          <tr>
            <td>{{$prom->idprom}}</td>
            <td><center><img src = "{{asset('Storage/app/public/'.$prom->promocion)}}" height=50 width=50></center></td>
            <td>{{$prom->descripcionprom}}</td>
            <td><center><a class="btn btn-success" href="{{URL::action('PromocionesController@editaPromocion',['idprom'=>$prom->idprom])}}"><i class="fa fa-edit"></i> Editar</a></center></td>
            <td><center><a class="btn btn-danger" onclick="return Confirm()" href="{{URL::action('PromocionesController@eliminaPromocion',['idprom'=>$prom->idprom])}}"><i class="fa fa-trash"></i> Eliminar</a></center></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@stop
