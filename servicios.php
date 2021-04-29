<!DOCTYPE html>
<html lang="en">
    
    <?php include_once 'includes/templates/head.php'?>

    <body>

        <?php include_once 'includes/templates/barra.php'?>

        <!-- Add Your HTML here -->

        <main class="container">
            <P class="text-center fm-pacifico color-secondary display-4 pt-4">conoce nuestros</P>
            <h1 class="text-center fm-raleway display-4">servicios</h1>

            <div class="row">

                <div class="col-md-8 my-5">
                    
                    <div id="servicios" class="collapse-servicios shadow">
    
                        <div class="card">
        
                            <div class="card-header" id="servicio1">
                            <h2 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion1" aria-expanded="true" aria-controls="descripcion1">
                                <span class="text-uppercase">Ropa y zapotos por catalog</span>
                                </button>
                            </h2><!-- <h2 class="mb-0"> -->
                            </div><!-- card-header  id="servicio1" -->
                            
                            <div id="descripcion1" class="collapse show" aria-labelledby="servicio1" data-parent="#servicios">
                            <div class="card-body justify-content-center text-center">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui ab accusamus nisi ex saepe adipisci vel assumenda dolor! Unde expedita quis quaerat, cum laboriosam laborum dolor adipisci exercitationem odit! Totam.</p>
                                <a href="#" class="btn btn-outline-personal">Ver más</a>
                            </div>
                            </div><!-- <div id="descripcion1" class="colapse show"> -->
        
                        </div><!-- Class card -->
        
                        <div class="card">
        
                            <div class="card-header" id="servicio2">
                            <h2 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion2" aria-expanded="false" aria-controls="descripcion2">
                                <span class="text-uppercase">Afiliate como socio</span>
                                </button>
                            </h2><!-- <h2 class="mb-0"> -->
                            </div><!-- card-header  id="servicio1" -->
                            
                            <div id="descripcion2" class="collapse" aria-labelledby="servicio2" data-parent="#servicios">
                            <div class="card-body justify-content-center text-center">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui ab accusamus nisi ex saepe adipisci vel assumenda dolor! Unde expedita quis quaerat, cum laboriosam laborum dolor adipisci exercitationem odit! Totam.</p>
                                <a href="#" class="btn btn-outline-personal">Ver más</a>
                            </div>
                            </div><!-- <div id="descripcion1" class="colapse show"> -->
        
                        </div><!-- Class card -->
        
                        <div class="card">
        
                            <div class="card-header" id="servicio3">
                            <h2 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion3" aria-expanded="false" aria-controls="descripcion3">
                                <span class="text-uppercase">Venta de catalogos de temporada</span>
                                </button>
                            </h2><!-- <h2 class="mb-0"> -->
                            </div><!-- card-header  id="servicio1" -->
                            
                            <div id="descripcion3" class="collapse" aria-labelledby="servicio3" data-parent="#servicios">
                            <div class="card-body justify-content-center text-center">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui ab accusamus nisi ex saepe adipisci vel assumenda dolor! Unde expedita quis quaerat, cum laboriosam laborum dolor adipisci exercitationem odit! Totam.</p>
                                <a href="#" class="btn btn-outline-personal">Ver más</a>
                            </div>
                            </div><!-- <div id="descripcion1" class="colapse show"> -->
        
                        </div><!-- Class card -->
        
                    </div><!-- <div id="servicios"> -->
                    
                </div> <!-- col-8 -->

                <div class=" my-5 col-md-4 aside-servicios rounded">
                    <img src="img/logo_letras.png" class="img-fluid my-2" alt="">
                    <p class="text-justify">Me pongo a tus ordenes como distribuidora de las mejores marcas en ropa y calzado por catalogo. Castalia, Lis, Rab, Price Shoes, Terra, Cklass, Impuls. El mejor servicio al mejor precio, ya no tienes que salir de tu casa para realizar tus pedidos, con entrega a domicilio, mejora tus ingresos y se tu propio jefe.</p>
                </div>


                <div class="parte-inferior">

                    <div class="col-md-6 float-left my-3">
                        <p class="fm-raleway text-center">Contacto via redes sociales, WhastApp y via sitio web, te esperamos para sesolver cualquier duda, mantenerte al tanto de nustras promociones y nueva mercancia.</p>
                        <a href="contacto.php" class="btn btn-outline-personal mx-auto d-block">Contacto</a>
                    </div>

                    <div class="col-md-6 float-right my-3">
                        <h3 class="text-center">redes Sociales</h3>
                        <nav class="sociales text-center text-lg-center">
                            <ul>
                                <li class="rotar-incremento"><a href="https://www.facebook.com/LiliGuzmanE/" target="_blank"><span class="sr-only">Facebook</span></a></li>
                                <li class="rotar-incremento"><a href="https://www.instagram.com" target="_blank"><span class="sr-only">Instagram</span></a></li>
                                <li class="rotar-incremento"><a href="https://wa.me/523411273602" target="_blank"><span class="sr-only">WhatsApp</span></a></li>
                
                            </ul>
                        </nav>
                    </div>

                </div><!-- parte-inferior -->

            </div><!-- fin row -->

        </main><!-- container -->
          

        <!-- End Add Your HTML here -->

        <?php include_once 'includes/templates/footer.php'?>
        <?php include_once 'includes/templates/scripts.php'?>

  </body>
</html>