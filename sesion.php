<?php
    session_start();
    $id = $_SESSION['nombre']; 
    #$id = $_GET['nombre'];
?>

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil</title>
  </style>
  <link rel="stylesheet" href="css/style-menu.css" type="text/css">
  <link rel="stylesheet" href="css/sesion.css" type="text/css">
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div class="todo">
    <div id="cabecera">
      <img src="images/swirl.png" width="1188" id="img1">
    </div>
    <div id="contenido">
      <?php 
        include'navbar.php'; 
        include'conexion2.php';
        #Extracción de datos de la base de datos

        if(!isset($id)){
            echo 'Nombre no encontrado en la base de datos';
        }else{
            #Comienza la extraccion de datos
            $query = "SELECT nombre, apellidos, correo, matricula, celular, estatus FROM usuarios WHERE nombre = '$id'";
            $usuario = $conexion->query($query) or die (mysqli_error($conexion));
            while($resultado = $usuario->fetch_assoc()){
                
                ?>

                <form class='form-horizontal'>
                    <div class='input-group texto '>

                <?php

                echo "<label class='control-label col-xs-4' for='nombre'>Nombre:</label>";
                echo "<div class='col-xs-8'><p class='form-control-static'>"; echo $resultado['nombre']; echo "</p>";
                echo "</div>";
            
                echo "<label class='control-label col-xs-4' for='nombre'>Apellidos:</label>";
                echo "<div class='col-xs-8'><p class='form-control-static'>"; echo $resultado['apellidos']; echo "</p>";
                echo "</div>";

                echo "<label class='control-label col-xs-4' for='nombre'>Correo:</label>";
                echo "<div class='col-xs-8'><p class='form-control-static'>"; echo $resultado['correo']; echo "</p>";
                echo "</div>";

                echo "<label class='control-label col-xs-4' for='nombre'>Matrícula:</label>";
                echo "<div class='col-xs-8'><p class='form-control-static'>"; echo $resultado['matricula']; echo "</p>";
                echo "</div>";

                echo "<label class='control-label col-xs-4' for='nombre'>Celular:</label>";
                echo "<div class='col-xs-8'><p class='form-control-static'>"; echo $resultado['celular']; echo "</p>";
                echo "</div>";

                echo "<label class='control-label col-xs-4' for='nombre'>Estatus:</label>";
                echo "<div class='col-xs-8'><p class='form-control-static'>"; echo $resultado['estatus']; echo "</p>";
                echo "</div>";

                ?>

                    </div>
                </form>
            <?php
            }

        }
      ?>
    </div>
  </div>
</body>

</html>