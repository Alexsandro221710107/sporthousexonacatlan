@extends('admintemplate.main')

@section('contenido')
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Pagos Realizados</h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>Id Pago</th>
            <th>Socio</th>
            <th>Tipo de Membresia / Costo</th>
            <th>Importe</th>
          </tr>
        </thead>
        <tbody>
          @foreach($pagos as $p)
          <tr>
            <td>{{$p->idpago}}</td>
            <td>{{$p->nombresoc}} {{$p->apellidopsoc}} {{$p->apellidomsoc}}</td>
            <td>{{$p->tipomembresia}} / ${{$p->costo}}</td>
            <td>{{$p->importe}}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@stop
