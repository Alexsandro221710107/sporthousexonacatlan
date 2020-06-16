@extends('site.machote')
@section('contenido')

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img bg-overlay" style="background-image: url(sitetemplate/img/bg-img/breadcumb-2.jpg);">
    <div class="bradcumbContent">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Servicios</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Servicios</li>
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

<div class="col-12 col-sm-6 col-lg-4">
    <div class="single-service-area mb-100">
        <div class="course-content d-flex align-items-center">
            <!-- Course Icon -->
            <div class="course-icon d-flex align-items-center justify-content-center">
                <img src="sitetemplate/img/core-img/pesa.png" alt="">
            </div>
            <h4>Gym</h4>
        </div>
        <div align="justify">
        <p>Contamos con un gran número de actividades colectivas con las que tonificaras tu cuerpo, mejoraras tu resistencia física y fortaleceras tu musculatura.</p>
        <br>
      </div>
    <a class="fitness-btn mr-3" data-toggle="modal" data-target="#modalForm" href=""><center>Información</center></a>
    <!-- Modal -->
    <div class="modal fade" id="modalForm" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">  <img src="sitetemplate/img/core-img/pesa.png" style="width:70px;height:70px;">  Gym</h5>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <p class="statusMsg"></p>
                    <form action="{{route('enviargym')}}" method="POST">
                      {{csrf_field()}}
                        <div class="form-group">
                            <label for="inputName">Nombre</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Escribe tu nombre" name="nombre"/>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Ingresa tu Email" name="email"/>
                        </div>
                        <div class="form-group">
                            <label for="inputMessage">En breve, te haremos llegar un correo con la cotización del Gym</label>
                        </div>
                    <button class="fitness-btn mr-3" type="submit" value="enviar">Solicitar Cotización</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  </form>
            </div>
        </div>
    </div>
    </div>
    </div>
</div>

<!-- Single Service Area -->
<div class="col-12 col-sm-6 col-lg-4">
    <div class="single-service-area mb-100">
        <div class="course-content d-flex align-items-center">
            <!-- Course Icon -->
            <div class="course-icon d-flex align-items-center justify-content-center">
                <img src="sitetemplate/img/core-img/box.png" alt="">
            </div>
            <h4>Box</h4>
        </div>
        <div align="justify">
        <p>Si lo tuyo es hacer ejercicio en grupo, las actividades dirigidas que te ofrecemos en Box son, sin duda, la mejor opción. Ya que todos los dias hay clases de iniciación</p>
        <br>
      </div>
        <a class="fitness-btn mr-3" data-toggle="modal" data-target="#modalFormb" href=""><center>Información</center></a>
        <!-- Modal -->
        <div class="modal fade" id="modalFormb" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">  <img src="sitetemplate/img/core-img/box.png" style="width:70px;height:70px;">  Box</h5>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <p class="statusMsg"></p>
                        <form action="{{route('enviarbox')}}" method="POST">
                          {{csrf_field()}}
                            <div class="form-group">
                                <label for="inputName">Nombre</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Escribe tu nombre" name="nombre"/>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" id="inputEmail" placeholder="Ingresa tu Email" name="email"/>
                            </div>
                            <div class="form-group">
                                <label for="inputMessage">En breve, te haremos llegar un correo con la cotización del Curso de Box</label>
                            </div>
                        <button class="fitness-btn mr-3" type="submit" value="enviar">Solicitar Cotización</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                      </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<!-- Single Service Area -->
<div class="col-12 col-sm-6 col-lg-4">
    <div class="single-service-area mb-100">
        <div class="course-content d-flex align-items-center">
            <!-- Course Icon -->
            <div class="course-icon d-flex align-items-center justify-content-center">
                <img src="sitetemplate/img/core-img/yoga.png" alt="">
            </div>
            <h4>Yoga</h4>
        </div>
        <div align="justify">
        <p>Adéntrate en el mundo del yoga y aprende a vivir con lo que realmente necesitas y a disfrutarlo ahora, a agradecer, a observarte, a amar de verdad, a eliminar y desapegarte de lo que no necesitas.</p>
        <br>
      </div>
        <a class="fitness-btn mr-3" data-toggle="modal" data-target="#modalFormy" href=""><center>Información</center></a>
        <!-- Modal -->
        <div class="modal fade" id="modalFormy" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">  <img src="sitetemplate/img/core-img/yoga.png" style="width:70px;height:70px;">  Yoga</h5>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <p class="statusMsg"></p>
                        <form action="{{route('enviaryoga')}}" method="POST">
                          {{csrf_field()}}
                            <div class="form-group">
                                <label for="inputName">Nombre</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Escribe tu nombre" name="nombre"/>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" id="inputEmail" placeholder="Ingresa tu Email" name="email"/>
                            </div>
                            <div class="form-group">
                                <label for="inputMessage">En breve, te haremos llegar un correo con la cotización del Curso de Yoga</label>
                            </div>
                        <button class="fitness-btn mr-3" type="submit" value="enviar">Solicitar Cotización</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                      </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<!-- Single Service Area -->
