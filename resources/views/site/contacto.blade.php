@extends('site.machote')
@section('contenido')

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img bg-overlay" style="background-image: url(sitetemplate/img/bg-img/breadcumb-2.jpg);">
    <div class="bradcumbContent">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Contacto</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contacto</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->
<!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-title">
                        <h3>Contactanos</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="contact-content">
                        <!-- Contact Form Area -->
                        <div class="contact-form-area">
                            <form action="{{route('contacto')}}" method="POST">
                              {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Completo">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email"placeholder="Dirección de correo electronico">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Asunto">
                                </div>
                                <div class="form-group">
                                    <textarea  class="form-control" id="mensaje" name="mensaje" cols="30" rows="10" placeholder="Mensaje"></textarea>
                                </div>
                                <button class="btn fitness-btn btn-2 mt-30" type="submit">Contactanos</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->
<!-- ##### Google Maps ##### -->
<div class="col-md-9 map-area">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d940.7990847815668!2d-99.53309751028522!3d19.403920974408567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d20b5a89d3d0c9%3A0x8272ed6a34c6ec05!2sSPORT%20HOUSE!5e0!3m2!1ses-419!2smx!4v1569952622699!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

    <div class="fitness-contact-info">
        <a href="index.html" class="contact-logo d-block mb-30"><img src="img/core-img/logo2.png" alt=""></a>
        <h6> Niños Heroes 46, Xonacatlan de Vicencio, 52060 Xonacatlán, Méx.</h6>
        <h6>01(719)1052399</h6>
        <h6>sporthousexonacatlan@gmail.com</h6>
    </div>
</div>

@stop
