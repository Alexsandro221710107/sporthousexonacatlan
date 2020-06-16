@extends('site.machote')
@section('contenido')

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img bg-overlay" style="background-image: url(sitetemplate/img/sporthouse/DSC_0165.jpg);">
    <div class="bradcumbContent">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Galeria</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index">Inicio</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Galeria</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### About Us Area Start ##### -->
<div class="about-us-area section-padding-100-0">
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="section-heading">
              <h1>SportHouse Xonacatlán</h1>
                <section id="galeria">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" width="480" height="640" src="{{asset('sitetemplate/img/sporthouse/DSC_0157.jpg')}}" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" width="480" height="640" src="{{asset('sitetemplate/img/sporthouse/DSC_0159.jpg')}}" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" width="480" height="640" src="{{asset('sitetemplate/img/sporthouse/DSC_0160.jpg')}}" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" width="480" height="640" src="{{asset('sitetemplate/img/sporthouse/DSC_0162.jpg')}}" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" width="480" height="640" src="{{asset('sitetemplate/img/sporthouse/DSC_0165.jpg')}}" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" width="480" height="640" src="{{asset('sitetemplate/img/sporthouse/DSC_0166.jpg')}}" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" width="480" height="640" src="{{asset('sitetemplate/img/sporthouse/DSC_0167.jpg')}}" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" width="480" height="640" src="{{asset('sitetemplate/img/sporthouse/DSC_0168.jpg')}}" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" width="480" height="640" src="{{asset('sitetemplate/img/sporthouse/DSC_0169.jpg')}}" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" width="480" height="640" src="{{asset('sitetemplate/img/sporthouse/DSC_0170.jpg')}}" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" width="480" height="640" src="{{asset('sitetemplate/img/sporthouse/DSC_0172.jpg')}}" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" width="480" height="640" src="{{asset('sitetemplate/img/sporthouse/DSC_0175.jpg')}}" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="row">
                <!-- About Text -->
                <div class="col-12 col-lg-6">
                </div>
                <!-- About Button Group -->
                <div class="col-12">
                    <div class="about-btn-group mt-50">
                        <a href="#" class="btn fitness-btn mr-3">Obten tu membresia</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
@stop
