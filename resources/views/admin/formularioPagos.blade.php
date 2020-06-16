@extends('admintemplate.main')

@section('contenido')
<script language="JavaScript">
function pregunta() {
if(confirm('¿Estas seguro de la información registrada?')){
  return true;
}
else{
  return false;
}
}
</script>
<div class="col-md-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Realizar Pago</h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
    <br />
      <form class="form-horizontal form-label-left input_mask" action = "{{route('guardaPago')}}" method="POST" enctype='multipart/form-data'>
        {{csrf_field()}}
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Id Pago: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='idpago' name='idpago' value="{{$idpagos}}" readonly>
              <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo de Membresia/Costo: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <select id='idtipomembresia' name='idtipomembresia' class="form-control" required>
                @foreach($tipomembresia as $t)
                  <option value = '{{$t->idtipomembresia}}'>{{$t->tipomembresia}} - ${{$t->costo}}</option>
                @endforeach
              </select>
              <span class="fa fa-building form-control-feedback right" aria-hidden="true"></span>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Socio: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <select id='idsocio' name='idsocio' class="form-control" required>
                @foreach($socios as $s)
                  <option value = '{{$s->idsocio}}'>{{$s->nombresoc}} {{$s->apellidopsoc}} {{$s->apellidomsoc}}</option>
                @endforeach
              </select>
              <span class="fa fa-users form-control-feedback right" aria-hidden="true"></span>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Importe: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='importe' name='importe' value="{{old('importe')}}" placeholder="Escriba el Importe">
              <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
              @if($errors->first('importe'))<b>{{ $errors->first('importe')}}@endif</b>
            </div>
        </div>
        <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
              <a type="button" class="btn btn-warning" href="{{URL::action('AdminController@inicio')}}"><i class="fa fa-rotate-left"></i> Cancelar</a>
              <button type="submit" class="btn btn-primary" onclick="return pregunta()"><span class="fa fa-save"></span> Guardar</button>
            </div>
          </div>
      </form>
    </div>
  </div>
</div>
@stop
