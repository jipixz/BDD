<?php session_start();

require 'admin/config.php';
require 'functions.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $matricula = $_POST['matricula'];
    $rol = $_POST['rol'];

    $errores = '';

    if (empty($nombre) || empty($apellido) || empty($usuario) || empty($password) || empty($matricula) || empty($rol)) {
      $errores .= '<li class="error">Relleno todos los campos</li>';
    }else {
      //validar Usuario no exista
      $conexion = conexion($bd_config);
      $statement = $conexion->prepare('SELECT * FROM usuarios WHERE correo = :correo LIMIT 1');
      $statement-> execute([
        ':correo' => $correo
      ]);
      $reultado = $statement->fetch();
      if ($resultado != false) {
        $errores .= '<li class="error">usuario existente</li>';
      }
    }

    if ($errores == '') {
      $conexion = conexion($bd_config);
    //  $statement = $conexion->prepare()
    }

}
require 'views/registro.view.php';



?>
