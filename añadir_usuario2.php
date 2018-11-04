<?php
	NuevoUsuario($_POST['nom'], $_POST['ape'], $_POST['cor'], $_POST['pas'], $_POST['mat'], $_POST['cel'], $_POST['tip'], $_POST['est']);
  //NuevoUsuario($_POST['nom'], $_POST['usr'], $_POST['pass'], $_POST['tipo']);

	function NuevoUsuario($nom, $ape, $cor, $pas, $mat, $cel, $tip, $est){
		include 'conexion2.php';
		$sentencia="INSERT INTO usuarios (nombre, apellidos, correo, password, matricula, celular, id_tipo_de_usuario, estatus, fotografia) 
        VALUES ('".$nom."', '".$ape."', '".$cor."','".$pas."','".$mat."','".$cel."','".$tip."','".$est."', '')";
		$conexion->query($sentencia) or die ("Error al crear usuario: ".mysqli_error($conexion));

		echo '<script>';
			//echo 'alert("Usuario creado exitosamente!!");';
			echo 'window.location.href="usuarios.php";';
		echo '</script>';

	}
?>