<div class="col-12 col-sm-6 col-lg-4">
    <div class="single-service-area mb-100">
        <div class="course-content d-flex align-items-center">
            <!-- Course Icon -->
            <div class="course-icon d-flex align-items-center justify-content-center">
                <img src="sitetemplate/img/core-img/Futbol.jpg" alt="">
            </div>
            <h4>Fútbol 6</h4>
        </div>
        <div align="justify">
        <p>La Red de Escuelas Diablos, del Club Deportivo Toluca FC, proporciona valores de convivencia fundamentales y que se pueden trasladar a todos los aspectos de la vida.</p>
        <br>
      </div>
      <a class="fitness-btn mr-3" data-toggle="modal" data-target="#modalFormf" href=""><center>Información</center></a>
      <!-- Modal -->
      <div class="modal fade" id="modalFormf" role="dialog">
          <div class="modal-dialog">
              <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">  <img src="sitetemplate/img/core-img/Futbol.jpg" style="width:70px;height:70px;">  Fútbol 6</h5>
                  </div>

                  <!-- Modal Body -->
                  <div class="modal-body">
                      <p class="statusMsg"></p>
                      <form action="{{route('enviarfutbol')}}" method="POST">
                        {{csrf_field()}}
                          <div class="form-group">
                              <label for="inputName">Nombre</label>
                              <input type="text" class="form-control" id="inputName" placeholder="Escribe tu nombre" name="nombre"/>
                          </div>
                          <div class="form-group">
                              <label for="inputEmail">Email</label>
                              <input type="email" class="form-control" id="inputEmail" placeholder="Ingresa tu Email" name="email"/>
                          </div>
                          <div class="form-group">
                              <label for="inputMessage">En breve, te haremos llegar un correo con la cotización de La Red de Escuela Diablos Toluca- Xonacatlán</label>
                          </div>
                      <button class="fitness-btn mr-3" type="submit" value="enviar">Solicitar Cotización</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </form>
              </div>
          </div>
      </div>
      </div>
    </div>
</div>

<!-- Single Service Area -->
<div class="col-12 col-sm-6 col-lg-4">
    <div class="single-service-area mb-100">
        <div class="course-content d-flex align-items-center">
            <!-- Course Icon -->
            <div class="course-icon d-flex align-items-center justify-content-center">
                <img src="sitetemplate/img/core-img/natacion.jpg" alt="">
            </div>
            <h4>Natación</h4>
        </div>
        <div align="justify">
        <p>Vive la práctica recreativa o deportiva del movimiento y desplazamiento sobre el agua en nuestra piscina, abierta de lunes a domingo, es de agua templada y en ella no utilizamos cloro.</p>
        <br>
      </div>
      <a class="fitness-btn mr-3" data-toggle="modal" data-target="#modalFormn" href=""><center>Información</center></a>
      <!-- Modal -->
      <div class="modal fade" id="modalFormn" role="dialog">
          <div class="modal-dialog">
              <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">      <img src="sitetemplate/img/core-img/natacion.jpg" style="width:70px;height:70px;">  Natación</h5>
                  </div>

                  <!-- Modal Body -->
                  <div class="modal-body">
                      <p class="statusMsg"></p>
                      <form action="{{route('enviarnatacion')}}" method="POST">
                        {{csrf_field()}}
                          <div class="form-group">
                              <label for="inputName">Nombre</label>
                              <input type="text" class="form-control" id="inputName" placeholder="Escribe tu nombre" name="nombre"/>
                          </div>
                          <div class="form-group">
                              <label for="inputEmail">Email</label>
                              <input type="email" class="form-control" id="inputEmail" placeholder="Ingresa tu Email" name="email"/>
                          </div>
                          <div class="form-group">
                              <label for="inputMessage">En breve, te haremos llegar un correo con la cotización del Curso de Natación</label>
                          </div>
                      <button class="fitness-btn mr-3" type="submit" value="enviar">Solicitar Cotización</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </form>
              </div>
          </div>
      </div>
      </div>
    </div>
