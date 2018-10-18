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
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>lista usuarios</title>
  </head>
  <body>
    <header>
      <div class="container">
        <h3>Usuarios</h3>
    </header>


<section>
  <table class="container2">
    <tr class="form">
      <th class="pas-basic">Nombre</th>
      <th class="pas-basic">Apellido</th>
      <th class="pas-basic">Correo</th>
      <th class="pas-basic">Matricula</th>
      <th class="pas-basic">Tipo de usuario</th>


    </tr>
    <?php

        $query = "SELECT usuarios.nombre, usuarios.apellidos, usuarios.correo, usuarios.matricula, tipo_de_usuario.tipo_de_usuario
                  FROM usuarios usuarios
                  INNER JOIN tipo_de_usuario tipo_de_usuario ON usuarios.id_tipo_de_usuario = tipo_de_usuario.id_tipo_de_usuario";
        $consulta=$conexion->query($query)
        while ($fila=$consulta->fetch(PDO::FETCH_ASSOC)) {
          echo '
          <tr>
          <td>'.$fila['nombre'].'</td>
          <td>'.$fila['apellidos'].'</td>
          <td>'.$fila['correo'].'</td>
          <td>'.$fila['matricula'].'</td>
          <td>'.$fila['tipo_de_usuario'].'</td>
          </tr>
          ';
        }


    ?>




  </table>
</section>
  </body>
</html>
