<?php
include('db.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","alumnos");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and pass='$pass'";
$resultado=mysqli_query($conexion,$consulta);


$filas=mysqli_num_rows($resultado);

if(!$filas){
  
    header("location:alumno.php");

}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);