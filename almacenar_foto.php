<?php
session_start();
$id = $_SESSION['nombre'];

//Conexion a la base de datos
$conexion = new mysqli("localhost", "root", "", "reserva_laboratorio");
include'conexion2.php';


//Comprobamos si ha ocurrido un error.
if (!isset($_FILES["imagen"]) || $_FILES["imagen"]["error"] > 0){

    $fail = "Verifica que hayas elegido una imagen o que no supere los 2 megas de tamaño.";

}else{

    //Verificamos si el tipo de archivo es un tipo de imagen permitido y que el tamaño del archivo no exceda los 16MB
    $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
    $limite_kb = 16384;

    if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){

        // Archivo temporal
        $imagen_temporal = $_FILES['imagen']['tmp_name'];

        // Tipo de archivo
        $tipo = $_FILES['imagen']['type'];

        // Leemos el contenido del archivo temporal en binario.
        //El código de abajo es una forma diferente de leer el contenido del archivo de imagen temporal.

        /*
        $fp = fopen($imagen_temporal, 'r+b');
        $data = fread($fp, filesize($imagen_temporal));
        fclose($fp);
        */

        // Leemos el contenido del archivo temporal en binario.
        $data=file_get_contents($imagen_temporal);

        // Escapamos los caracteres para que se puedan almacenar en la base de datos correctamente.
        $data = mysqli_real_escape_string($conexion, $data);

        $consulta = "SELECT * FROM imagenes WHERE usuario = '$id'";
        $respuesta = $conexion->query($consulta) or die (mysqli_error($conexion));
        $row_cnt = $respuesta->num_rows;

        if($row_cnt>0){

            // Insertamos en la base de datos si ya existía un archivo
            $query = "UPDATE imagenes SET imagen='$data', tipo_imagen='$tipo' WHERE usuario='$id'";
            $resultado = $conexion->query($query) or die (mysqli_error($conexion));
            $success = "Se ha actualizado tu foto correctamente.";

        }else{

            // Insertamos en la base de datos si no existe foto
            $query = "INSERT INTO imagenes (imagen, tipo_imagen, usuario) VALUES ('$data', '$tipo', '$id')";
            $resultado = $conexion->query($query) or die (mysqli_error($conexion));
            $success = "Se ha subido tu foto correctamente.";

        }

    }else{

        //En dado caso de que el usuario ingrese otro tipo de dato o muy grande se regresa esto.
        $fail = "Formato de archivo no permitido o excede el tamaño límite de $limite_kb Kbytes.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil</title>
  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/sesion.css" type="text/css">
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="css/style-menu.css" type="text/css">
</head>

<body>

    <div class="todo">

        <div id="cabecera">
        <//img src="images/swirl.png" width="1188" id="img1">
        </div>

        <div id="contenido">
        <?php include'navbar.php'; ?>

        <form class="formulario input-group" action="almacenar_foto.php" method="POST" enctype="multipart/form-data">
            <?php
            if(isset($fail)){
                echo "$fail";
            }else{
                echo"$success";
                echo"<br><a class='btn btn-outline-info' href='sesion.php'>Volver a la pagina principal</a>";
            }
            ?>
            <br><a class='btn' href='subir-imagen.php'>Subir otra foto</a>
        </form>

        </div>
    </div>

</body>

</html>
