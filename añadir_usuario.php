<?php
  session_start();
  //$_SESSION['usuario'];

  include "conexion2.php";
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
            <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
                <h2>Añadir usuario</h2>
                <form class="col-sm-4" action="añadir_usuario2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input type="text" name="nom" id="nom" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Apellidos:</label>
                        <input type="text" name="ape" id="ape" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Correo:</label>
                        <input type="text" name="cor" id="cor" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="text" name="pas" id="pas" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Matricula:</label>
                        <input type="text" name="mat" id="mat" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Celular:</label>
                        <input type="text" name="cel" id="cel" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Tipo de usuario:</label>
                      <select name="tip" id="tip" class="form-control" required>
                        <option value="1">Administrador</option>
                        <option value="2">Becario</option>
                        <option value="3">Profesor</option>
                        <option value="4">Responsable</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Estatus:</label>
                      <select name="est" id="est" class="form-control" required>
                        <option value="1">Activo</option>
                        <option value="2">Inactivo</option>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
