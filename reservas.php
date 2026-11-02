<?php
require __DIR__ . '/includes/funciones.php';
$consulta = obtener_habitacion();
  /*echo "<pre>";
  var_dump($consulta);
  echo "</pre>";*/
?>
<!doctype html>
<html lang="en">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Muang Thai</title>
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

    <!--Jumbotron area--> 
    <div class="jumbotron3 jumbotron-fluid text-center bg-light">
      <h1 class="display-2">¡Reserva a tu manera!</h1>
    </div>
<div class="container mt-3">
    <!-- Breadcrumb actualizado con tamaño h1 -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page"> Reservas</li>
        </ol>
    </nav>
</div>
<div class="cartas">
    <div class="container mt-3">
        <div class="row mb-5">
            <!-- Primer grupo de habitaciones -->
            <div class="col-md-4">
                <h4>Habitación Individual</h4>
                <img src="./imagenes/bedIndividual1.jpg" alt="Habitación Individual" class="img-fluid mb-3">
                <p>Habitación diseñada para una persona, con cama individual, decoración acogedora y vistas relajantes.</p>
                <div class="d-flex justify-content-center">
                <form action="formHabitaciones.php" method="POST">
                   <button class="btn btn-dark enviar" type="submit">Reservar</button>
                </form>
                </div>
                <a href="detalle1.php?tipo=individual" class="d-block text-center mt-2">Ver detalles</a>
            </div>

            <div class="col-md-4">
                <h4>Habitación Doble</h4>
                <img src="./imagenes/bedDoble.jpg" alt="Habitación Doble" class="img-fluid mb-3">
                <p>Ideal para dos personas, equipada con una cama doble o dos camas individuales y servicios esenciales.</p>
                <div class="d-flex justify-content-center">
                <form action="formHabitaciones.php" method="POST">
                   <button class="btn btn-dark enviar" type="submit">Reservar</button>
                </form>
                </div>
                <a href="detalle2.php" class="d-block text-center mt-2">Ver detalles</a>
            </div>

            <div class="col-md-4">
                <h4>Habitación Familiar</h4>
                <img src="./imagenes/bedindividual.jpg" alt="Habitación Familiar" class="img-fluid mb-3">
                <p>Ideal para familias, equipada con camas adicionales y espacio amplio para convivir cómodamente. Ideal para familias numerosas.</p>
                <div class="d-flex justify-content-center">
                <form action="formHabitaciones.php" method="POST">
                   <button class="btn btn-dark enviar" type="submit">Reservar</button>
                </form>
                </div>
                <a href="detalle4.php?tipo=familiar" class="d-block text-center mt-2">Ver detalles</a>
            </div>
        </div>

        <hr>

        <div class="row">
            <!-- Segundo grupo de habitaciones -->
            <div class="col-md-4">
                <h4>Habitación Deluxe</h4>
                <img src="./imagenes/bedDeluxe1.jpg" alt="Habitación Deluxe" class="img-fluid mb-3">
                <p>Habitación amplia y elegante con servicios premium para disfrutar de una estadía única, comodidad exclusiva para el huésped.</p>
                <div class="d-flex justify-content-center">
                <form action="formHabitaciones.php" method="POST">
                   <button class="btn btn-dark enviar" type="submit">Reservar</button>
                </form>
                </div>
                <a href="detalle5.php?tipo=deluxe" class="d-block text-center mt-2">Ver detalles</a>
            </div>

            <div class="col-md-4">
                <h4>Suite Presidencial</h4>
                <img src="./imagenes/bedPresidencial.jpg" alt="Suite Presidencial" class="img-fluid mb-3">
                <p>Espaciosa y lujosa, con sala de estar, vista al mar y comodidades exclusivas. Ideal para ocasiones especiales.</p>
                <div class="d-flex justify-content-center">
                <form action="formHabitaciones.php" method="POST">
                   <button class="btn btn-dark enviar" type="submit">Reservar</button>
                </form>
                </div>
                <a href="detalle3.php" class="d-block text-center mt-2">Ver detalles</a>
            </div>

            <div class="col-md-4">
                <h4>Suite Especial</h4>
                <img src="./imagenes/bedEspecial.jpg" alt="Suite Especial" class="img-fluid mb-3">
                <p>Una experiencia única con servicios personalizados y decoración exclusiva. Perfecta para grandes celebraciones.</p>
                <div class="d-flex justify-content-center">
                <form action="formHabitaciones.php" method="POST">
                   <button class="btn btn-dark enviar" type="submit">Reservar</button>
                </form>
                </div>
                <a href="detalle6.php?tipo=especial" class="d-block text-center mt-2">Ver detalles</a>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<footer>
      <div class="row">
        <div class="col-sm-4">
          <a href="https://www.facebook.com" target="_blank">Facebook</a><br>
          <a href="https://www.instagram.com" target="_blank">Instagram</a><br>
          <a href="https://www.twitter.com" target="_blank">X</a><br>
       </div>
       <div class="col-sm-4">
         <address>
          <h2>Oficina Central</h2>
          <p><svg 
            xmlns="http://www.w3.org/2000/svg"
            width="25"
            height="24"
            viewBox="0 0 25 25"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
          </svg>Bangkok, Thailandia.</p>
          <p><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-phone" viewBox="0 0 18 18">
            <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
            <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
          </svg>+504 2245-2133</p>
          <p><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none" stroke="currentColor"stroke-width="2"stroke-linecap="round" stroke-linejoin="round"
          >
            <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
            <path d="M3 7l9 6l9 -6" />
          </svg>reservations@MuangThaiHR.hn</p>
         </address>
       </div>
       <div class="col-sm-4">
        <a href="https://www.facebook.com" target="_blank">Nosotros</a><br>
        <a href="https://www.instagram.com" target="_blank">Contacto</a><br>
        <a href="https://www.twitter.com" target="_blank">Términos y Condiciones</a><br>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="1.25"> <path d="M3 5m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z"></path> <path d="M3 10l18 0"></path> <path d="M7 15l.01 0"></path> <path d="M11 15l2 0"></path> </svg> 
       </div>
    </footer>
  
      <!-- jQuery, Popper.js y Bootstrap JS desde CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> <!-- Cambio: Utilizamos jQuery desde CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script> <!-- Cambio: Utilizamos Popper.js desde CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    </body>
  </html>