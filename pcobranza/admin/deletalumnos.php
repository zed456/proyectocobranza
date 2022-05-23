<?php  
include("conexion.php");
$matricula_alu = $_GET['valor'];
$sql="DELETE FROM alumnos WHERE matricula_alu='$matricula_alu'";
mysqli_query($conexion,$sql) or die("Error" . mysqli_error($conexion));
header("Location: regisalumnos.php");
die();
?>