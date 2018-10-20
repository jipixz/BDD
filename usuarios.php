<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Usuarios</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body >
<div class="todo">

  <div id="cabecera">
  	<img src="images/swirl.png" width="1188" id="img1">
  </div>
    <?php include'navbar.php'; ?>
  <div id="contenido">
  	<table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<thead>
  			<th>Id Usuario</th>
  			<th>Nombre</th>
  			<th>Apellido</th>
  			<th>Correo</th>
        <th>Pass</th>
        <th>Matricula</th>
        <th>Tipo de Usuario</th>
  			<th> <a href="añadir_usuario.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
  		</thead>


  		<?php
      include "conexion2.php";
      $sentencia="SELECT * FROM usuarios";
      $resultado = $conexion->query($sentencia) or die (mysqli_error($conexion));
      while($filas=$resultado->fetch_assoc())
      {
        echo "<tr>";
          echo "<td>"; echo $filas['id_usuario']; echo "</td>";
          echo "<td>"; echo $filas['nombre']; echo "</td>";
          echo "<td>"; echo $filas['apellidos']; echo "</td>";
          echo "<td>"; echo $filas['correo']; echo "</td>";
          echo "<td>"; echo $filas['password']; echo "</td>";
          echo "<td>"; echo $filas['matricula']; echo "</td>";
          echo "<td>"; echo $filas['id_tipo_de_usuario']; echo "</td>";
          echo "<td>  <a href='editar_usuario.php?no=".$filas['id_usuario']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
          echo "<td> <a href='eliminar_usuario.php?no=".$filas['id_usuario']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
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
