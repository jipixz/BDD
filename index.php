<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inicio de Sesion</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/style.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="bg-image">
<div class="todo">

<//div id="cabecera">
<//img src="images/swirl.png" width="1188" id="img1">
  <///div>

  <div id="contenido">
<h2 class="container" align="center">Reserva Laboratorios</h2>
    <div id="login" style="width: 200px; margin: auto;">
      <form class="form-signin" method="POST" action="login.php">

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" id="inputUsuario" name="inputUsuario" class="form-control" placeholder="Nombre de usuario" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
        <button class="btn btn-flat-green" type="submit">Iniciar Sesion</button>
        </div>

      </form>

    </div>

</div>

<a href="registro_datos.php" class="btn login-link">Registrate</a>
</body>
</html>