</div>

<!-- Single Service Area -->
<div class="col-12 col-sm-6 col-lg-4">
    <div class="single-service-area mb-100">
        <div class="course-content d-flex align-items-center">
            <!-- Course Icon -->
            <div class="course-icon d-flex align-items-center justify-content-center">
                <img src="sitetemplate/img/core-img/taekwondo.jpg" alt="">
            </div>
            <h4>Taekwondo</h4>
        </div>
        <div align="justify">
        <p>Aprende la disciplina que muestra formas de realzar nuestro espíritu y nuestra  vida a través del entrenamiento de nuestro cuerpo y mente, con nuestros instuctores certificados.</p>
        <br>
      </div>
      <a class="fitness-btn mr-3" data-toggle="modal" data-target="#modalFormt" href=""><center>Información</center></a>
      <!-- Modal -->
      <div class="modal fade" id="modalFormt" role="dialog">
          <div class="modal-dialog">
              <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">      <img src="sitetemplate/img/core-img/taekwondo.jpg" style="width:70px;height:70px;">  Taekwondo</h5>
                  </div>

                  <!-- Modal Body -->
                  <div class="modal-body">
                      <p class="statusMsg"></p>
                      <form action="{{route('enviartaekwondo')}}" method="POST">
                        {{csrf_field()}}
                          <div class="form-group">
                              <label for="inputName">Nombre</label>
                              <input type="text" class="form-control" id="inputName" placeholder="Escribe tu nombre" name="nombre"/>
                          </div>
                          <div class="form-group">
                              <label for="inputEmail">Email</label>
                              <input type="email" class="form-control" id="inputEmail" placeholder="Ingresa tu Email" name="email"/>
                          </div>
                          <div class="form-group">
                              <label for="inputMessage">En breve, te haremos llegar un correo con la cotización del Curso de Taekwondo</label>
                          </div>
                      <button class="fitness-btn mr-3" type="submit" value="enviar">Solicitar Cotización</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </form>
              </div>
          </div>
      </div>
      </div>
    </div>
</div>

<div class="col-12 col-sm-6 col-lg-4">
    <div class="single-service-area mb-100">
        <div class="course-content d-flex align-items-center">
            <!-- Course Icon -->
            <div class="course-icon d-flex align-items-center justify-content-center">
                <img src="sitetemplate/img/core-img/basquetbol.jpg" alt="">
            </div>
            <h4>Basquetbol</h4>
        </div>
        <div align="justify">
        <p>Ven y unete a nuestro equipo de basquetbol, con entrenamientos diarios de mañana y tarde, en grupos reducidos, en los que se tiene en cuenta la edad y el nivel de los participantes.</p>
        <br>
      </div>
      <a class="fitness-btn mr-3" data-toggle="modal" data-target="#modalFormba" href=""><center>Información</center></a>
      <!-- Modal -->
      <div class="modal fade" id="modalFormba" role="dialog">
          <div class="modal-dialog">
              <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">      <img src="sitetemplate/img/core-img/basquetbol.jpg" style="width:70px;height:70px;">  Basquetbol</h5>
                  </div>

                  <!-- Modal Body -->
                  <div class="modal-body">
                      <p class="statusMsg"></p>
                      <form action="{{route('enviarbasquetbol')}}" method="POST">
                        {{csrf_field()}}
                          <div class="form-group">
                              <label for="inputName">Nombre</label>
                              <input type="text" class="form-control" id="inputName" placeholder="Escribe tu nombre" name="nombre"/>
                          </div>
                          <div class="form-group">
                              <label for="inputEmail">Email</label>
                              <input type="email" class="form-control" id="inputEmail" placeholder="Ingresa tu Email" name="email"/>
                          </div>
                          <div class="form-group">
                              <label for="inputMessage">En breve, te haremos llegar un correo con la cotización del Curso de Basquetbol</label>
                          </div>
                      <button class="fitness-btn mr-3" type="submit" value="enviar">Solicitar Cotización</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </form>
              </div>
          </div>
      </div>
      </div>
    </div>
