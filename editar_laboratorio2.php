<?php

	ModificarDatos($_POST['id_laboratorio'], $_POST['laboratorio'], $_POST['responsable']);

	function ModificarDatos($id_laboratorio, $laboratorio, $responsable){
		include 'conexion2.php';

		$sentecia="UPDATE laboratorio
        SET id_laboratorio='".$id_laboratorio."', laboratorio='".$laboratorio."', responsable_laboratorio='".$responsable."'
        WHERE id_laboratorio='".$id_laboratorio."' ";

		$conexion->query($sentecia) or die ("Error al actualizar datos de usuario: ".mysqli_error($conexion));

	}

	echo '<script>';
		echo 'alert("Datos actualizados con exito");';
		echo 'window.location.href="laboratorios.php";';
	echo '</script>';
?>
