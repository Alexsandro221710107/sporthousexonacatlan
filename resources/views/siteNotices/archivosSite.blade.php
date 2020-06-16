@extends('site.machote')
@section('contenido')

<div class="breadcumb-area bg-img bg-overlay" style="background-image: url(sitetemplate/img/bg-img/breadcumb-2.jpg);">
    <div class="bradcumbContent">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Documentos</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index">Inicio</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Documentos</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<div class="fitness-services-area section-padding-100-0">
    <div class="container">
        <div class="row">
          @foreach($archivos as $archivo)
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-service-area mb-100">
              <div class="course-content d-flex align-items-center">
                <a href = "{{asset('Storage/app/public/'.$archivo->archivo)}}">
                  <img src="{{asset('Storage/app/public/archivos.png')}}" width="100" height="100">
                </a>
                <center>
                <h4>{{$archivo->nombre}}</h4>
                <p>{{$archivo->descripcion}}</p>
                <h5><a href = "{{asset('Storage/app/public/'.$archivo->archivo)}}"><i class="fa fa-file-text-o"></i> {{$archivo->archivo}}</a></h5>
              </center>
              </div>
            </div>
          </div>
          @endforeach
        </div>
    </div>
</div>

@stop
