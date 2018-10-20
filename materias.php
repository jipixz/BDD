<?php
	session_start();
	//$_SESSION['usuario'];

	include "conexion2.php";


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
  			<th>Nombre</th>
  			<th>Clave</th>
  			<th>Status</th>
  			<th></th>
  			<th> <a href="añadir_materia.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
  		</thead>

      <?php
        $query="SELECT * FROM asignaturas";
        $resultado = $conexion->query($query) or die ("Error al consultar usuarios: ".mysqli_error($conexion));
        while ($filas=$resultado->fetch_assoc())
        {

      ?>
			  <tr>
			  	 <td> <?php echo $filas['nombre']?>  </td>
			     <td> <?php echo $filas['clave']?> </td>
			     <td> <?php echo $filas['id_estatus']?> </td>
			     <td>  <a href='editar_materia.php?usr=<?php echo $filas['id_asignatura'] ?> '> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>
			     <td> <a href='eliminar_materia.php?usr= <?php echo $filas['id_asignatura'] ?> '> <button type='button' class='btn btn-danger'>Eliminar</button></a> </td>
			  </tr>
      <?php
        }
      ?>

  	</table>
  </div>


</div>


</body>
</html>
