<?php     //los datos en empresa real no se escriben directamente se utiliza xml, jarm o json para encriptacion. 
 $db = mysqli_connect('localhost:3306','root','Pokemongo2016','hotel');//creamos una nueva variable que hara la conexion de esta forma 
 //servidor, puerto, root, contrasena por ultimo la BD
 if(!$db){
   echo "<div class='alert alert-danger' role='alert'>
         Error: No se pudo establecer una conexión a la base de datos.
        </div>";
    #para ver si esta buena la conexion.
  }/*else{
    echo "<div class='alert alert-primary' role='alert'>
           ¡Conexión exitosa a la base de datos!
          </div>";
 }*/
?>
