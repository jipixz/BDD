<?php
  session_start();
  if ($_SESSION['estatus'] != '1'){
      header('Location: index.php');
  }
  $mysqli = new mysqli('localhost', 'root', '', 'reserva_laboratorio');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="X-UA-Compatible" content="es_ES">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <style type="text/css">
    @import url("css/mycss.css");
    </style>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-menu.css" type="text/css">
  </head>
  <body>

      <div id="contenido">
        <?php include'navbar.php'; ?>
        <div style="margin: auto; width: 250px; border-collapse: separate; border-spacing: 5px 5px;">
				<h1 align="center">Laboratorios</h1>
				
      <select>
        <option value="0">Estatus Laboratorio:</option>
        <div class="caja">
        <?php
          $query = $mysqli -> query ("SELECT * FROM estatus_solicitud");
          while ($laboratorio = mysqli_fetch_array($query)) {
            echo '<option value="'.$laboratorio[id_estatus_solicitud].'">'.$laboratorio[estatus_solicitud].'</option>';
          }
        ?>
      </select>
          <button type="submit" class="btn btn-success">Ver</button>
        </div>
      </div>
    </div>


  </body>
</html>
