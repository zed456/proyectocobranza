<?php
	require 'conexion.php';

	$id_tutor = $_POST['id_tutor'];
	$password = $_POST['password'];
	$Nombre = $_POST['Nombre'];
	$Apellido_P = $_POST['Apellido_P'];
	$Apellido_M = $_POST['Apellido_M'];
	$Genero = $_POST['Genero'];
	$Teléfono= $_POST['Teléfono'];
	$matricula_alu = $_POST['matricula_alu'];

	$query = "UPDATE tutor SET Nombre = '$Nombre', Apellido_P = '$Apellido_P', Apellido_M = '$Apellido_M', Genero='$Genero', Teléfono = '$Teléfono', matricula_alu='$matricula_alu' WHERE id_tutor='$id_tutor'";

	mysqli_query($conexion, $query) or die("Error" . mysqli_error($conexion));
	header("Location:tablatutor.php");
	die();

?>