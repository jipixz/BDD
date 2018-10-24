  <!DOCTYPE html>
  <?php

    $mysqli = new mysqli('localhost', 'root', '', 'reserva_laboratorio');

  ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Registro usuarios</title>

</head>
<body class="bg-image">
   <div class="container">
        <h1 class="container titulo" align="center">Formulario de Registro</h1>
        <form class="registro-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <div class="form-group">
                <i class="fas fa-user iconos fa-lg" aria-hidden="false"></i>
                <label for="inputPassword" class=" letras2" >Nombre</label>
                <input type="text" name="nombre" placeholder="Ingrese su nombre" class="form-control input-lg">
            </div>
            <div class="form-group">
                <i class="fas fa-user iconos fa-lg" aria-hidden="false"></i>
                <label for="inputPassword" class=" letras2" >Apellidos</label>
                <input type="text" name="apellido" placeholder="Ingrese su apellido" class="form-control input-lg">
            </div>
            <div class="form-group">
                <i class="fas fa-envelope iconos fa-lg"></i>
                <label for="inputPassword" class=" letras2" >Correo</label>
                <input type="text" name="correo" placeholder="Ingrese su correo institucional" class="form-control input-lg">
            </div>
            <div class="form-group">
                <i class="fa fa-lock iconos fa-lg" aria-hidden="false"></i>
                <label for="inputPassword" class=" letras2" >Contraseña</label>
                <input type=password name="password" placeholder="Escriba su nueva contraseña" class="form-control input-lg">
            </div>
            <div class="form-group">
                <i class="fas fa-id-badge iconos fa-lg"></i>
                <label for="inputPassword" class=" letras2" >Matrícula</label>
                <input type="text" name="matricula" placeholder="Ingresa tu matrícula escolar" class="form-control input-lg">
            </div>
            <button type="submit" name="submit" class="btn btn-success btn-lg btn-anadir">Añadir</button>
            <div class="volver-btn">
               <a href="index.php" class="btn btn-primary btn-lg volver ">Volver</a>
            </div>
        </form>
   </div>
</body>
</html>
