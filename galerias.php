<?php
/*if (isset($_GET['promo'])) {
    $promo = htmlspecialchars($_GET['promo']);
    switch ($promo) {
        case 'lunaMiel':
            echo "<h1>Detalles del Paquete Luna de Miel</h1>";
            echo "<p>Aquí puedes describir el paquete Luna de Miel en detalle...</p>";
            break;
        case 'aventurero':
            echo "<h1>Detalles del Paquete Aventurero</h1>";
            echo "<p>Aquí puedes describir el paquete Aventurero en detalle...</p>";
            break;
        case 'deporte':
            echo "<h1>Detalles del Paquete Deporte</h1>";
            echo "<p>Aquí puedes describir el paquete Deporte en detalle...</p>";
            break;
        default:
            echo "<h1>Paquete no encontrado</h1>";
    }
} else {
    echo "<h1>No se especificó un paquete</h1>";
}**/
?>
<!doctype html>
<html lang="en">
  <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Reservas -Muang Thai</title>
     <!-- Enlace al archivo CSS de Bootstrap -->
     <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="css/estilos.css">
     <link rel="stylesheet" href="css/node_modules/open-iconic/font/css/open-iconic-bootstrap.min.css">
     <script src="script/javaScript.js"></script>
   </head>
   
  <body>
    <!-- Barra de navegacion -->
    <nav class="navbar navbar-dark navbar-expand-md bg-dark fixed-top">
      <a class="navbar-brand d-flex align-items-center" href="./index.php">
        <img src="./imagenes/logo_imagen1.png" alt="Logo" class="logo-navbar" a href="./index.html">
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
            <li><a class="dropdown-item" href="./galerias.php">Galeria de Imagenes</a></li>
            <li><a class="dropdown-item" href="./faqs.php">FAQS</a></li>
            </ul>
                                    <!--Login -->
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center" href="./login.php">

                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                  <path d="M8 8a3 3 0 1 0-3-3 3 3 0 0 0 3 3zm0 1a4 4 0 1 0-4-4 4 4 0 0 0 4 4zm4.5 5h-9a.5.5 0 0 1-.5-.5A4.5 4.5 0 0 1 8 9a4.5 4.5 0 0 1 4.5 4.5.5.5 0 0 1-.5.5z"/>
                </svg>
                <span class="ms-1">Iniciar Sesión</span>
              </a>
            </li>
          </li>
        </ul>
      </div>
    </nav>
    
    <!-- Breadcrumb -->
    <div class="container mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Eventos</li>
            </ol>
        </nav>

    <div class="container mt-5">
  <!-- Encabezado -->
  <div class="text-center mb-6">
    <h1 class="display-4">Descubre el encanto de Muang Thai</h1>
    <p class="lead">Explora las maravillas que tenemos preparadas para ti a través de nuestras imágenes.</p>
  </div>

  <!-- Botones de Filtros -->
  <div class="text-center mb-4">
    <button class="btn btn-outline-dark mx-1" onclick="filtrarGaleria('all')">Todo</button>
    <button class="btn btn-outline-dark mx-1" onclick="filtrarGaleria('habitaciones')">Habitaciones</button>
    <button class="btn btn-outline-dark mx-1" onclick="filtrarGaleria('spa')">Spa</button>
    <button class="btn btn-outline-dark mx-1" onclick="filtrarGaleria('restaurantes')">Restaurantes</button>
    <button class="btn btn-outline-dark mx-1" onclick="filtrarGaleria('Actividades')">Áreas al aire libre</button>
  </div>

  <!-- Galería -->
  <div class="row" id="gallery">
    <!-- Imagen 1 -->
    <div class="col-md-4 mb-4 gallery-item Actividades">
      <img src="imagenes/salonBoda.jpg" class="img-fluid rounded" alt="Actividades">
    </div>

    <!-- Imagen 2 -->
    <div class="col-md-4 mb-4 gallery-item Actividades">
      <img src="imagenes/tarjetasIntercaladas2.jpg" class="img-fluid rounded" alt="Actividades">
    </div>

    <!-- Imagen 3 -->
    <div class="col-md-4 mb-4 gallery-item spa">
      <img src="imagenes/spa&bienestar4.jpg" class="img-fluid rounded" alt="spa">
    </div>

    <!-- Imagen 4 -->
    <div class="col-md-4 mb-4 gallery-item restaurantes">
      <img src="imagenes/restaurante1.jpg" class="img-fluid rounded" alt="restaurantes">
    </div>

    <!-- Imagen 5 -->
    <div class="col-md-4 mb-4 gallery-item Actividades">
      <img src="imagenes/terraza_standard.jpg" class="img-fluid rounded" alt="Actividades">
    </div>

    <!-- Imagen 6 -->
    <div class="col-md-4 mb-4 gallery-item habitaciones">
      <img src="imagenes/bedDeluxe1.jpg" class="img-fluid rounded" alt="Habitaciones">
    </div>

    <!-- Imagen 7 -->
    <div class="col-md-4 mb-4 gallery-item restaurantes">
      <img src="imagenes/restaurante2.jpg" class="img-fluid rounded" alt="restaurantes">
    </div>

    <!-- Imagen 8 -->
    <div class="col-md-4 mb-4 gallery-item Actividades">
      <img src="imagenes/tarjetasIntercaladas1.jpg" class="img-fluid rounded" alt="Actividades">
    </div>

    <!-- Imagen 9 -->
    <div class="col-md-4 mb-4 gallery-item habitaciones">
      <img src="imagenes/bedDoble.jpg" class="img-fluid rounded" alt="Habitaciones">
    </div>

    <!-- Imagen 10 -->
    <div class="col-md-4 mb-4 gallery-item habitaciones">
      <img src="imagenes/bedFamiliar.jpg" class="img-fluid rounded" alt="Habitaciones">
    </div>

    <!-- Imagen 11 -->
    <div class="col-md-4 mb-4 gallery-item habitaciones">
      <img src="imagenes/jumbotron1.jpg" class="img-fluid rounded" alt="Habitaciones">
    </div>

    <!-- Imagen 12 -->
    <div class="col-md-4 mb-4 gallery-item spa">
      <img src="imagenes/spa&bienestar2.jpg" class="img-fluid rounded" alt="spa">
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

<script>
    function filtrarGaleria(category) {
  const items = document.querySelectorAll('.gallery-item');
  items.forEach(item => {
    if (category === 'all' || item.classList.contains(category)) {
      item.style.display = 'block';
    } else {
      item.style.display = 'none';
    }
  });
}
</script>
  
      <!-- jQuery, Popper.js y Bootstrap JS desde CDN -->
    <script src="script/javaScript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> <!-- Cambio: Utilizamos jQuery desde CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script> <!-- Cambio: Utilizamos Popper.js desde CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    </body>
  </html>