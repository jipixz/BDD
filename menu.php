<?php
  session_start();

  if ($_SESSION['nombre'] != 'root')
  {
    echo '<script>';
        echo 'alert("No eres Admin!!");';
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
  	<img src="images/swirl.png" width="1188" id="img1">
  </div>
  <div id="contenido">
    <?php include'navbar.php'; ?>
  	<table class="table-striped table-bordered tabla">
  		<thead>
  			<th class="tabla">ID</th>
  			<th class="tabla">Fecha Inicio</th>
  			<th class="tabla">Fecha Fin</th>
  			<th class="tabla">Hora Inicio</th>
        <th class="tabla">Hora Fin</th>
        <th class="tabla">Usuario</th>
        <th class="tabla">Tipo de Solicitud</th>
        <th class="tabla">Laboratorio</th>
        <th class="tabla">Asigantura</th>
        <th class="tabla">Estatus</th>
  			<th class="tabla"> <a href="nueva_reserva.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
  		</thead>
  		<?php
      include "conexion2.php";
      $sentencia="SELECT * FROM reserva_laboratorio";
      $resultado = $conexion->query($sentencia) or die (mysqli_error($conexion));
      while($filas=$resultado->fetch_assoc())
      {
        echo "<tr>";
          echo "<td class='tabla'>"; echo $filas['id_reserva_laboratorio']; echo "</td>";
          echo "<td class='tabla'>"; echo $filas['fecha_inicio']; echo "</td>";
          echo "<td class='tabla'>"; echo $filas['fecha_fin']; echo "</td>";
          echo "<td class='tabla'>"; echo $filas['hora_inicio']; echo "</td>";
          echo "<td class='tabla'>"; echo $filas['hora_fin']; echo "</td>";
          echo "<td class='tabla'>"; echo $filas['id_usuario']; echo "</td>";
          echo "<td class='tabla'>"; echo $filas['id_tipo_solicitud']; echo "</td>";
          echo "<td class='tabla'>"; echo $filas['id_laboratorio']; echo "</td>";
          echo "<td class='tabla'>"; echo $filas['id_asignatura']; echo "</td>";
          echo "<td class='tabla'>"; echo $filas['id_status']; echo "</td>";
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
