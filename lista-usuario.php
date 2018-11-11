<?php
function conexion ($bd_config){

    try {
        //$variable = new PDO('mysql:host=localhost;dbname=reserva_laboratorio','root','');
        $conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['db_name'],$bd_config['user'],$bd_config['password']);
        return $conexion;
    } catch (PDOException $e){

        return false;

    }

}
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>lista usuarios</title>
  </head>
  <body>
    <header>
      <div class="container">
        <h3>Usuarios</h3>
    </header>


<section>
  <table class="container2">
    <tr class="form">
      <th class="pas-basic">Nombre</th>
      <th class="pas-basic">Apellido</th>
      <th class="pas-basic">Correo</th>
      <th class="pas-basic">Matricula</th>


    </tr>
    <?php



    ?>




  </table>
</section>
  </body>
</html>
