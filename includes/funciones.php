<?php
// Capturar el tipo de habitación desde la URL
$tipo_habitacion = isset($_GET['tipo']) ? $_GET['tipo'] : '';

// Información de las habitaciones
$habitaciones = [
    'individual' => [
        'titulo' => 'Habitación Individual',
        'descripcion' => 'Habitación diseñada para una persona, con cama individual, decoración acogedora y vistas relajantes.',
        'imagen' => './imagenes/bedIndividual.jpg'
    ],
    'doble' => [
        'titulo' => 'Habitación Doble',
        'descripcion' => 'Ideal para dos personas, equipada con una cama doble o dos camas individuales y servicios esenciales.',
        'imagen' => './imagenes/bedDoble.jpg'
    ],
    'suite' => [
        'titulo' => 'Suite Presidencial',
        'descripcion' => 'Lujosa suite con sala de estar, vista al mar y comodidades exclusivas.',
        'imagen' => './imagenes/bedPresidencial.jpg'
    ]
];

  // Validar el tipo de habitación
if (array_key_exists($tipo_habitacion, $habitaciones)) {
    $habitacion = $habitaciones[$tipo_habitacion];
} else {
    $habitacion = [
        'titulo' => 'Habitación no encontrada',
        'descripcion' => 'Lo sentimos, la información de esta habitación no está disponible.',
        'imagen' => './imagenes/error.jpg'
    ];
}//funcion de  detalle

/**_______________________________________consultar a la base de dats____________________________________________________________ */
function obtener_reserva(){
  try{
       require 'database.php';
       $sql ="SELECT * from reserva_habitacion;";
       $consulta = mysqli_query($db, $sql);
       return $consulta;
       $resultado = mysqli_close($db);
  }catch(\Throwable  $th){
    var_dump($th);
  } 
}
obtener_reserva();

/**_______________________________________ crear_reserva  ____________________________________________________________ */

function crear_reserva($id_usuario, $id_habitacion, $fecha_inicio, $fecha_fin, $tipo_habitacion) {
    try {
        
        //creamos una nueva reserva con database.php
        require 'database.php';
        date_default_timezone_set('America/Tegucigalpa');
        $fecha_reserva = date('Y-m-d H:i:s');

        $sql = "INSERT INTO reserva_habitacion (id_usuario, id_habitacion, fecha_reserva, fecha_inicio, fecha_fin, tipo_habitacion)
                VALUES ('$id_usuario', '$id_habitacion', '$fecha_reserva', '$fecha_inicio', '$fecha_fin', '$tipo_habitacion')";
        $consulta = mysqli_query($db, $sql);
        mysqli_close($db);

        return $consulta; // Retorna true si la consulta fue exitosa
    } catch (Throwable $th) {
        var_dump($th);
    }
}

/**______________________________obtener_habitacion___________________________*/

function obtener_habitacion(){
    try{
         require 'database.php';
         $sql ="SELECT * from habitaciones;";
         $consulta = mysqli_query($db, $sql);
         return $consulta;
         $resultado = mysqli_close($db);
    }catch(\Throwable $th){
      var_dump($th);
    } 
  }
  obtener_habitacion();


  






/**___________________________________________________________________________________________________ */
if (isset($_GET['promo'])) {
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
}

?>