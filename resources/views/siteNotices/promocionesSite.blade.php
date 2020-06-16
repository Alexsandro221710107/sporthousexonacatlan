@extends('site.machote')
@section('contenido')

<div class="breadcumb-area bg-img bg-overlay" style="background-image: url(sitetemplate/img/bg-img/breadcumb-2.jpg);">
    <div class="bradcumbContent">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>
  </div>
<style>

.div-imagen {
  display:inline-block;
  position:relative;
}

.div-imagen > div {
  position:absolute;
  top:0;
  left:0;
  z-index:-1;
  padding:10px;
  margin:0;
}

.desvanecer:hover {
  opacity: 0.07;
  -webkit-transition: opacity 500ms;
  -moz-transition: opacity 500ms;
  -o-transition: opacity 500ms;
  -ms-transition: opacity 500ms;
  transition: opacity 500ms;
}

</style>
<div class="fitness-services-area section-padding-100-0">
		<div class="container">
				<div class="row">
					@foreach($promociones as $prom)
						<div class="col-12 col-sm-6 col-lg-6">
								<div class="single-service-area mb-100">
										<div class="course-content d-flex align-items-center">
                      <div class="div-imagen">
                        <div>
                            <a href="{{asset('storage/app/public/'.$prom->promocion)}}" title="" ><center><b>{{$prom->descripcionprom}}</b></center></a>
                        </div>
                            <img class="desvanecer" src= "{{asset('storage/app/public/'.$prom->promocion)}}" style="width:450px; height:300px;"></a>
                      </div>
										</div>
								</div>
						</div>
					@endforeach
				</div>
		</div>
</div>
@stop
