<?php
    session_start();
    if ($_SESSION['estatus'] != '1'){
        header('Location: index.php');
    }

  if ($_SESSION['estatus'] != 1){

  }elseif ($_SESSION['id_tipo_de_usuario'] != 3) {
    echo '<script>';
    echo 'alert("¡Comprueba tus datos!");';
    echo 'window.location.href="index.php";';
    echo '</script>';
  }
?>


<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  </style>
  <link rel="stylesheet" href="css/style-menu.css" type="text/css">
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div class="todo">
    <div id="cabecera">
    <//img src="images/swirl.png" width="1188" id="img1">
    </div>
    <div id="contenido">
      <?php include'navbar.php'; ?>

      <table class="table-striped table-bordered tabla">
        <h1 align="center" >Reservas</h1>
        <thead>
          <th class="tabla">ID</th>
          <th class="tabla">Fecha Inicio</th>
          <th class="tabla">Fecha Fin</th>
          <th class="tabla">Hora Inicio</th>
          <th class="tabla">Hora Fin</th>
          <th class="tabla">Usuario</th>
          <th class="tabla">Tipo de Solicitud</th>
          <th class="tabla">Laboratorio</th>
          <th class="tabla">Asignatura</th>
          <th class="tabla">Estatus</th>
          <th class="tabla"> <a href="nueva_reserva.php"> <button type="button" class="btn btn-info">Nuevo</button> </a>
          </th>
        </thead>
        <?php
      include "conexion2.php";
      $sentencia="SELECT us.id_reserva_laboratorio, us.fecha_inicio, us.fecha_fin, us.hora_inicio, us.hora_fin, usu.nombre, us.id_usuario, tip.tipo_solicitud,
      lab.laboratorio, asi.asignatura, us.id_status, sol.estatus_solicitud
      FROM reserva_laboratorio us
      LEFT JOIN tipo_solicitud tip ON us.id_tipo_solicitud = tip.id_tipo_solicitud
      LEFT JOIN usuarios usu ON us.id_usuario = usu.id_usuario
      LEFT JOIN laboratorio lab ON us.id_laboratorio = lab.id_laboratorio
      LEFT JOIN asignaturas asi ON us.id_asignatura = asi.id_asignatura
      LEFT JOIN estatus_solicitud sol ON us.id_status = sol.id_estatus_solicitud";
      //$sentencia="SELECT * FROM reserva_laboratorio";
      $resultado = $conexion->query($sentencia) or die (mysqli_error($conexion));
      while($filas=$resultado->fetch_assoc())
      {
        echo "<tr>";
          echo "<td class='tabla'>"; echo $filas['id_reserva_laboratorio']; echo "</td>";
          echo "<td class='tabla'>"; echo $filas['fecha_inicio']; echo "</td>";
          echo "<td class='tabla'>"; echo $filas['fecha_fin']; echo "</td>";
          echo "<td class='tabla'>"; echo $filas['hora_inicio']; echo "</td>";
          echo "<td class='tabla'>"; echo $filas['hora_fin']; echo "</td>";
          echo "<td class='tabla'>"; echo $filas['nombre']; echo "</td>";
          echo "<td class='tabla'>"; echo $filas['tipo_solicitud']; echo "</td>";
          echo "<td class='tabla'>"; echo $filas['laboratorio']; echo "</td>";
          echo "<td class='tabla'>"; echo $filas['asignatura']; echo "</td>";
          echo "<td class='tabla'>"; echo $filas['estatus_solicitud']; echo "</td>";
          echo "<td class='tabla'>  <a href='modificar_reserva.php?no=".$filas['id_reserva_laboratorio']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
          echo "<td class='tabla'> <a href='eliminar_reserva.php?no=".$filas['id_reserva_laboratorio']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
        echo "</tr>";
      }
      ?>
      </table>
    </div>
  </div>
</body>

</html>
