<?php

	ModificarDatos($_POST['id_user'], $_POST['nom'], $_POST['ape'], $_POST['cor'], $_POST['pass'], $_POST['mat'], $_POST['tip'], $_POST['cel'], $_POST['est']);

	function ModificarDatos($id_user, $nom, $ape, $cor, $pass, $mat, $tip, $cel, $est){
		include 'conexion2.php';

		$sentecia="UPDATE usuarios 
        SET id_usuario='".$id_user."', nombre='".$nom."', apellidos='".$ape."', correo='".$cor."', password='".$pass."', matricula='".$mat."', celular='".$cel."', id_tipo_de_usuario='".$tip."', estatus='".$est."' 
        WHERE id_usuario='".$id_user."' ";

		$conexion->query($sentecia) or die ("Error al actualizar datos de usuario: ".mysqli_error($conexion));

	}

	echo '<script>';
		echo 'alert("Datos actualizados con exito");';
		echo 'window.location.href="usuarios.php";';
	echo '</script>';
?>