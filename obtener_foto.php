<?php
// Continúa la sesión
session_start();

//Se obtiene el nombre de quien esta en la sesion
$id = $_SESSION['nombre']; 

//Conexion a la base de datos
include'conexion2.php';

// Consulta de búsqueda de la imagen.
$query = "SELECT imagen, tipo_imagen FROM imagenes WHERE usuario='$id'";
$resultado = $conexion->query($query) or die (mysqli_error($conexion));
$datos = mysqli_fetch_assoc($resultado);

// Datos binarios de la imagen.
$imagen = $datos['imagen'];

// Mime Type de la imagen.
$tipo = $datos['tipo_imagen'];  

// Mandamos las cabeceras al navegador indicando el tipo de datos que vamos a enviar.
header("Content-type: $tipo");

// A continuación enviamos el contenido binario de la imagen.
echo $imagen;

?>