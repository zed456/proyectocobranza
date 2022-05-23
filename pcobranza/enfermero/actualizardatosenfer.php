<?php
	require '../conexion.php';

	$id_datos = $_POST['id_datos'];
	$id = $_POST['id'];
	$peso = $_POST['peso'];
	$altura = $_POST['altura'];
	$enfermedades = $_POST['enfermedades'];
	$observaciones = $_POST['observaciones'];
	$fecha = $_POST['fecha'];


	$query = "UPDATE datos_enfermeria SET peso = '$peso', altura = '$altura', enfermedades = '$enfermedades', observaciones='$observaciones', id = '$id', fecha='$fecha' WHERE id_datos = '$id_datos'";

	mysqli_query($conexion, $query) or die("Error" . mysqli_error($conexion));
	header("Location:index.php");
	die();

?>