<?php

	EliminarUsuario($_GET['lab']);

	function EliminarUsuario($id)
	{
		include 'conexion2.php';
		$sentencia="DELETE FROM laboratorio WHERE id_laboratorio='".$id."' ";
		$conexion->query($sentencia) or die ("Error al eliminar usuario: ".mysqli_error());
	}

	echo '<script>';
		echo 'alert("Laboratorio eliminado");';
		echo 'window.location.href="laboratorios.php";';
	echo '</script>';
?>
