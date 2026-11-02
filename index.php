<?php
require __DIR__ . '/includes/funciones.php';
$consulta = obtener_reserva();
  /*echo "<pre>";
    "<div class='alert alert-primary' role='alert'>
       ¡Conexión exitosa a la base de datos!
     </div>";
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

    <!-- Jumbotron -->
    <div class="jumbotron">
      <h1 class="display-2">Muang Thai Hotel & Resort</h1>
      <p class="lead">Bienvenido a nuestro sitio</p>
    </div>

    <!-- Contenedores -->
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page"></li>
        </ol>
      </nav>

      <!-- Contenedor para párrafo -->
      <div class="container">
        <div class="row">
          <div class="col-md-8 p-2">
            <h2>¿Quieres algo nuevo estas vacaciones?</h2>
            <p>¡Reserve ahora!</p>
          </div>
        </div>
      </div>

      <!-- Formulario Check-In Check-Out -->
      <section id="reservaciones">
        <form id="reservationForm">
          <label for="checkinDate">Check-In:</label>
          <input type="date" id="checkinDate" name="checkinDate" required>

          <label for="checkoutDate">Check-Out:</label>
          <input type="date" id="checkoutDate" name="checkoutDate" required>

          <label for="roomType">Tipo de Habitación:</label>
          <select id="roomType" name="roomType" required>
            <option value="">Selecciona</option>
            <option value="single">Individual</option>
            <option value="double">Doble</option>
            <option value="double">Familiar</option>
            <option value="suite">Suite</option>
            <option value="suite">Deluxe</option>
            <option value="suite">Suite Presidencial</option>
          </select>
          <form action="formHabitaciones.php" method="POST">
              <button class="btn btn-dark enviar" type="submit">Reservar</button>
            </form>
        </form>
      </section>

      <!-- Información del Hotel -->
      <div class="info">
        <span>
          <h2>Hospédese en Muang Thai Hotel & Resort</h2>
          <p>
            Descubre el paraíso en el Muang Thai Hotel and Resort, donde la magia de Tailandia cobra vida.
            Comienza tu aventura en el impresionante templo Wat Plai Laem, un símbolo de espiritualidad y belleza.
            Luego, déjate llevar por la alegría del Festival de las Linternas, donde luces brillantes iluminan el cielo nocturno.
            Después, relájate en nuestras lujosas habitaciones, diseñadas para tu confort. Con actividades emocionantes en la playa,
            cada momento en Muang Thai es un recuerdo inolvidable. ¡Te esperamos!
          </p>
        </span>
      </div>

      <!-- Íconos -->
      <div class="container-icoons">
        <div class="row">
          <div class="col-md-4">
            <img class="icoonos" src="./imagenes/marcador-de-posicion.png" alt="Ubicación">
            <h3>Ubicación Estratégica</h3>
            <p>Hotel ubicado en el corazón de la ciudad para facilitar tu estancia.</p>
          </div>
          <div class="col-md-4">
            <img class="icoonos" src="./imagenes/comodidad.png" alt="Comodidad">
            <h3>Comodidad Garantizada</h3>
            <p>Habitaciones amplias y cómodas con servicios de alta calidad.</p>
          </div>
          <div class="col-md-4">
            <img class="icoonos" src="./imagenes/cliente.png" alt="Atención al Cliente">
            <h3>Servicio al Cliente</h3>
            <p>Personal altamente capacitado para garantizar tu satisfacción.</p>
          </div>
        </div>
      </div>
    </div>

          <!-- Productos (Habitaciones) -->
   <div class="cartasIndex">
    <div class="container mt-3">
      <div class="row">
        <div class="col-md-4">
          <h4>Habitación Individual</h4>
          <img src="./imagenes/bedIndividual.jpg" alt="Habitación Individual" class="img-fluid mb-3">
          <p>Habitación diseñada para una persona, con cama individual, decoración acogedora y vistas relajantes.</p>
          <div class="d-flex justify-content-center">
            <form action="formHabitaciones.php" method="POST">
              <button class="btn btn-dark enviar" type="submit">Reservar desde $180</button>
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
              <button class="btn btn-dark enviar" type="submit">Reservar desde $200</button>
            </form>
          </div>
          <a href="detalle2.php?tipo=doble" class="d-block text-center mt-2">Ver detalles</a>
        </div>

        <div class="col-md-4">
          <h4>Suite Presidencial</h4>
          <img src="./imagenes/bedPresidencial.jpg" alt="Suite Presidencial" class="img-fluid mb-3">
          <p>Espaciosa y lujosa, con sala de estar, vista al mar y comodidades exclusivas. Perfecta para personalidades y negocios.</p>
          <div class="d-flex justify-content-center">
            <form action="formHabitaciones.php" method="POST"><!--El metodo get es mas seguro que post para datos sencibles-->
              <button class="btn btn-dark enviar" type="submit">Reservar desde $270</button>
            </form>
          </div>
          <a href="detalle3.php?tipo=suite" class="d-block text-center mt-2">Ver detalles</a>
        </div>
      </div>
    </div>
    </div>

    <div class="container text-center mt-4">
  <h2 class="mb-3">Descubre Muang Thai Hotel & Resort</h2>
  <p>Haz clic en el enlace para ver nuestro video promocional:</p>
  <a href="https://youtu.be/a1qqdr5volw" target="_blank" class="btn btn-danger btn-sm">
    Ver Video en YouTube
  </a>
    </div>      
      <!-- Carrusel -->
      <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel" data-slide-to="1" class="active"></li>
          <li data-target="#carousel" data-slide-to="2"></li>
          <li data-target="#carousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./imagenes/clienteCarrusel3.jpg" class="d-block w-100" alt="Primera imagen">
            <div class="carousel-caption d-none d-md-block">
              <h5>Beautiful place, mark your life!</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./imagenes/clienteCarrusel2.jpg" class="d-block w-100" alt="Segunda imagen">
            <div class="carousel-caption d-none d-md-block">
              <h5>Los paquetes son geniales, mi luna de miel fue increíble.</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./imagenes/clienteCarrusel1.jpg" class="d-block w-100" alt="Tercera imagen">
            <div class="carousel-caption d-none d-md-block">
              <h5>Calidad de atención, me llevo una gran experiencia.</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./imagenes/clienteCarrusel4.jpg" class="d-block w-100" alt="Cuarta imagen">
            <div class="carousel-caption d-none d-md-block">
              <h5>Profitez de la nature, j'y reviendrai entre amis.</h5>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
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
          </svg>+66 25660889</p>
          <p><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none" stroke="currentColor"stroke-width="2"stroke-linecap="round" stroke-linejoin="round"
          >
            <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
            <path d="M3 7l9 6l9 -6" />
          </svg>reservations@MuangThaiHR.hn</p>
         </address>
       </div>
       <div class="col-sm-4">
        <a href="https://www.facebook.com" target="_blank">Nosotros</a><br>
        <a href="contacto.php" target="_blank">Contacto</a><br>
        <a href="https://www.twitter.com" target="_blank">Términos y Condiciones</a><br>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="1.25"> <path d="M3 5m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z"></path> <path d="M3 10l18 0"></path> <path d="M7 15l.01 0"></path> <path d="M11 15l2 0"></path> </svg> 
       </div>
    </footer>

    <!-- jQuery, Popper.js y Bootstrap JS desde CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> <!-- Utilizamos jQuery desde CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script> <!-- Utilizamos Popper.js desde CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> <!--  Utilizamos Bootstrap JS desde CDN -->
  </body>
</html>
