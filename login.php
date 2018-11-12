<?php
	session_start();
	include 'conexion2.php';
	$matricula = mysqli_real_escape_string($conexion,$_POST['inputUsuario']);
	$password = mysqli_real_escape_string($conexion,$_POST['inputPassword']);

	$consulta=ValidarUsuario($matricula,$password);

	function ValidarUsuario ($matricula, $password){
	include 'conexion2.php';

		$sentencia="SELECT *
					FROM usuarios
					WHERE matricula='".$matricula."'
					AND password=BINARY'".$password."'
					AND estatus='1'  ";

		$resultado=$conexion->query($sentencia) or die ("Error al comprobar usuario: ".mysqli_error($conexion));
		$filas=$resultado->fetch_assoc();
		return [
      		$filas['nombre'],
      		$filas['password'],
      		$filas['id_tipo_de_usuario'],
			$filas['estatus'],
			$filas['matricula'],

    	];
	}
	if($nombre=$consulta[0] && $password=$consulta[1]){

			$_SESSION['nombre']=$consulta[0];
			$_SESSION['id_tipo_de_usuario']=$consulta[2];
			$_SESSION['estatus']=$consulta[3];
			$_SESSION['matricula']=$consulta[4];


			echo '<script>';
			//echo 'alert("Bienvenido!!");';
			echo 'window.location.href="menu.php";';
			echo '</script>';

		}else{

			echo '<script>';
			echo 'alert("Datos de acceso incorrectos");';
			echo 'window.location.href="index.php";';
			echo '</script>';

		}
?>
