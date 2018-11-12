<?php
  session_start();
  if ($_SESSION['estatus'] != '1'){
      header('Location: index.php');
  }
	//$_SESSION['usuario'];
	include "conexion2.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="X-UA-Compatible" content="es_ES">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Usuarios</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style-menu.css" type="text/css">
</head>
<body>
<div class="todo">

  <div id="cabecera">
  <//img src="images/swirld.png" width="1188" id="img1">
  </div>

  <div id="contenido">
    <?php include'navbar.php'; ?>
		<h1 align="center" >Laboratorios</h1>
  	<table class="table-striped table-bordered tabla">
  		<thead>
  			<th class="tabla">Id Laboratorio</th>
  			<th class="tabla">Nombre</th>
  			<th class="tabla">Responsable</th>
				<th class="tabla"></th>
  			<th class="tabla"> <a href="añadir_laboratorio.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
  		</thead>

      <?php
				include "conexion2.php";
				$query="SELECT * FROM laboratorio";
        //$query="SELECT * FROM asignaturas";
        $resultado = $conexion->query($query) or die ("Error al consultar usuarios: ".mysqli_error($conexion));
        while ($filas=$resultado->fetch_assoc())
				{
	        echo "<tr>";
	          echo "<td class='tabla'>"; echo $filas['id_laboratorio']; echo "</td>";
	          echo "<td class='tabla'>"; echo $filas['laboratorio']; echo "</td>";
	          echo "<td class='tabla'>"; echo $filas['responsable_laboratorio']; echo "</td>";
	          echo "<td class='tabla'>  <a href='editar_laboratorio.php?lab=".$filas['id_laboratorio']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
	          echo "<td class='tabla'> <a href='eliminar_laboratorio.php?lab=".$filas['id_laboratorio']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
						echo "<td class='tabla'> <a href='ver_reservas.php?lab=".$filas['id_laboratorio']."''><button type='button' class='btn btn-flat-green'>Ver Reservas</button></a> </td>";
	        echo "</tr>";
	      }
      ?>

  	</table>
  </div>


</div>


</body>
</html>
