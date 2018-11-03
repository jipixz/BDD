<?php

	ModificarUsuario($_POST['id_user'], $_POST['nom'], $_POST['clav'], $_POST['estatus']);

	function ModificarUsuario($id_asignatura, $nom, $clav, $estatus)
	{
		include 'conexion2.php';

		$sentecia="UPDATE asignaturas SET asignatura='".$nom."', clave='".$clav."', id_estatus='".$estatus."' WHERE id_asignatura='".$id_asignatura."' ";

		$conexion->query($sentecia) or die ("Error al actualizar datos de usuario: ".mysqli_error($conexion));

	}

	echo '<script>';
		echo 'alert("Datos actualizados con exito!!");';
		echo 'window.location.href="materias.php";';
	echo '</script>';
?>
