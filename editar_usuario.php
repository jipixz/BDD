<?php
    $consulta=ConsultarUsuario($_GET['no']);  
    function ConsultarUsuario($id){

        include 'conexion2.php'; //Se necesita el include dentro de la funcion para que no de error al intentar conectar con la base de datos
        $query = "SELECT id_usuario, nombre, apellidos, correo, password, matricula, celular, ti.tipo_de_usuario, us.estatus 
        FROM usuarios 
        LEFT JOIN estatus_usuario us
        ON usuarios.estatus = us.id_estatus_usuario
        LEFT JOIN tipo_de_usuario ti
        ON usuarios.id_tipo_de_usuario = ti.id_tipo_de_usuario
        WHERE id_usuario = '$id'";
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
            $filas['tipo_de_usuario'],
            $filas['estatus'],
        ]; 

    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    </style>
    <link rel="stylesheet" href="css/style-menu.css" type="text/css">
    <!--<link rel="stylesheet" href="css/style.css">-->
    <link rel="stylesheet" href="css/sesion.css" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="todo">
        <div id="cabecera">
            <img src="images/swirl.png" width="1188" id="img1">
        </div>
        <div id="contenido">
            <?php include'navbar.php';?>
            <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
                <h2>Modificar datos de usuario</h2>
                <form class="col-sm-4" action="editar_usuario2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
                    <div class="form-group">
                        <label>ID Usuario:</label>
                        <input type="text" name="id_user" id="id_user" class="form-control"  value="<?php echo $consulta[0]; ?>">
                    </div>
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input type="text" name="nom" id="nom" class="form-control"  value="<?php echo $consulta[1]; ?>">
                    </div>
                    <div class="form-group">
                        <label>Apellidos:</label>
                        <input type="text" name="ape" id="ape" class="form-control"  value="<?php echo $consulta[2]; ?>">
                    </div>
                    <div class="form-group">
                        <label>Correo:</label>
                        <input type="text" name="cor" id="cor" class="form-control"  value="<?php echo $consulta[3]; ?>">
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="text" name="pass" id="pass" class="form-control"  value="<?php echo $consulta[4]; ?>">
                    </div>
                    <div class="form-group">
                        <label>Matricula:</label>
                        <input type="text" name="mat" id="mat" class="form-control"  value="<?php echo $consulta[5]; ?>">
                    </div>
                    <div class="form-group">
                        <label>Celular:</label>
                        <input type="text" name="cel" id="cel" class="form-control"  value="<?php echo $consulta[6]; ?>">
                    </div>
                    <div class="form-group">
                      <label>Tipo de usuario:</label>
                      <select name="tip" id="tip" class="form-control" required>
                        <option value="" disabled selected><?php echo $consulta[7]; ?></option>
                        <option value="1">Administrador</option>
                        <option value="2">Becario</option>
                        <option value="3">Profesor</option>
                        <option value="4">Responsable</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Estatus:</label>
                      <select name="est" id="est" class="form-control" required>
                        <option value="" disabled selected><?php echo $consulta[8]; ?></option>
                        <option value="1">Activo</option>
                        <option value="2">Inactivo</option>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>