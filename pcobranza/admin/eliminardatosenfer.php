<?php  
include("conexion.php");
$id_datos = $_GET['valor'];
$sql="DELETE FROM datos_enfermeria WHERE id_datos='$id_datos'";
mysqli_query($conexion,$sql) or die("Error" . mysqli_error($conexion));
header("Location: regisalumnos.php");
die();
?>