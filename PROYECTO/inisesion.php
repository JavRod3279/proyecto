<?php
include 'conexion.php';
$query = mysqli_query($conn, "SELECT * FROM talleristas");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Javier Rodriguez">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inicsesion.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <title>Intranet</title>
</head>
<body>
    <div class = "container">
        <div class = "form-content">
          <h1 id="titulo">Iniciar Sesion</h1>
          <?php
          include 'controlador.php';
          ?>
          <form action="" method="POST">
            <div class = "login">
              <input id = "usuario" type="number" name= "usuario">
              <label for="">nombre de usuario</label>
            </div>
            <div class = "login">
              <input type="password" id="contraseña" name="contraseña" >
              <label for="">contraseña</label>
            </div>
            <div class = "recordar">¿Olvido su contraseña?</div>
            <input type="submit" value = "iniciar" class="btn" name="btniniciar">
          </form>
        </div>
    </div>
</body>
</html>