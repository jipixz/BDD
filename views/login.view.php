<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Login</title>

</head>
<body class="bg-image">
   <div class="container">
   <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <div class="input-group">
    <i class="far fa-user icons" aria-hidden="false"></i>
        <input type="text" name="usuario" placeholder="Usuario" class="form-control">
    </div>
    <div class="input-group">
        <i class="fa fa-lock icons" aria-hidden="false"></i>
        <input type=password name="password" placeholder="Password" class="form-control">
    </div>

    <button type="submit" name="submit" class="btn btn-flat-green">Ingresar</button>
   </form>
   </div>
</html>
</body>


