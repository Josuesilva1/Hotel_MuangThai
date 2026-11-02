<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Depuración: Verificar datos recibidos
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    exit(); // Esto detendrá el código aquí para que podamos ver los datos enviados

    // Conexión a la base de datos
    $db = new mysqli('localhost:3306', 'root', 'Pokemongo2016', 'hotel');

    if ($db->connect_error) {
        die('Error de conexión: ' . $db->connect_error);
    }

    // Capturar y validar los datos
    $id_usuario = isset($_POST['id_usuario']) && is_numeric($_POST['id_usuario']) ? $_POST['id_usuario'] : null;
    $id_habitacion = isset($_POST['id_habitacion']) && is_numeric($_POST['id_habitacion']) ? $_POST['id_habitacion'] : null;
    $fecha_inicio = isset($_POST['fecha_inicio']) && preg_match('/^\d{4}-\d{2}-\d{2}$/', $_POST['fecha_inicio']) ? $_POST['fecha_inicio'] : null;
    $fecha_fin = isset($_POST['fecha_fin']) && preg_match('/^\d{4}-\d{2}-\d{2}$/', $_POST['fecha_fin']) ? $_POST['fecha_fin'] : null;
    $tipo_habitacion = isset($_POST['tipo_habitacion']) ? $_POST['tipo_habitacion'] : null;

    // Validaciones
    if ($id_usuario === null) {
        die("Error: El ID de usuario es inválido o está vacío.");
    }
    if ($id_habitacion === null) {
        die("Error: El ID de habitación es inválido o está vacío.");
    }
    if ($fecha_inicio === null) {
        die("Error: La fecha de inicio no es válida o está vacía. Formato esperado: YYYY-MM-DD.");
    }
    if ($fecha_fin === null) {
        die("Error: La fecha de finalización no es válida o está vacía. Formato esperado: YYYY-MM-DD.");
    }
    if ($tipo_habitacion === null || $tipo_habitacion === '') {
        die("Error: Por favor selecciona un tipo de habitación.");
    }

    // Verificar existencia del usuario
    $consulta_usuario = $db->query("SELECT id FROM usuarios WHERE id = $id_usuario");
    if ($consulta_usuario->num_rows === 0) {
        die("Error: El usuario con ID $id_usuario no existe en la base de datos.");
    }

    // Estado predeterminado
    $estado_reserva = 'pendiente';

    // Inserción de datos
    $sql = "INSERT INTO reserva_habitacion (id_usuario, id_habitacion, fecha_reserva, fecha_inicio, fecha_fin, tipo_habitacion, estado) 
            VALUES ('$id_usuario', '$id_habitacion', NOW(), '$fecha_inicio', '$fecha_fin', '$tipo_habitacion', '$estado_reserva')";

    if ($db->query($sql) === TRUE) {
        echo "¡Reserva realizada exitosamente!";
    } else {
        echo "Error al realizar la reserva: " . $db->error;
    }

    // Cerrar conexión
    $db->close();
}
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

    <div class="container mt-5">
        <h1 class="text-center">Formulario de Reservas de Habitaciones</h1>
        <form action="formHabitaciones.php" method="POST" class="formularioR" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="id_usuario" class="form-label">ID Usuario</label>
        <input type="number" id="id_usuario" name="id_usuario" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="id_habitacion" class="form-label">ID Habitación</label>
        <input type="number" id="id_habitacion" name="id_habitacion" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="fecha_inicio" class="form-label">Check-In</label>
        <input type="date" id="fecha_inicio" name="fecha_inicio" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="fecha_fin" class="form-label">Check-Out</label>
        <input type="date" id="fecha_fin" name="fecha_fin" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="tipo_habitacion" class="form-label">Tipo de Habitación</label>
        <select id="tipo_habitacion" name="tipo_habitacion" class="form-select" required>
            <option value="individual">Habitación Individual</option>
            <option value="doble">Habitación Doble</option>
            <option value="familiar">Habitación Familiar</option>
            <option value="deluxe">Habitación Deluxe</option>
        </select>
    </div>
    <button type="submit" class="btn btn-dark">Enviar Reserva</button>
</form>
</div>

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery, Popper.js y Bootstrap JS desde CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> <!-- Utilizamos jQuery desde CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script> <!-- Utilizamos Popper.js desde CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> <!--  Utilizamos Bootstrap JS desde CDN -->
  </body>
</html>

