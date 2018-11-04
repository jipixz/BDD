<?php

	EliminarUsuario($_GET['no']);

	function EliminarUsuario($id)
	{
		include 'conexion2.php';
		$sentencia="DELETE FROM usuarios WHERE id_usuario='".$id."' ";
		$conexion->query($sentencia) or die ("Error al eliminar usuario: ".mysqli_error());
	}

	echo '<script>';
		echo 'alert("Usuario eliminado");';
		echo 'window.location.href="usuarios.php";';
	echo '</script>';
?>
