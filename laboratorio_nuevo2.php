<?php
	NuevoUsuario($_POST['laboratorio'], $_POST['responsable']);
  //NuevoUsuario($_POST['nom'], $_POST['usr'], $_POST['pass'], $_POST['tipo']);

	function NuevoUsuario($laboratorio, $responsable)
	{
		include 'conexion2.php';
		$sentencia="INSERT INTO laboratorio (laboratorio, responsable_laboratorio) VALUES ('".$laboratorio."', '".$responsable."')";
		$conexion->query($sentencia) or die ("Error al crear usuario: ".mysqli_error($conexion));



		echo '<script>';
			//echo 'alert("Laboratorio creado exitosamente!!");';
			echo 'window.location.href="laboratorios.php";';
		echo '</script>';

	}
?>
