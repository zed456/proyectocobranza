<?php
	require 'conexion.php';

	$id_enfermero = $_POST['id_enfermero'];
	$password = $_POST['password'];
	$Nombre = $_POST['Nombre'];
	$Apellido_P = $_POST['Apellido_P'];
	$Apellido_M = $_POST['Apellido_M'];
	$Genero = $_POST['Genero'];
	$Teléfono= $_POST['Tel'];

	$query = "UPDATE enfermero SET Nombre = '$Nombre', Apellido_P = '$Apellido_P', Apellido_M = '$Apellido_M', Genero='$Genero', Teléfono = '$Teléfono' WHERE id_enfermero='$id_enfermero'";

	mysqli_query($conexion, $query) or die("Error" . mysqli_error($conexion));
	header("Location:regisenfermeros.php");
	die();

?>