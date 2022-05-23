<?php  
include("conexion.php");
$id_tutor = $_GET['valor'];
$sql="DELETE FROM tutor WHERE id_tutor='$id_tutor'";
mysqli_query($conexion,$sql) or die("Error" . mysqli_error($conexion));
header("Location: tablatutor.php");
die();
?>