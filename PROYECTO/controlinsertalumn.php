<?php
if(!empty($_POST["btnguardar"])){
$tipodoc = $_POST['selcid'];
$numdoc = $_POST['numberdoc'];
$name = $_POST['name'];
$direc = $_POST['direc'];
$numertel = $_POST['numbertel'];
$eps = $_POST['eps'];
$cantclas = $_POST['cantclas'];
$nameacu = $_POST['nameacu'];
$numertelacu = $_POST['numbertelacu'];
$email = $_POST['correo'];
$selcur = $_POST['selcur'];
$seltall = $_POST['seltall'];
$sql = $conn->query("INSERT INTO alumnos VALUES ('$tipodoc','$numdoc','$name','$direc','$numertel','$eps','$cantclas','$nameacu','$numertelacu','$email','$selcur','$seltall')");
if($sql==1){
    echo '<script>{
      alert("Alumno Ingresado Correctamente");
    }
    </script>';
}
else{
    echo '<script>{
        alert("Alumno No Ingresado");
      }
      </script>';
}

}
?>