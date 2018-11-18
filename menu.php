<?php
  session_start();
  if ($_SESSION['estatus'] != '1'){
    header('Location: index.php');
  }
?>
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <link rel="stylesheet" href="css/style-menu.css" type="text/css">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <!--Se agrega el css de los datatables-->
  <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css">
</head>

<body>
  <div class="todo">
    <div id="contenido">
      <?php include'navbar.php'; ?>
      <div class="row">
        <div class="col-sm-11 col-centered">

          <div class="table-responsive-sm">
            <table id="tabla" class="table table-striped table-bordered table-hover table-condensed">
              <h1 align="center">Reservas</h1>
              <thead>
                <tr>
                  <th class="tabla">ID</th>
                  <th class="tabla">Fecha Inicio</th>
                  <th class="tabla">Fecha Fin</th>
                  <th class="tabla">Hora Inicio</th>
                  <th class="tabla">Hora Fin</th>
                  <th class="tabla">Usuario</th>
                  <th class="tabla">Tipo de Solicitud</th>
                  <th class="tabla">Laboratorio</th>
                  <th class="tabla">Asignatura</th>
                  <th class="tabla">Estatus</th>
                  <th class="tabla"> <a href="nueva_reserva.php"> <button type="button" class="btn btn-info">Nuevo</button> </a>
                  </th>
                  <th></th>
                </tr>
              </thead>
              <?php
                include "conexion2.php";
                $sentencia="SELECT us.id_reserva_laboratorio, us.fecha_inicio, us.fecha_fin, us.hora_inicio, us.hora_fin, usu.nombre, us.id_usuario, tip.tipo_solicitud,
                lab.laboratorio, asi.asignatura, us.id_status, sol.estatus_solicitud
                FROM reserva_laboratorio us
                LEFT JOIN tipo_solicitud tip ON us.id_tipo_solicitud = tip.id_tipo_solicitud
                LEFT JOIN usuarios usu ON us.id_usuario = usu.id_usuario
                LEFT JOIN laboratorio lab ON us.id_laboratorio = lab.id_laboratorio
                LEFT JOIN asignaturas asi ON us.id_asignatura = asi.id_asignatura
                LEFT JOIN estatus_solicitud sol ON us.id_status = sol.id_estatus_solicitud";
                //$sentencia="SELECT * FROM reserva_laboratorio";
                $resultado = $conexion->query($sentencia) or die (mysqli_error($conexion));
                while($filas=$resultado->fetch_assoc()){
                  echo "<tr>";
                    echo "<td class='tabla'>"; echo $filas['id_reserva_laboratorio']; echo "</td>";
                    echo "<td class='tabla'>"; echo $filas['fecha_inicio']; echo "</td>";
                    echo "<td class='tabla'>"; echo $filas['fecha_fin']; echo "</td>";
                    echo "<td class='tabla'>"; echo $filas['hora_inicio']; echo "</td>";
                    echo "<td class='tabla'>"; echo $filas['hora_fin']; echo "</td>";
                    echo "<td class='tabla'>"; echo $filas['nombre']; echo "</td>";
                    echo "<td class='tabla'>"; echo $filas['tipo_solicitud']; echo "</td>";
                    echo "<td class='tabla'>"; echo $filas['laboratorio']; echo "</td>";
                    echo "<td class='tabla'>"; echo $filas['asignatura']; echo "</td>";
                    echo "<td class='tabla'>"; echo $filas['estatus_solicitud']; echo "</td>";
                    echo "<td class='tabla'>  <a href='modificar_reserva.php?no=".$filas['id_reserva_laboratorio']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
                    echo "<td class='tabla'> <a href='eliminar_reserva.php?no=".$filas['id_reserva_laboratorio']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
                  echo "</tr>";
                }
              ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Se agrega jQuery-->
  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <!--Se agrega el JS de los datatables-->
  <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
  <!--Se agrega el JS de los datatables de bootstrap-->
  <script type="text/javascript" src="js/dataTables.bootstrap4.min.js"></script>
  <!--Script que invoca una función para que funcione el datatable-->
  <script type="text/javascript">
    $(document).ready(function () {
      /*Aquí se coloca el ID de la tabla a la que se le quiere aplicar el estilo, previamente se identificó el id en la etiqueta table*/
      $('#tabla').DataTable({
        "columnDefs": [
          {
            /*Se ordena que no aparezcan los iconos de ordenar en las columnas 10 y 11, teniendo en cuenta que la primera que es ID cuenta como la columna número 0*/
            "orderable": false, 
            "targets": [ 10, 11]
          }
        ]
      });
    });
  </script>
</body>

</html>