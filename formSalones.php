<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Conexión a la base de datos
    $db = new mysqli('localhost:3306', 'root', 'Pokemongo2016', 'hotel');

    if ($db->connect_error) {
        die('Error de conexión: ' . $db->connect_error);
    }

    // Capturar datos del formulario
    $nombre = $db->real_escape_string($_POST['nombre']);
    $apellido = $db->real_escape_string($_POST['apellido']);
    $correo = $db->real_escape_string($_POST['correo']);
    $telefono = $db->real_escape_string($_POST['telefono']);
    $direccion = $db->real_escape_string($_POST['direccion']);
    $ciudad = $db->real_escape_string($_POST['ciudad']);
    $pais = $db->real_escape_string($_POST['pais']);
    $tipo_evento = $db->real_escape_string($_POST['tipoEvento']);
    $fecha_inicio = isset($_POST['fechaInicio']) ? $db->real_escape_string($_POST['fechaInicio']) : null;
    $fecha_fin = isset($_POST['fechaFin']) ? $db->real_escape_string($_POST['fechaFin']) : null;
    $num_invitados = $db->real_escape_string($_POST['numInvitados']);
    $requisitos_catering = isset($_POST['requisitosCatering']) ? implode(',', $_POST['requisitosCatering']) : '';
    $comentarios = $db->real_escape_string($_POST['comentarios']);

    // Validación básica de las fechas
    if ($fecha_inicio === null || !preg_match('/^\d{4}-\d{2}-\d{2}$/', $fecha_inicio)) {
        die('Por favor, ingresa una fecha de inicio válida en el formato YYYY-MM-DD.');
    }

    if ($fecha_fin !== null && !preg_match('/^\d{4}-\d{2}-\d{2}$/', $fecha_fin)) {
        die('Por favor, ingresa una fecha de finalización válida en el formato YYYY-MM-DD.');
    }

    // Insertar datos en la tabla reserva_salon solo si las validaciones son correctas
    $sql = "INSERT INTO reserva_salon (
                nombre_contacto, apellido_contacto, email_contacto, telefono_contacto, 
                direccion, ciudad, pais, tipo_evento, fecha_inicio, fecha_fin, 
                numero_invitados, requisitos_catering, comentarios
            ) VALUES (
                '$nombre', '$apellido', '$correo', '$telefono', 
                '$direccion', '$ciudad', '$pais', '$tipo_evento', '$fecha_inicio', '$fecha_fin', 
                '$num_invitados', '$requisitos_catering', '$comentarios'
            )";

    if ($db->query($sql) === TRUE) {
        echo "¡Propuesta de evento enviada exitosamente!";
    } else {
        echo "Error al registrar el evento: " . $db->error;
    }

    // Cerrar la conexión
    $db->close();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario de Reservas de Salones</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Formulario de Reservas de Salones</h1>
        <form action="formSalones.php" method="POST" class="formularioR" enctype="multipart/form-data">
            <!-- Información del Contacto -->
            <div class="mb-3">
                <label for="nombre_contacto" class="form-label">Nombre del Contacto</label>
                <input type="text" id="nombre_contacto" name="nombre_contacto" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="telefono_contacto" class="form-label">Teléfono</label>
                <input type="tel" id="telefono_contacto" name="telefono_contacto" class="form-control" required>
            </div>

            <!-- Detalles del Evento -->
            <div class="mb-3">
                <label for="tipo_evento" class="form-label">Tipo de Evento</label>
                <select id="tipo_evento" name="tipo_evento" class="form-select" required>
                    <option value="boda">Boda</option>
                    <option value="conferencia">Conferencia</option>
                    <option value="fiesta">Fiesta</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="fecha_evento" class="form-label">Fecha del Evento</label>
                <input type="date" id="fecha_evento" name="fecha_evento" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="num_invitados" class="form-label">Número de Invitados</label>
                <input type="number" id="num_invitados" name="num_invitados" class="form-control" required>
            </div>

            <!-- Servicios Adicionales -->
            <div class="mb-3">
                <label for="requisitos" class="form-label">Servicios Adicionales</label>
                <div class="form-check">
                    <input type="checkbox" id="catering" name="servicios[]" value="catering" class="form-check-input">
                    <label for="catering" class="form-check-label">Catering</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="audio_visual" name="servicios[]" value="audio_visual" class="form-check-input">
                    <label for="audio_visual" class="form-check-label">Equipo de Audio Visual</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="decoracion" name="servicios[]" value="decoracion" class="form-check-input">
                    <label for="decoracion" class="form-check-label">Decoración</label>
                </div>
            </div>

            <button type="submit" class="btn btn-dark">Reservar Salón</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> <!-- Cambio: Utilizamos jQuery desde CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script> <!-- Cambio: Utilizamos Popper.js desde CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    </body>
  </html>