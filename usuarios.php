<?php
	session_start();
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
<body >
<div class="todo">

  <div id="cabecera">
	<//img src="images/swirl.png" width="1188" id="img1">
  </div>
    <?php include'navbar.php'; ?>
		<h1 align="center" >Usuarios</h1>
  <div id="contenido">
  	<table class="table-striped table-bordered tabla">
  		<thead>
  			<th class="tabla">Id Usuario</th>
  			<th class="tabla">Nombre</th>
  			<th class="tabla">Apellido</th>
  			<th class="tabla">Correo</th>
        <th class="tabla">Pass</th>
        <th class="tabla">Matricula</th>
        <th class="tabla">Tipo de Usuario</th>
  			<th class="tabla"> <a href="añadir_usuario.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
  		</thead>


  		<?php
      include "conexion2.php";
      $sentencia="SELECT us.id_usuario, us.nombre, us.apellidos, us.correo, us.password, us.matricula, tu.tipo_de_usuario FROM usuarios us LEFT JOIN tipo_de_usuario tu ON us.id_tipo_de_usuario = tu.id_tipo_de_usuario";
      $resultado = $conexion->query($sentencia) or die (mysqli_error($conexion));
      while($filas=$resultado->fetch_assoc())
      {
        echo "<tr>";
          echo "<td class='tabla'>"; echo $filas['id_usuario']; echo "</td>";
          echo "<td class='tabla'>"; echo $filas['nombre']; echo "</td>";
          echo "<td class='tabla'>"; echo $filas['apellidos']; echo "</td>";
          echo "<td class='tabla'>"; echo $filas['correo']; echo "</td>";
          echo "<td class='tabla'>"; echo $filas['password']; echo "</td>";
          echo "<td class='tabla'>"; echo $filas['matricula']; echo "</td>";
          echo "<td class='tabla'>"; echo $filas['tipo_de_usuario']; echo "</td>";
          echo "<td class='tabla'>  <a href='editar_usuario.php?no=".$filas['id_usuario']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
          echo "<td class='tabla'> <a href='eliminar_usuario.php?no=".$filas['id_usuario']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
        echo "</tr>";
      }

      ?>
  	</table>


</div>
</div>
  </div>

</div>

</body>
</html>
