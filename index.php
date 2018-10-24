<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio de sesión</title>
  <style type="text/css">
  @import url("css/mycss.css");
  </style>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body class="bg-image img-responsive">
  <div id="contenido">
    <h1 class="titulo" align="center">Reserva de Laboratorios</h1>
    <div id="login sesion">
      <form class="form-signin" method="POST" action="login.php">
        <i class="fas fa-user fa-2x iconos"></i>
        <label for="inputEmail" class="letras">Usuario</label>
        <input type="text" id="inputUsuario" name="inputUsuario" class="form-control input-lg" placeholder="Ingrese su usuario" required autofocus>

        <i class="fas fa-lock fa-2x iconos"></i>
        <label for="inputPassword" class="inputbox letras" >Contraseña</label>
        <input type="password" id="inputPassword" name="inputPassword" class="form-control input-lg" placeholder="Ingrese su contraseña" required>

        <div class="checkbox">
          <button class="btn btn-success btn-lg" type="submit">Iniciar sesión</button>
        </div>

        <div class="registrate">
          <a class="btn btn-primary registro btn-lg" href="registro_datos.php">Regístrate</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
