<?php  
include("conexion.php");
$id_cajero = $_GET['valor'];
$sql="DELETE FROM caja WHERE id_cajero='$id_cajero'";
mysqli_query($conexion,$sql) or die("Error" . mysqli_error($conexion));
header("Location: regiscajero.php");
die();
?>