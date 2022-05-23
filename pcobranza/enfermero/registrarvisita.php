<?php
	require '../conexion.php';

	$id = $_POST['id'];
	$peso = $_POST['peso'];
	$altura = $_POST['altura'];
	$enfermedades = $_POST['enfermedades'];
	$observaciones = $_POST['observaciones'];
	$fecha = $_POST['fecha'];


	$query = "INSERT INTO datos_enfermeria (id_datos, id, peso, altura, enfermedades, observaciones, fecha) VALUES (NULL, $id, '$peso', '$altura', '$enfermedades', '$observaciones', '$fecha')";
	mysqli_query($conexion, $query) or die("Error" . mysqli_error($conexion));
	header("Location:index.php");
	die();

?>