</div>

<div class="col-12 col-sm-6 col-lg-4">
    <div class="single-service-area mb-100">
        <div class="course-content d-flex align-items-center">
            <!-- Course Icon -->
            <div class="course-icon d-flex align-items-center justify-content-center">
                <img src="sitetemplate/img/core-img/salon.jpg" alt="" style="width:900px;height:90px;">
            </div>
            <h4>Salón de Eventos</h4>
        </div>
        <div align="justify">
        <p>Nuestro salón es el lugar ideal para cualquier evento con espacio amplio y cómodo, además de un excelente mobiliario en donde podrá disfrutar rodeado de tus seres queridos.</p>
        <br>
      </div>
      <a class="fitness-btn mr-3" data-toggle="modal" data-target="#modalForms" href=""><center>Información</center></a>
      <!-- Modal -->
      <div class="modal fade" id="modalForms" role="dialog">
          <div class="modal-dialog">
              <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">      <img src="sitetemplate/img/core-img/salon.jpg" style="width:70px;height:70px;">  Salón de Eventos</h5>
                  </div>

                  <!-- Modal Body -->
                  <div class="modal-body">
                      <p class="statusMsg"></p>
                      <form action="{{route('enviarsalon')}}" method="POST">
                        {{csrf_field()}}
                          <div class="form-group">
                              <label for="inputName">Nombre</label>
                              <input type="text" class="form-control" id="inputName" placeholder="Escribe tu nombre" name="nombre"/>
                          </div>
                          <div class="form-group">
                              <label for="inputEmail">Email</label>
                              <input type="email" class="form-control" id="inputEmail" placeholder="Ingresa tu Email" name="email"/>
                          </div>
                          <div class="form-group">
                              <label for="inputMessage">En breve, te haremos llegar un correo con la cotización de Nuestro Salón de Eventos</label>
                          </div>
                      <button class="fitness-btn mr-3" type="submit" value="enviar">Solicitar Cotización</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </form>
              </div>
          </div>
      </div>
      </div>
    </div>
</div>

<div class="col-12 col-sm-6 col-lg-4">
    <div class="single-service-area mb-100">
        <div class="course-content d-flex align-items-center">
            <!-- Course Icon -->
            <div class="course-icon d-flex align-items-center justify-content-center">
                <img src="sitetemplate/img/core-img/ballet.jpg" alt="">
            </div>
            <h4>Ballet</h4>
        </div>
        <div align="justify">
        <p>Aprende a tener el dominio completo de tu cuerpo en cada uno de los movimientos y de la concentracion que se necesita para la ejecución de los pasos.</p>
        <br>
      </div>
      <a class="fitness-btn mr-3" data-toggle="modal" data-target="#modalFormbal" href=""><center>Información</center></a>
      <!-- Modal -->
      <div class="modal fade" id="modalFormbal" role="dialog">
          <div class="modal-dialog">
              <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">          <img src="sitetemplate/img/core-img/ballet.jpg" style="width:70px;height:70px;">  Ballet</h5>
                  </div>

                  <!-- Modal Body -->
                  <div class="modal-body">
                      <p class="statusMsg"></p>
                      <form action="{{route('enviarballet')}}" method="POST">
                        {{csrf_field()}}
                          <div class="form-group">
                              <label for="inputName">Nombre</label>
                              <input type="text" class="form-control" id="inputName" placeholder="Escribe tu nombre" name="nombre"/>
                          </div>
                          <div class="form-group">
                              <label for="inputEmail">Email</label>
                              <input type="email" class="form-control" id="inputEmail" placeholder="Ingresa tu Email" name="email"/>
                          </div>
                          <div class="form-group">
                              <label for="inputMessage">En breve, te haremos llegar un correo con la cotización del Curso de Ballet</label>
                          </div>
                      <button class="fitness-btn mr-3" type="submit" value="enviar">Solicitar Cotización</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </form>
              </div>
          </div>
      </div>
      </div>
    </div>
</div>

</div>
</div>
</div>
<!-- ##### Service Area End ##### -->

@stop
