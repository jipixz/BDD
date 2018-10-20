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
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="todo">

  <div id="cabecera">
  	<img src="images/swirl.png" width="1188" id="img1">
  </div>

  <div id="contenido">
    <?php include'navbar.php'; ?>

  	<table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<thead>
  			<th>ID</th>
  			<th>Fecha Inicio</th>
  			<th>Fecha Fin</th>
  			<th>Hora Inicio</th>
        <th>Hora Fin</th>
        <th>Usuario</th>
        <th>Tipo de Solicitud</th>
        <th>Laboratorio</th>
        <th>Asigantura</th>
        <th>Estatus</th>
  			<th> <a href="nueva_reserva.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
  		</thead>


  		<?php
      include "conexion2.php";
      $sentencia="SELECT * FROM reserva_laboratorio";
      $resultado = $conexion->query($sentencia) or die (mysqli_error($conexion));
      while($filas=$resultado->fetch_assoc())
      {
        echo "<tr>";
          echo "<td>"; echo $filas['id_reserva_laboratorio']; echo "</td>";
          echo "<td>"; echo $filas['fecha_inicio']; echo "</td>";
          echo "<td>"; echo $filas['fecha_fin']; echo "</td>";
          echo "<td>"; echo $filas['hora_inicio']; echo "</td>";
          echo "<td>"; echo $filas['hora_fin']; echo "</td>";
          echo "<td>"; echo $filas['id_usuario']; echo "</td>";
          echo "<td>"; echo $filas['id_tipo_solicitud']; echo "</td>";
          echo "<td>"; echo $filas['id_laboratorio']; echo "</td>";
          echo "<td>"; echo $filas['id_asignatura']; echo "</td>";
          echo "<td>"; echo $filas['id_status']; echo "</td>";
          echo "<td>  <a href='modificar_reserva.php?no=".$filas['id_reserva_laboratorio']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
          echo "<td> <a href='eliminar_reserva.php?no=".$filas['id_reserva_laboratorio']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
        echo "</tr>";
      }

      ?>
  	</table>
  </div>


</div>


</body>
</html>
