<?php
	NuevoUsuario($_POST['nom'], $_POST['clav']);
  //NuevoUsuario($_POST['nom'], $_POST['usr'], $_POST['pass'], $_POST['tipo']);

	function NuevoUsuario($nombre, $clave)
	{
		include 'conexion2.php';
		$sentencia="INSERT INTO asignaturas (nombre, clave, id_estatus) VALUES ('".$nombre."', '".$clave."', 'ACTIVO' )";
		$conexion->query($sentencia) or die ("Error al crear usuario: ".mysqli_error($conexion));



		echo '<script>';
			//echo 'alert("Usuario creado exitosamente!!");';
			echo 'window.location.href="materias.php";';
		echo '</script>';

	}
?>
