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
    <title>MatissesTFA</title>
</head>
<body>
    <div class = "container">
        <div class = "form-content">
          <h1 id="titulo">Iniciar Sesion</h1>
          <form action="" method="post">
            <div class = "login">
              <input type="text" required>
              <label for="">nombre de usuario</label>
            </div>
            <div class = "login">
              <input type="password">
              <label for="">contraseña</label>
            </div>
            <div class = "recordar">¿Olvido su contraseña?</div>
            <input type="submit" value = "iniciar">
          </form>
        </div>
    </div>
</body>
</html>