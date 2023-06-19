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
    <link rel="stylesheet" href="regalumn.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
        integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <title>Registro de alumnos</title>
</head>

<body>
    <section>
    <header>
        <a class="navbar-brand" href="#menu">
            <img src="img\logo_nuevo.png" alt="" width="80" height="64" class="logo">
            <div>
                
            </div>
        </a>
    </header>
    <div class="container">
        <div class="contdatbasic">
            <div class="datosdoc">
                <label for="">TIPO ID</label>
                <select name="selcid"  id = "selcid">
                    <option value="ced">CEDULA DE CIUDADANIA</option>
                    <option value="tarid">TARJETA DE IDENTIDAD</option>
                    <option value="cedext">CEDULA DE EXTRANJERIA</option>
                    <option value="pasport">PASAPORTE</option>
                </select>
                <label for="">NUMERO</label>
                <input name="numberdoc" id="numberdoc" type="number">
            </div>
            <div class="nombre">
                <label for="">NOMBRE</label>
                <input name="name" type="text" id="name">
            </div>
            <div class="datoscont">
                <label for="">DIRECCION</label>
                <input name="direc" type="text" id="direc">
                <label for="">TELEFONO</label>
                <input name="numbertel" id="numbertel" type="number">
            </div>
            <div class="otrosdatos">
                <label for="">EPS</label>
                <input name="eps" type="text" id="eps">
                <label for="">CANT CLASES</label>
                <input name="cantclas" id="cantclas" type="number">
            </div>
            <div class="nombreacud">
                <label for="">NOMBRE ACUDIENTE</label>
                <input name="nameacu" type="text" id="nameacu">
            </div>
            <div class="otrosdatosacu">
                <label for="">TELEFONO</label>
                <input name="numbertelacu" id="numbertelacu" type="number">
            </div>
            <div class="desplegables">
                <label for="">SELECCIONE EL CURSO</label>
                <select name="selcur"  id = "selcur">
                    <option value="dibpin">Dibujo y Pintura</option>
                    <option value="pintel">Pintura en Tela</option>
                    <option value="madcount">Madera Country</option>
                    <option value="manfoam">Manualidades Foamy</option>
                </select>
                <label for="">SELECCIONE EL TALLERISTA</label>
                <select name="seltall"  id = "seltall">
                    <option value="gac">Gilberto Acuña</option>
                    <option value="rmr">Rosalba Mateus</option>
                    <option value="vam">Victoria Acuña </option>
                </select>
            </div>
            <div class="btnconfirm">
                <label href="" type = "submit">CONFIRMAR INSCRIPCION</label>
                </div>
            </div>
        </div>
    </div>
    </section>
</body>

</html>