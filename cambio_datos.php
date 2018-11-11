<?php
    session_start();
    if ($_SESSION['estatus'] != '1'){
        header('Location: index.php');
      }
    $id = $_SESSION['nombre'];

    $consulta=ConsultarUsuario($id);
    function ConsultarUsuario($id){

        include 'conexion2.php'; //Se necesita el include dentro de la funcion para que no de error al intentar conectar con la base de datos
        $query = "SELECT id_usuario, nombre, apellidos, correo, password, matricula, celular, us.estatus
        FROM usuarios
        LEFT JOIN estatus_usuario us
        ON usuarios.estatus = us.id_estatus_usuario
        WHERE matricula = '$id'";
        $resultado= $conexion->query($query) or die ("Error al consultar usuario: ".mysqli_error($conexion) );
        $filas=$resultado->fetch_assoc();
        return [
            $filas['id_usuario'],
            $filas['nombre'],
            $filas['apellidos'],
            $filas['correo'],
            $filas['password'],
            $filas['matricula'],
            $filas['celular'],
            $filas['estatus'],
        ];

    }
?>

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil</title>
  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/sesion.css" type="text/css">
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="css/style-menu.css" type="text/css">
</head>

<body>

    <div class="todo">

        <div id="cabecera">
        <//img src="images/swirl.png" width="1188" id="img1">
        </div>

        <div id="contenido">
            <?php include'navbar.php'; ?>
            <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">

                <h2>Modificar datos</h2>

                <form class="col-sm-4" action="editar_datos.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
                    <div class="form-group">
                        <label>ID Usuario:</label>
                        <input type="text" name="id_user" id="id_user" class="form-control" readonly="readonly" value="<?php echo $consulta[0]; ?>">
                    </div>
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input type="text" name="nom" id="nom" class="form-control" value="<?php echo $consulta[1]?>" required>
                    </div>
                    <div class="form-group">
                        <label>Apellidos:</label>
                        <input type="text" name="ape" id="ape" class="form-control" value="<?php echo $consulta[2]?>" required>
                    </div>
                    <div class="form-group">
                        <label>Correo:</label>
                        <input type="text" name="corr" id="corr" class="form-control" value="<?php echo $consulta[3]?>" required>
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="text" name="pass" id="pass" class="form-control" value="<?php echo $consulta[4]?>" required>
                    </div>
                    <div class="form-group">
                        <label>Matricula:</label>
                        <input type="text" name="mat" id="mat" class="form-control" value="<?php echo $consulta[5]?>" readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label>Celular:</label>
                        <input type="text" name="cel" id="cel" class="form-control" value="<?php echo $consulta[6]?>" maxlength="12" required>
                    </div>
                    <div class="form-group">
                        <label>Estatus:</label>
                        <input type="text" name="est" id="est" class="form-control" readonly="readonly" value="<?php echo $consulta[7]?>">
                    </div>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
