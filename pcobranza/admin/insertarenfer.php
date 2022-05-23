<?php 
	require 'conexion.php';

	$id_enfermero = $_POST['id_enfermero'];
	$password = $_POST['password'];
	$Nombre = $_POST['Nombre'];
	$Apellido_P = $_POST['Apellido_P'];
	$Apellido_M = $_POST['Apellido_M'];
	$Genero = $_POST['Genero'];
	$Teléfono = $_POST['Telefono'];

	$query = "INSERT INTO enfermero (id_enfermero, password, Nombre, Apellido_P, Apellido_M, Genero, Teléfono) VALUES ('$id_enfermero', '$password', '$Nombre', '$Apellido_P', '$Apellido_M', '$Genero', '$Teléfono')";
	mysqli_query($conexion, $query) or die("Error" . mysqli_error($conexion));
	header("Location:regisenfermeros.php");
	die();

?>