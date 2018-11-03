<?php
	session_start();
	ConsultarUsuario($_POST['inputUsuario'], $_POST['inputPassword']);
	function ConsultarUsuario($nombre, $password){

		include'conexion2.php';
		$sentencia="SELECT * FROM usuarios WHERE matricula='".$nombre."' AND password=BINARY'".$password."' AND estatus='1'  ";
		$resultado=$conexion->query($sentencia) or die ("Error al comprobar usuario: ".mysqli_error($conexion));
		$count = mysqli_num_rows($resultado); //Numero de filas del resultado de la consulta
		if($count > 0){ //si la variable count es mayor a 0

			$_SESSION['nombre']=$nombre;
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
	}
?>