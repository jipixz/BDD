<?php
session_start();
$id = $_SESSION['nombre']; 

//Conexion a la base de datos
$conexion = new mysqli("localhost", "root", "", "reserva_laboratorio");
include'conexion2.php';


//Comprobamos si ha ocurrido un error.
if (!isset($_FILES["imagen"]) || $_FILES["imagen"]["error"] > 0){

    echo "Ha ocurrido un error.";

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
            echo "Se ha actualizado tu foto correctamente.";

        }else{

            // Insertamos en la base de datos si no existe foto
            $query = "INSERT INTO imagenes (imagen, tipo_imagen, usuario) VALUES ('$data', '$tipo', '$id')";
            $resultado = $conexion->query($query) or die (mysqli_error($conexion));
            echo "Se ha subido tu foto correctamente.";

        }

    }else{
        
        //En dado caso de que el usuario ingrese otro tipo de dato o muy grande se regresa esto.
        echo "Formato de archivo no permitido o excede el tamaño límite de $limite_kb Kbytes.";
    }
}
?>