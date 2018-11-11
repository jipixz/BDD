<?php
  session_start();
  if ($_SESSION['estatus'] != '1'){
    header('Location: index.php');
  }
  //$_SESSION['usuario'];

  include "conexion2.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Añadir Laboratorio</title>
  <style type="text/css">
    @import url("css/mycss.css");
  </style>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div class="todo">

    <div id="cabecera">
    <//img src="images/swirl.png" width="1188" id="img1">
    </div>

    <div id="contenido">
      <?php include'navbar.php'; ?>
      <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
        <span>
          <h1>Añadir Laboratorio</h1>
        </span>
        <form class="col-sm-4" action="añadir_laboratorio2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
          <div class="form-group">
            <label>Laboratorio:</label>
            <input type="text" name="laboratorio" id="laboratorio" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Responsable del Laboratorio:</label>
            <input type="text" name="responsable" id="responsable" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-success">Añadir</button>
        </form>
      </div>

    </div>

  </div>

</body>
</html>
