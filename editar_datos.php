<?php

	ModificarDatos($_POST['id_user'], $_POST['nom'], $_POST['ape'], $_POST['corr'], $_POST['pass'], $_POST['mat'], $_POST['cel'], $_POST['est']);

	function ModificarDatos($id_user, $nom, $ape, $corr, $pass, $mat, $cel, $est){
		include 'conexion2.php';

		$sentecia="UPDATE usuarios
        SET nombre='".$nom."', apellidos='".$ape."', correo='".$corr."', password='".$pass."', matricula='".$mat."', celular='".$cel."'
        WHERE id_usuario='".$id_user."' ";

		$conexion->query($sentecia) or die ("Error al actualizar datos de usuario: ".mysqli_error($conexion));

	}

	echo '<script>';
		echo 'alert("Datos actualizados con exito!!");';
		echo 'window.location.href="sesion.php";';
	echo '</script>';
?>
