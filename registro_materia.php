<!DOCTYPE html>
<!DOCTYPE html>
<?php

  $mysqli = new mysqli('localhost', 'root', '', 'reserva_laboratorio');

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Registro materia</title>

</head>
<body class="bg-image">
   <div class="container">
   <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">

    <div class="input-group">
    <i class="fas fa-book icons"></i>
        <input type="text" name="asignatura" placeholder="Asignatura" class="form-control">
    </div>
    <div class="input-group ">
    <i class="fas fa-school icons"></i>
        <input type="text" name="clave" placeholder="Clave" class="form-control">

    </div>
    <div class="container2">
    <button type="submit" name="submit" class="btn btn-flat-green">Añadir Materia</button>
    <button type="submit" name="submit" class="btn btn-flat-green" align="center" >Ver lista de materias</button>
  </div>
   </form>
   </div>

</body>
</html>
