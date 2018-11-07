<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejemplo de interaccion con DB</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link rel="stylesheet" href="css/style-menu.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
  <hr class="divider">
  <nav class="navbar navbar-expand-md navbar-light barranav">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navegacion" aria-controls="navegacion" aria-expanded="true" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navegacion">
      <ul class="nav navbar-nav left mr-auto">
        <li><a href="menu.php" class="text">Reservas</a></li>
        <li><a href="materias.php" class="text">Asignaturas</a></li>
        <li><a href="usuarios.php" class="text">Usuarios</a></li>
        <li><a href="laboratorios.php" class="text">Laboratorios</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right right mr-auto">
        <li><a href="sesion.php" class="text"><i class="fas fa-user-cog"></i> Perfil</a></li>
        <li><a href="exit.php" class="text"><i class="fas fa-door-open"></i> Salir</a></li>
      </ul>
    </div>
  </nav>
  <hr class="divider debajo">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

</body>
</html>
