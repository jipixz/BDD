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
<title>Alta de Producto</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="todo">

  <div id="cabecera">
    <img src="images/swirl.png" width="1188" id="img1">
  </div>

  <div id="contenido">
  <?php include'navbar.php'; ?>
    <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
       <span> <h1>Nueva Materia</h1> </span>
      <br>

    <form action="añadir_materia2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">

           <div>

          <div>
            <div class="row">
              <div class="col-xs-3">
              <label>Nombre:</label>
              <input type="text" name="nom" id="nom" class="form-control" >
              </div>
            </div>

            <div class="row">
              <div class="col-xs-3">
              <label>Clave:</label>
              <input type="text" name="clav" id="usr" class="form-control" >
              </div>
            </div>


          </div>

          <br>
          <button type="submit" class="btn btn-success">Añadir</button>
         </form>
    </div>

  </div>

</div>


</body>
</html>
