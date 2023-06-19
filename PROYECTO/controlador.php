<?php
if (!empty($_POST["btniniciar"])) {
    if (empty($_POST["usuario"]) and empty($_POST["contraseña"])) {

    } else {
        $usuario = $_POST["usuario"];
        $contraseña = $_POST["contraseña"];
        $sql = $conn->query("select * from Talleristas where Numdoc='$usuario' and contraseña='$contraseña'");
        if ($datos = $sql->fetch_object()) {
            header("location:regalumn.php");
        } else {
            echo 'ACCESO DENEGADO';
        }
    }
    echo "los campos estan vacios";
}
?>