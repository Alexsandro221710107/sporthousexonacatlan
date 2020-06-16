@extends('site.machote')
@section('contenido')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small></small>';
			}
		}
	});
});
</script>
<div class="breadcumb-area bg-img bg-overlay" style="background-image: url(sitetemplate/img/bg-img/breadcumb-2.jpg);">
    <div class="bradcumbContent">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>
</div>

<div class="fitness-services-area section-padding-100-0">
		<div class="container">
				<div class="row">
					@foreach($eventos as $ev)
						<div class="col-12 col-sm-6 col-lg-6">
								<div class="single-service-area mb-100">
										<div class="course-content d-flex align-items-center">
											<div class="popup-gallery">
												<center>
											      <a href="{{asset('storage/app/public/'.$ev->evento)}}" title="{{$ev->nombreev}}" style=""><img src= "{{asset('storage/app/public/'.$ev->evento)}}" style="width:450px; height:300px;"></a>
											  </center>
											</div>
										</div>
										<center><h5>{{$ev->nombreev}} - {{$ev->fechaev}}</h5>
										<p>{{$ev->descripcionev}}</p></center>
								</div>
						</div>
					@endforeach
				</div>
		</div>
</div>
@stop
