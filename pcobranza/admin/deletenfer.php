<?php  
include("conexion.php");
$id_enfermero = $_GET['valor'];
$sql="DELETE FROM enfermero WHERE id_enfermero='$id_enfermero'";
mysqli_query($conexion,$sql) or die("Error" . mysqli_error($conexion));
header("Location: regisenfermeros.php");
die();
?>