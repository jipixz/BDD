  <!DOCTYPE html>
  <?php

    $mysqli = new mysqli('localhost', 'root', '', 'reserva_laboratorio');

  ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Registro usuarios</title>

</head>
<body class="bg-image">
   <div class="container">
   <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <div class="input-group">
    <i class="far fa-user icons" aria-hidden="false"></i>
        <input type="text" name="nombre" placeholder="Nombre" class="form-control">
    </div>
    <div class="input-group">
    <i class="far fa-user icons" aria-hidden="false"></i>
        <input type="text" name="apellido" placeholder="Apellido" class="form-control">
    </div>
    <div class="input-group">
    <i class="fas fa-envelope icons"></i>
        <input type="text" name="correo" placeholder="Correo" class="form-control">
    </div>
    <div class="input-group">
        <i class="fa fa-lock icons" aria-hidden="false"></i>
        <input type=password name="password" placeholder="Password" class="form-control">
    </div>
    <div class="input-group">
    <i class="fas fa-id-badge icons"></i>
        <input type="text" name="matricula" placeholder="Matricula" class="form-control">
    </div>
  </head>
  <body>
    <div class="input-group">

        <select class="form-control" name="rol">
          <option value="">Tipo Usuario</option>
          <?php
            $query = $mysqli -> query ("SELECT * FROM tipo_de_usuario");
            while ($valores = mysqli_fetch_array($query)) {
              echo '<option value="'.$valores[id].'">'.$valores[tipo_de_usuario].'</option>';
            }
          ?>
        </select>
        </select>
    <div class="input-group">
    </div>
    <button type="submit" name="submit" class="btn btn-flat-green">Añadir</button>
   </form>
   </div>
</body>
</html>
