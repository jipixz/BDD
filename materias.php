<?php
	session_start();
	//$_SESSION['usuario'];
	include "conexion2.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menu</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/style-menu.css" type="text/css">
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
  			<th class="tabla">Nombre</th>
  			<th class="tabla">Clave</th>
  			<th class="tabla">Status</th>
  			<th class="tabla"> <a href="añadir_materia.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
  		</thead>

      <?php
				$query="SELECT us.id_asignatura, us.asignatura, us.clave, tu.estatus_materia 
				FROM asignaturas us 
				LEFT JOIN estatus_materia tu ON us.id_estatus = tu.id_estatus_materia";
        //$query="SELECT * FROM asignaturas";
        $resultado = $conexion->query($query) or die ("Error al consultar usuarios: ".mysqli_error($conexion));
        while ($filas=$resultado->fetch_assoc())
        {

      ?>
			  <tr>
			  	 <td class='tabla'> <?php echo $filas['asignatura']?>  </td>
			     <td class='tabla'> <?php echo $filas['clave']?> </td>
			     <td class='tabla'> <?php echo $filas['estatus_materia']?> </td>
			     <td class='tabla'>  <a href='editar_materia.php?usr=<?php echo $filas['id_asignatura'] ?> '> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>
			     <td class='tabla'> <a href='eliminar_materia.php?usr= <?php echo $filas['id_asignatura'] ?> '> <button type='button' class='btn btn-danger'>Eliminar</button></a> </td>
			  </tr>
      <?php
        }
      ?>

  	</table>
  </div>


</div>


</body>
</html>
