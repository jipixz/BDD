<?php 
function conexion ($bd_config){

    try {
        //$variable = new PDO('mysql:host=localhost;dbname=reserva_laboratorio','root','');
        $conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['db_name'],$bd_config['user'],$bd_config['password']);
        return $conexion;
    } catch (PDOException $e){
        
        return false;

    }
 
}

function limpiardatos($datos){
    $datos = trim(datos); //evita los espacios para la inyeccion de codigo
    $datos = htmlspecialchars ($datos);
    $datos = filter_var($datos, FILTER_SANITIZE_STRING);
    
    return $datos;
}


?>

