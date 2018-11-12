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
    <title>Tipos de usuario</title>
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
  <h1 align="center">Tipos de usuario</h1>
    <div style="margin: auto; width: 250px; border-collapse: separate; border-spacing: 5px 5px;">
      <form class="col-sm-12">
        <label>Seleccione tipo de usuario:</label>
        <select class="form-control" name="tipo_user">
          <option value="0">Tipos de usuario:</option>
          <div class="caja">
          <?php
            $query = $mysqli -> query ("SELECT * FROM tipo_de_usuario");
            while ($tipos_user = mysqli_fetch_array($query)) {
              echo '<option value="'.$tipos_user[id_tipo_de_usuario].'">'.$tipos_user[tipo_de_usuario].'</option>';
            }
          ?>
        </select>
        <button type="submit" class="btn btn-success btn-us">Ver</button>
      </form>
    </div>
    <div class="row col-sm-12">
      <table class="table-striped table-bordered tabla">
        <thead>
          <tr>
            <th class="tabla">
              Id Usuario
            </th>
            <th class="tabla">
              Matricula
            </th>
            <th class="tabla">
              Nombre
            </th>
             <th class="tabla">
              Apellido
            </th>
            <th class="tabla">
              Correo
            </th>
          </tr>
        </thead>
        <tbody>
           <?php

           if (isset($_GET["tipo_user"])){
            $tipo= $_GET["tipo_user"];

            $query = $mysqli -> query ("SELECT * FROM usuarios WHERE id_tipo_de_usuario=".$tipo);
            while ($usuarios = mysqli_fetch_array($query)) {
              echo"<tr>
              <td class='tabla'>".$usuarios[0]."</td>
              <td class='tabla'>".$usuarios[5]."
              <td class='tabla'>".$usuarios[1]."
              <td class='tabla'>".$usuarios[2]."
              </td><td class='tabla'>".$usuarios[3]."</td></tr>";
        }
      }
          ?>


        </tbody>
      </div>
    </div>
  </body>
</html>
