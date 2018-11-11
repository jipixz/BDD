<?php
    session_start();
    //$usuario_id = "SELECT id_usuario FROM usuarios WHERE "
    $id = $_SESSION['matricula'];
    //$id = $_GET['nombre'];
    //echo $id;
?>

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil</title>
  </style>
  <link rel="stylesheet" href="css/style-menu.css" type="text/css">
  <!--<link rel="stylesheet" href="css/style.css">-->
  <link rel="stylesheet" href="css/sesion.css" type="text/css">
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div class="todo">
    <div id="cabecera">
    <//img src="images/swirl.png" width="1188" id="img1">
    </div>
    <div id="contenido">
      <?php include'navbar.php';?>
      <?php

        include'conexion2.php';
        #Extracción de datos de la base de datos

        if(!isset($id)){
            echo 'Nombre no encontrado en la base de datos';
        }else{
            #Comienza la extraccion de datos
            $query = "SELECT nombre, apellidos, correo, matricula, celular, us.estatus
            FROM usuarios
            LEFT JOIN estatus_usuario us
            ON usuarios.estatus = us.id_estatus_usuario
            WHERE matricula = '".$id."'";
            $usuario = $conexion->query($query) or die (mysqli_error($conexion));
            while($resultado = $usuario->fetch_assoc()){

                ?>

                <form class='formulario'>
                  <div class="col-sm-4">
                    <img class="img-fluid d-block foto" src="obtener_foto.php" height="200px" width="200px"/>
                    <div class="col-sm-12 text-center">
                      <a class="btn btn-outline-primary space" href="subir-imagen.php">Cambiar foto de perfil</a>
                      <a class="btn btn-outline-primary space" href="cambio_datos.php">Modificar datos</a>
                    </div>
                  </div>
                  <div class='input-group col-sm-8'>
                  <h1 align="center" >Información</h1>
                <?php

                echo "<label class='control-label col-sm-8' for='nombre'>Nombre:</label>";
                echo "<div class='col-sm-8'><p class='form-control-static'><span>"; echo $resultado['nombre']; echo "</span></p>";
                echo "</div>";
                echo "</span>";

                echo "<label class='control-label col-sm-8' for='nombre'>Apellidos:</label>";
                echo "<div class='col-sm-8'><p class='form-control-static'>"; echo $resultado['apellidos']; echo "</p>";
                echo "</div>";

                echo "<label class='control-label col-sm-8' for='nombre'>Correo:</label>";
                echo "<div class='col-sm-8'><p class='form-control-static '>"; echo $resultado['correo']; echo "</p>";
                echo "</div>";

                echo "<label class='control-label col-sm-8' for='nombre'>Matrícula:</label>";
                echo "<div class='col-sm-8'><p class='form-control-static'>"; echo $resultado['matricula']; echo "</p>";
                echo "</div>";

                echo "<label class='control-label col-sm-8' for='nombre'>Celular:</label>";
                echo "<div class='col-sm-8'><p class='form-control-static'>"; echo $resultado['celular']; echo "</p>";
                echo "</div>";

                echo "<label class='control-label col-sm-8' for='nombre'>Estatus:</label>";
                echo "<div class='col-sm-8'><p class='form-control-static'>"; echo $resultado['estatus']; echo "</p>";
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
