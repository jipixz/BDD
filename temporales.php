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
    <title>Historial solicitud temporal</title>
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
         <h1 align="center">Historial solicitud temporal</h1>

        <div style="margin: auto; width: 250px; border-collapse: separate; border-spacing: 5px 5px;">



    <p align="center" >Seleccione el Historial solicitud temporal:</p>
    <form>
      <select class="form-group" name="laboratorio">
        <option value="0">Laboratorio:</option>
        <div class="caja">
        <?php
          $query = $mysqli -> query ("SELECT * FROM laboratorio ");
          while ($tipos_user = mysqli_fetch_array($query)) {
            echo '<option value="'.$tipos_user[id_laboratorio].'">'.$tipos_user[laboratorio].'</option>';
          }
        ?>
      Fecha Inicio
      <input class="form-control" type="date" name="fecha_inicio">
      Fecha Fin
      <input class="form-control" type="date" name="fecha_fin">
          <button type="submit" class="btn btn-success">Ver</button>
        </form>
        </div>
      </div>

    </div>

    <table class="table-striped table-bordered tabla">
      <thead>
        <tr>

          <th class="tabla">
            Laboratorio
          </th>
          <th class="tabla">
            Fecha inicio
          </th>
          <th class="tabla">
            Fecha fin
          </th>
          <th class="tabla">
            Hora inicio
          </th>
          <th class="tabla">
            Hora fin
          </th>
        </tr>
      </thead>
      <tbody>
         <?php

         if (isset($_GET["fecha_inicio"],$_GET["fecha_fin"],$_GET["laboratorio"])){
          $laboratorio=$_GET["laboratorio"];
          $inicio= $_GET["fecha_inicio"];
          $fin= $_GET["fecha_fin"];
          $sql= "SELECT laboratorio.laboratorio, reserva_laboratorio.fecha_inicio, reserva_laboratorio.fecha_fin, reserva_laboratorio.hora_inicio, reserva_laboratorio.hora_fin FROM laboratorio JOIN reserva_laboratorio
			WHERE reserva_laboratorio.id_tipo_solicitud=2 AND reserva_laboratorio.fecha_inicio>='".$inicio."' AND reserva_laboratorio.fecha_fin<='".$fin."' and laboratorio.id_laboratorio=reserva_laboratorio.id_laboratorio AND laboratorio.id_laboratorio=".$laboratorio;
          $query = $mysqli -> query ($sql);

          while ($usuarios = mysqli_fetch_array($query)) {
            echo"<tr>
            <td class='tabla'>".$usuarios[0]."</td>
            <td class='tabla'>".$usuarios[1]."
            <td class='tabla'>".$usuarios[2]."
            </td><td class='tabla'>".$usuarios[3]."</td>
            <td class='tabla'>".$usuarios[4]."</td></tr>";
      }
    }
        ?>


      </tbody>

  </body>

</html>
