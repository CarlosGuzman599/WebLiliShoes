<!DOCTYPE html>
<html lang="en">

    <?php include_once 'includes/templates/head.php' ?>

  <body>

        <?php include_once 'includes/templates/barra.php' ?>

        <!-- Add Your HTML here -->

        <main class="principal">

            <P class="text-center fm-pacifico color-secondary display-4 pt-4">bienvenidos a</P>
            <h1 class="text-center fm-raleway display-4">Contacto</h1>
            
            <div class="container">

                <div class="row">

                    <div class="col-md-8">

                        <div class="formulario-contacto">

                            <div class="well well-sm">
                                <form class="form-horizontal" method="post">
                                    <fieldset>
                
                                        <div class="form-group">
                                            <label for="fname" class="text-center fm-pacifico l-formulario">Nombre:</label>
                                            <div class="col-md-12">
                                                <input id="fname" name="name" type="text" placeholder="Nombre" class="form-control fm-raleway">
                                            </div>
                                        </div>
                
                                        <div class="form-group">
                                            <label for="email" class="text-center fm-pacifico l-formulario">Correo Electronico:</label>
                                            <div class="col-md-12">
                                                <input id="email" name="email" type="text" placeholder="Correo Electronico" class="form-control fm-raleway">
                                            </div>
                                        </div>
                
                                        <div class="form-group">
                                            <label for="phone" class="text-center fm-pacifico l-formulario">Telefono Celular:</label>
                                            <div class="col-md-12">
                                                <input id="phone" name="phone" type="text" placeholder="Telefono Celular" class="form-control fm-raleway">
                                            </div>
                                        </div>
                
                                        <div class="form-group">
                                            <label for="message" class="text-center fm-pacifico l-formulario">Mensaje:</label>
                                            <div class="col-md-12">
                                                <textarea class="form-control fm-raleway" id="message" name="message" placeholder="Hola, ¿en que podesmos ayudarte?" rows="7"></textarea>
                                            </div>
                                        </div>
                
                                        <div class="form-group">
                                            <div class="col-md-12 text-center">
                                                <button type="submit" class="btn btn-personal btn-lg">Enviar</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>

                        </div><!--  <div class="fomulario"> -->

                    </div><!-- <div class="col-md-8"> -->

                    <div class="col-md-4">
                        <div class="aside-formulario">

                            <p class="fm-raleway mt-md-4 text-justify">Contacto via redes sociales y WhastApp, te esperamos para resolver cualquier duda, mantenerte al tanto de nuestras promociones y nuevas existencias.</p>

                            <nav class="sociales text-center text-lg-center">
                                <ul>
                                    <li class="rotar-incremento"><a href="https://www.facebook.com/LiliGuzmanE/" target="_blank"><span class="sr-only">Facebook</span></a></li>
                                    <li class="rotar-incremento"><a href="https://www.instagram.com" target="_blank"><span class="sr-only">Instagram</span></a></li>
                                    <li class="rotar-incremento"><a href="https://wa.me/523411273602" target="_blank"><span class="sr-only">WhatsApp</span></a></li>
                    
                                </ul>
                            </nav>

                            <div class="col-12 p-5 d-md-block d-sm-none"><!-- carousel Contacto -->

                                <div id="slider" class="carousel slide" data-ride="carousel" data-interval="2000">
                      
                                  <div class="carousel-inner">
                      
                                    <div class="carousel-item active">
                                      <img src="img/gallery/galery_1.jpg" alt="" class="img-fluid d-block rounded">
                                      <div class="carousel-caption d-none d-md-block">
                                      </div>
                                    </div>
                      
                                    <div class="carousel-item">
                                      <img src="img/gallery/galery_2.jpg" alt="" class="img-fluid d-block rounded">
                                      <div class="carousel-caption d-none d-md-block">
                                      </div>
                                    </div>
                      
                                    <div class="carousel-item">
                                      <img src="img/gallery/galery_3.jpg" alt="" class="img-fluid d-block rounded">
                                      <div class="carousel-caption d-none d-md-block">
                                      </div>
                                    </div>
                      
                                  </div><!-- <div class="carousel-inner"> -->
                      
                      
                                </div><!-- <div id="slider" class="carousel slide" data-ride="carousel"> -->

                            </div><!-- <div class="col-12"> carosusel contacto -->

                        </div><!-- fin aside-fomulario -->
                    </div><!-- fin col-md-8 -->

                </div><!-- row -->

            </div><!-- container -->

        </main>

        <!-- End Add Your HTML here -->

        <?php include_once 'includes/templates/footer.php' ?>
        <?php include_once 'includes/templates/scripts.php' ?>

  </body>
</html>