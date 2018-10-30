<?php
    session_start();
    $id = $_SESSION['nombre'];
?>
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subir imagen</title>
  </style>
  <link rel="stylesheet" href="css/style-menu.css" type="text/css">
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/sesion.css" type="text/css">
</head>

<body>
  <div class="todo">

    <div id="cabecera">
      <img src="images/swirl.png" width="1188" id="img1">
    </div>

    <div id="contenido">
        <?php include'navbar.php'; ?>

        <form action="almacenar_foto.php" method="POST" enctype="multipart/form-data">

            <label for="imagen">Imagen:</label>
            <input type="file" name="imagen" id="imagen" />
            <input type="submit" name="subir" value="Subir Imagen"/>
  
        </form>

    </div>
  </div>
</body>

</html>