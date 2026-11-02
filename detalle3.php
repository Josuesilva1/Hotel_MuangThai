<!doctype html>
<html lang="en">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Suite -Muang Thai</title>
     <!-- Enlace al archivo CSS de Bootstrap -->
     <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="css/estilos.css">
     <link rel="stylesheet" href="css/node_modules/open-iconic/font/css/open-iconic-bootstrap.min.css">
   </head>
   
  <body>
                    <!-- Barra de navegacion -->
                    <nav class="navbar navbar-dark navbar-expand-md bg-dark fixed-top">
  <a class="navbar-brand d-flex align-items-center" href="./index.php">
    <img src="./imagenes/logo_imagen1.png" alt="Logo" class="logo-navbar">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item"><a class="nav-link" href="./promociones.php">Promociones</a></li>
      <li class="nav-item"><a class="nav-link" href="./reservas.php">Reservas</a></li>
      <li class="nav-item"><a class="nav-link" href="./eventos.php">Eventos</a></li>
      <li class="nav-item"><a class="nav-link" href="./restaurantes.php">Restaurantes</a></li>
      <li class="nav-item"><a class="nav-link" href="./contacto.php">Contacto</a></li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="moreOptions" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <!-- Icono de tres líneas -->
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm0-5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm0-5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11z"/>
          </svg>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="moreOptions">
          <li><a class="dropdown-item" href="./experiencias.php">Experiencias</a></li>
          <li><a class="dropdown-item" href="./spa.php">Spa y bienestar</a></li>
          <li><a class="dropdown-item" href="./galerias.php">Galería de Imágenes</a></li>
          <li><a class="dropdown-item" href="./faqs.php">FAQS</a></li>
        </ul>
      </li>
                                <!--Login -->
      <li class="nav-item">
        <a class="nav-link d-flex align-items-center" href="./login.php">

          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0-3-3 3 3 0 0 0 3 3zm0 1a4 4 0 1 0-4-4 4 4 0 0 0 4 4zm4.5 5h-9a.5.5 0 0 1-.5-.5A4.5 4.5 0 0 1 8 9a4.5 4.5 0 0 1 4.5 4.5.5.5 0 0 1-.5.5z"/>
          </svg>
          <span class="ms-1">Iniciar Sesión</span>
        </a>
      </li>
    </ul>
  </div>
</nav>
    <!-- Contenedor -->
    <div class="container mt-5">
        <h1 class="mt-5">Suite Presidencial</h1>

        <div class="habitacion">
            <!-- Carrusel de imágenes -->
            <div id="carouselSuite" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./imagenes/bedPresidencial.jpg" class="d-block w-100" alt="Vista Suite Presidencial">
                    </div>
                    <div class="carousel-item">
                        <img src="./imagenes/bedPresidencial2.jpg" class="d-block w-100" alt="Sala Suite Presidencial">
                    </div>
                    <div class="carousel-item">
                        <img src="./imagenes/bedPresidencial3.jpg" class="d-block w-100" alt="Decoración de lujo Suite">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselSuite" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselSuite" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>

            <!-- Body Card con información -->
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Suite Presidencial</h5>
                    <p class="card-text">La Suite Presidencial ofrece una experiencia única y lujosa, ideal para clientes exigentes y ejecutivos de alto nivel.</p>
                    <p><strong>Precio:</strong> $270 por noche</p>
                    <p><strong>Servicios VIP:</strong></p>
                    <ul><!--servicios de alta gama-->
                        <li>Servicio de mayordomo privado 24/7</li>
                        <li>Acceso exclusivo al spa</li>
                        <li>Desayuno gourmet incluido</li>
                        <li>Minibar premium gratuito</li>
                        <li>Traslado en limusina desde/hacia el aeropuerto</li>
                        <li>Sala de reuniones privada</li>
                        <li>Terraza con jacuzzi y vista panorámica</li>
                    </ul>
                    <form action="formReservas.php" method="POST"><!--El metodo get es mas seguro que post para datos sencibles-->
                      <button class="btn btn-dark enviar" type="submit">Reservar ahora</button>
                    </form>
                    <!--redireccion a  reservas-->
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center mt-5">
        <div class="row">
            <div class="col-sm-4">
                <a href="https://www.facebook.com" target="_blank">Facebook</a><br>
                <a href="https://www.instagram.com" target="_blank">Instagram</a><br>
                <a href="https://www.twitter.com" target="_blank">X</a><br>
            </div>
            <div class="col-sm-4">
                <address>
                    <h2>Oficina Central</h2>
                    <p>Bangkok, Thailandia</p>
                    <p>+504 2245-2133</p>
                    <p>reservations@MuangThaiHR.hn</p>
                </address>
            </div>
            <div class="col-sm-4">
                <a href="#">Nosotros</a><br>
                <a href="contacto.php">Contacto</a><br>
                <a href="#">Términos y Condiciones</a><br>
            </div>
        </div>
    </footer>

    <!-- jQuery, Popper.js y Bootstrap JS desde CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> <!-- Cambio: Utilizamos jQuery desde CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script> <!-- Cambio: Utilizamos Popper.js desde CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> <!-- Cambio: Utilizamos Bootstrap JS desde CDN -->
  </body>
</html>
