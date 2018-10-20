<?php

	EliminarUsuario($_GET['usr']);

	function EliminarUsuario($id)
	{
		include 'conexion2.php';
		$sentencia="DELETE FROM asignaturas WHERE id_asignatura='".$id."' ";
		$conexion->query($sentencia) or die ("Error al Eliminar materia: ".mysqli_error());
	}

	echo '<script>';
		echo 'alert("Materia Eliminada!!");';
		echo 'window.location.href="materias.php";';
	echo '</script>';
?>
