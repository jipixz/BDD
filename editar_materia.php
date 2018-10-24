<?php
  //include 'conexion.php';

  $consulta=ConsultarUsuario($_GET['usr']);

  function ConsultarUsuario($id)
  {
    include 'conexion2.php'; //Se necesita el include dentro de la funcion para que no de error al intentar conectar con la base de datos
    $query="SELECT * FROM asignaturas WHERE id_asignatura='".$id."' ";
    $resultado= $conexion->query($query) or die ("Error al consultar usuario: ".mysqli_error($conexion) );

    $filas=$resultado->fetch_assoc();

    return [
      $filas['id_asignatura'],
      $filas['nombre'],
      $filas['clave'],
      $filas['id_estatus'],
    ];

  }

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Modificar Materia</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="bootstrap-fileinput-master/css/fileinput.css" rel="stylesheet" type="text/css">
<link href="bootstrap-fileinput-master/css/fileinput.min.css" rel="stylesheet" type="text/css">
<script src="bootstrap-fileinput-master/js/fileinput.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
<div class="todo">
  <div id="cabecera">
    <img src="images/swirl.png" width="1188" id="img1">
  </div>
  <div id="contenido">
    <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
    <span> <h2>Modificar Materia</h2> </span>
    <br>
    <form action="editar_materia2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
      <div class="row">
        <div class="col-xs-3">
        <label>ID Materia:</label>
        <input type="text" name="id_user" id="id_user" class="form-control" readonly="readonly" value="<?php echo $consulta[0]; ?>">
        </div>
      </div>
      <div>
        <div class="row">
          <div class="col-xs-3">
          <label>Nombre:</label>
          <input type="text" name="nom" id="nom" class="form-control" value="<?php echo $consulta[1]?>">
          </div>
        </div>
        <div class="row">
          <div class="col-xs-3">
          <label>Clave</label>
          <input type="text" name="clav" id="clav" class="form-control" value="<?php echo $consulta[2]?>">
          </div>
        </div>
        <div class="row">
          <div class="col-xs-3">
          <label>Status:</label>
          <select name="estatus" id="estatus" class="form-control">
            <!--<option> <?php echo $consulta[3]; ?>  </option>-->
            <option>ACTIVO</option>
            <option>INACTIVO</option>
          </select>
          </div>
        </div>
      </div>
      <br>
      <button type="submit" class="btn btn-success">Guardar</button>
    </form>
    </div>
  </div>
</div>
</body>
</html>

<script>
  $("#file-1").fileinput({
  showCaption: false,
  browseClass: "btn btn-primary btn-lg",
  fileType: "any"
  });
</script>
