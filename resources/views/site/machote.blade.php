<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>SportHouse Xonacatlan</title>

    <!-- Favicon -->
    <link rel="icon" href="admintemplate/sport-house.png" type="image/ico" />

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('sitetemplate/style.css')}}">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="fitness-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="fitnessNav">

                        <!-- Nav brand -->

                        <a href="http://localhost/sporthouse-local/" class="fitness-btn menu-btn ml-20">SportHouse Xonacatlán</a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="http://localhost/sporthouse/">Inicio</a></li>
                                    <li><a>Ver Más </a>
                                       <ul class="dropdown">
                                            <li><a href="servicios">Servicios</a></li>
                                            <li><a href="sitePromociones">Promociones</a></li>
                                            <li><a href="siteEventos">Eventos</a></li>
                                            <li><a href="siteAvisos">Avisos</a></li>
                                            <li><a href="siteArchivos">Archivos</a></li>
                                            <li><a href="productos">Productos</a></li>
                                            <li><a href="publicidad">Publicidad</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="sobrenosotros">Sobre Nosotros</a></li>
                                    <li>
                                      <li><a>Contactános </a>
                                       <ul class="dropdown">
                                            <li><a href="contacto">Contacto</a></li>
                                            <li><a href="agendarcita">Agendar Cita</a></li>
                                        </ul>
                                      </li>
                                    </li>
                                    <li><a href="galeria">Galeria</a></li>
                                    <li><a href="iniciarsesion" class="btn fitness-btn btn-2">Iniciar Sesión</a></li>
                                </ul>

                                <!-- Call Button -->


                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!--main content start-->
      <div class="contenido">
      @yield('contenido')
      </div>
     <!-- container section start -->


    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0 bg-img bg-overlay" style="background-image: url(sitetemplate/img/bg-img/bg-11.jpg);">

        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget-area mb-50">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <a><img src="{{ asset('sitetemplate/img/core-img/logo.jpg')}}" alt=""></a>
                            </div>
                            <p class="mb-30">Más que un gimnasio, somos un club deportivo, ven aprende y diviertete !!!. El mejor ambiente, el mejor lugar , comodo y seguro  ven y vive la experiencia.</p>
                            <!-- Social Info -->
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget-area mb-50">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Lema</h6>
                            </div>

                            <!-- Testimonials Slides -->
                            <div class="testimonials-slides owl-carousel">

                                <div class="single-slide">
                                    <!-- Single Testimonial -->
                                    <div class="single-testimonial">
                                        <p>Todo lo puedo en cristo que me fortalece</p>
                                        <span>(Fllipenses 4:13)</span>
                                    </div>
                                    <!-- Single Testimonial -->
                                </div>

                                <div class="single-slide">
                                    <!-- Single Testimonial -->
                                    <div class="single-testimonial">
                                        <p>Todo lo puedo en cristo que me fortalece</p>
                                        <span>(Fllipenses 4:13)</span>
                                    </div>
                                    <!-- Single Testimonial -->
                                </div>

                                <div class="single-slide">
                                    <!-- Single Testimonial -->
                                    <div class="single-testimonial">
                                        <p>Todo lo puedo en cristo que me fortalece</p>
                                        <span>(Fllipenses 4:13)</span>
                                    </div>
                                    <!-- Single Testimonial -->
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget-area mb-50">
                            <div class="widget-title">
                                <h6>Clases</h6>
                            </div>

                            <nav>
                                <ul class="fitness-classes">
                                    <li><a href="#">Clases de Gym</a></li>
                                    <li><a href="#">Clases de Box</a></li>
                                    <li><a href="#">Clases de Yoga</a></li>
                                    <li><a href="#">Equipo de futbol 6</a></li>
                                    <li><a href="#">Escuela de Natacion</a></li>
                                    <li><a href="#">Equipo de Basquetbol</a></li>
                                    <li><a href="#">Clases de Taekwondo</a></li>
                                    <li><a href="#">Clases de Ballet</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget-area mb-50">
                            <div class="widget-title">
                                <h6>Contacto</h6>
                            </div>

                            <!-- Single Contact -->
                            <div class="single-contact mb-30">
                                <span>Dirección:</span>
                                <p>Niños Heroes 46 <br>Xonacatlan de Vicencio, 52060 Xonacatlán, Méx.</p>
                            </div>

                            <!-- Single Contact -->
                            <div class="single-contact mb-30">
                                <span>Telefonos:</span>
                                <p>01(719)1052399</p>
                                <br>
                                <p>7221485404 ó 7225560930</p>
                            </div>

                            <!-- Single Contact -->
                            <div class="single-contact mb-30">
                                <span>Email:</span>
                                <p>sporthousexonacatlan@hotmail.com</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="bottom-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p><a href="https://www.facebook.com/sporthouse.mx/"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                          SportHouse Xonacatlán
                          <a href="https://www.facebook.com/sporthouse.mx/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{ asset('sitetemplate/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{ asset('sitetemplate/js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('sitetemplate/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('sitetemplate/js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{ asset('sitetemplate/js/active.js')}}"></script>
    <!-- Live Chat Code :: Start of Tawk.to Script -->

    <!-- End of Tawk.to Script -->
</body>

</html>
