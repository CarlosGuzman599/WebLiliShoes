<!DOCTYPE html>
<html lang="en">

  <?php include_once 'includes/templates/head.php'?>

  <body>

    <!-- Add Your HTML here -->
    <header class="container encabezado-sitio">

      <div class="row justify-content-md-between align-items-center m-3">

        <div class="col-lg-4">
          <a href="index.html">
            <img src="./img/logo.svg" class="img-fluid mx-auto d-block" alt="NoFunt">
          </a>
        </div><!-- logo -->

        <div class="col-lg-4">
          <nav class="sociales text-center text-lg-right">
            <ul>

              <li class="rotar-incremento"><a href="https://www.facebook.com/LiliGuzmanE/" target="_blank"><span class="sr-only">Facebook</span></a></li>
              <li class="rotar-incremento"><a href="https://www.instagram.com" target="_blank"><span class="sr-only">Instagram</span></a></li>
              <li class="rotar-incremento"><a href="https://wa.me/523411273602" target="_blank"><span class="sr-only">WhatsApp</span></a></li>
              <li class="rotar-incremento"><a href="login.php"><span class="sr-only">Iniciar Sesion</span></a></li>

            </ul>


          </nav>
        </div><!-- barra -->

      </div><!-- Row -->

    </header>

    <?php include_once 'includes/templates/barra.php' ?>

    <div class="container"><!-- Slider/carousel -->
      <div class="row">
        <div class="col-12 mb-5 mt-3">
          <div id="slider" class="carousel slide" data-ride="carousel" data-interval="4000">

            <ol class="carousel-indicators">
              <li data-target="#slider" data-slide-to="0" class="active"></li>
              <li data-target="#slider" data-slide-to="1" ></li>
              <li data-target="#slider" data-slide-to="2" ></li>
            </ol>

            <div class="carousel-inner">

              <div class="carousel-item active">
                <img src="img/slide_01.jpg" alt="" class="img-fluid d-block rounded">
                <div class="carousel-caption d-none d-md-block">
                  <p class="display-4 fm-raleway text-right text-uppercase titulo">amplio surtido</p>
                  <a href="#" class="btn btn-outline-dark">Ver más</a>
                </div>
              </div>

              <div class="carousel-item">
                <img src="img/slide_02.jpg" alt="" class="img-fluid d-block rounded">
                <div class="carousel-caption d-none d-md-block">
                  <p class="display-4 fm-raleway text-right text-uppercase color-dark titulo">ropa de temporada</p>
                  <a href="#" class="btn btn-outline-light">Ver más</a>
                </div>
              </div>

              <div class="carousel-item">
                <img src="img/slide_03.jpg" alt="" class="img-fluid d-block rounded">
                <div class="carousel-caption d-none d-md-block">
                  <p class="display-4 fm-raleway text-right text-uppercase color-dark titulo">calzado para toda la familia</p>
                  <a href="#" class="btn btn-outline-dark">Ver más</a>
                </div>
              </div>

            </div><!-- <div class="carousel-inner"> -->

            <a href="#slider" class="carousel-control-prev" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Slider previo</span>
            </a>

            <a href="#slider" class="carousel-control-next" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Slider siguiente</span>
            </a>

          </div><!-- <div id="slider" class="carousel slide" data-ride="carousel"> -->
        </div><!-- <div class="col-12"> -->
      </div><!-- <div class="row"> -->
    </div><!-- Fin Slider/carousel -->

    <div class="container"><!-- mi web -->
      <div class="row myWeb m-3">
        <div class="text-center">

          <h2 class="display-4 fm-pacifico text-capitalize">bienvenidos</h2>

          <p class="fm-raleway">Me pongo a tus ordenes como distribuidora de las mejores marcas en ropa y calzado por catalogo, el mejor servicio al mejor precio , ya no tienes que salir de tu casa para realizar tus pedidos, con entrega a domicilio.</p>

        </div>

      </div>
    </div><!-- Fin mi web -->

    <div class="container tarjetillas py-4"><!-- tarjetillas -->

      <div class="row"><!-- main row -->

        <div class="col-md-4 text-center"><!-- contenido tarjetilla -->
          <div class="imagen-tarejetilla">
            <img src="img/servicio_01.jpg" class="img-fluid rounded">
            <div class="row no-gutters justify-content-center">
              <div class="col-md-10 pt-4 servicio-info">

                <p class="fm-pacifico color-secondary">conoce más sobre</p>
                <h3 class="text-uppercase mb-3 fm-raleway">Nosotros</h3>
                <a href="" class="btn btn-personal d-block text-uppercase rounded-0">Ver más</a>

              </div>
            </div>
          </div>
        </div><!-- fin contenido tarjetilla -->

        <div class="col-md-4 text-center"><!-- contenido tarjetilla -->
          <div class="imagen-tarejetilla">
            <img src="img/servicio_02.jpg" class="img-fluid rounded">
            <div class="row no-gutters justify-content-center">
              <div class="col-md-10 pt-4 servicio-info">

                <p class="fm-pacifico color-secondary">nuestros</p>
                <h3 class="text-uppercase mb-3 fm-raleway">servicios</h3>
                <a href="" class="btn btn-personal d-block text-uppercase rounded-0">Ver más</a>

              </div>
            </div>
          </div>
        </div><!-- fin contenido tarjetilla -->

        <div class="col-md-4 text-center"><!-- contenido tarjetilla -->
          <div class="imagen-tarejetilla">
            <img src="img/servicio_03.jpg" class="img-fluid rounded">
            <div class="row no-gutters justify-content-center">
              <div class="col-md-10 pt-4 servicio-info">

                <p class="fm-pacifico color-secondary">visita nuestra</p>
                <h3 class="text-uppercase mb-3 fm-raleway">tienda</h3>
                <a href="" class="btn btn-personal d-block text-uppercase rounded-0">Ver más</a>

              </div>
            </div>
          </div>
        </div><!-- fin contenido tarjetilla -->

      </div><!-- fin main row -->

    </div><!--  FIN tarjetillas -->

    <div class="container marcas">
      <div class="row d-block">

        <div class="text-center mt-5">
          <p class=" colo-12 fm-pacifico color-secondary">nuestras pricipales</p>
          <h3 class="text-uppercase mb-3 fm-raleway">marcas</h3>
        </div>

      </div>

      <div class="imagenes-marcas">
        <div class="row">

          <img src="img/marca-1.png" alt="" class="col-5 my-auto col-12 col-md-4 col-sm-6 img-fluid">
          <img src="img/marca-2.png" alt="" class="col-5 my-auto col-12 col-md-4 col-sm-6 img-fluid">
          <img src="img/marca-3.png" alt="" class="col-5 my-auto col-12 col-md-4 col-sm-6 img-fluid">
          <img src="img/marca-4.png" alt="" class="col-5 my-auto col-12 col-md-4 col-sm-6 img-fluid">
          <img src="img/marca-5.png" alt="" class="col-5 my-auto col-12 col-md-4 col-sm-6 img-fluid">
          <img src="img/marca-6.png" alt="" class="col-5 my-auto col-12 col-md-4 col-sm-6 img-fluid">

        </div>
      </div>

    </div>

    <div class="container cards-productos">
      <div class="row">

        <div class="col-md-4 p-5"><!-- card -->
          <div class="card shadow">
            <img src="img/tarjeta_01.jpg" alt="" class="card-img-top img-fluid">
            <div class="card-body">
              <h2 class="card-title text-center fm-pacifico text-capitalize">de temporada</h2>
              <p class="card-text text-center">Ropa y calzado de temporada para toda la familia, las mejores tendencias, al mejor precio.</p>
              <a href="#" class="btn btn-personal d-block text-capitalize">Leer más</a>
            </div>
          </div>
        </div><!-- fin card -->

        <div class="col-md-4 p-5"><!-- card -->
          <div class="card shadow">
            <img src="img/tarjeta_02.jpg" alt="" class="card-img-top img-fluid">
            <div class="card-body">
              <h2 class="card-title text-center fm-pacifico text-capitalize">emprende</h2>
              <p class="card-text text-center">Comienza tu propio negocio vendiendo las mejores marcas a los mejores precios.</p>
              <a href="#" class="btn btn-personal d-block text-capitalize">Leer más</a>
            </div>
          </div>
        </div><!-- fin card -->

        <div class="col-md-4 p-5"><!-- card -->
          <div class="card shadow">
            <img src="img/tarjeta_03.jpg" alt="" class="card-img-top img-fluid">
            <div class="card-body">
              <h2 class="card-title text-center fm-pacifico text-capitalize">compra</h2>
              <p class="card-text text-center">las mejores marcas al majer precio o afiliate como socio emprendedor.</p>
              <a href="#" class="btn btn-personal d-block text-capitalize">Leer más</a>
            </div>
          </div>
        </div><!-- fin card -->

      </div><!-- <div class="row"> -->
    </div><!-- cards-productos -->

    <?php include_once 'includes/templates/footer.php'?>
    <?php include_once 'includes/templates/scripts.php'?>

  </body>
</html>