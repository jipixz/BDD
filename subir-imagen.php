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
  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/image_preview.js"></script>
  <link rel="stylesheet" href="css/style-menu.css" type="text/css">
  <link rel="stylesheet" href="css/sesion.css" type="text/css">
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>

<body>
  <div class="todo">

    <div id="cabecera">
      <img src="images/swirl.png" width="1188" id="img1">
    </div>

    <div id="contenido">
        <?php include'navbar.php'; ?>

        <form class="formulario input-group" action="almacenar_foto.php" method="POST" enctype="multipart/form-data">

            <label for="imagen">Imagen:</label>

            <div class="input-group image-preview">
              <input type="text" class="form-control image-preview-filename" disabled="disabled">
              <span class="input-group-btn">
                <button type="button" class="btn btn-defauly image-preview-clear" style="display:none;">
                  <span class="glyphicon glyphicon-remove"></span>Clear
                </button>
                <div class="btn btn-default image-preview-input">
                  <span class="glyphicon glyphicon-folder-open"></span>
                  <span class="image-preview-input-title">Browse</span>
                  <input type="file" name="imagen" id="imagen" />
                </div>
              </span>
            </div>

            <input class="btn btn-primary subir-imagen " type="submit" name="subir" value="Subir Imagen"/>
  
        </form>

    </div>

  </div>
          
</body>

</html>