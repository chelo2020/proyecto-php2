<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_POST['cod_estudiante'];
$dni=$_POST['dni'];
$nombres=$_POST['nombre'];
$apellidos=$_POST['apellido'];

$sql="UPDATE alumnos SET  dni='$dni',nombre='$nombres',apellido='$apellidos' WHERE cod_estudiante='$cod_estudiante'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>