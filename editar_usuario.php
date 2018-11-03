<?php
    session_start();
    //$usuario_id = "SELECT id_usuario FROM usuarios WHERE "
    //$id = $_SESSION['nombre']; 
    //$id = $_GET['nombre'];
    //echo $id;
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

            <form class='formulario'>


            </form>

        </div>
    </div>
</body>

</html>