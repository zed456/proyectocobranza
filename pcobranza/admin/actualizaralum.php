<?php
	require 'conexion.php';

	$matricula_alu = $_POST['matricula_alu'];
	$Nombre = $_POST['Nombre'];
	$Apellido_P = $_POST['Apellido_P'];
	$Apellido_M = $_POST['Apellido_M'];
	$Genero = $_POST['Genero'];
	$Inicio_escolar = $_POST['Inicio_escolar'];
	$sección = $_POST['sección'];
	$grado = $_POST['grado'];

	$query = "UPDATE alumnos SET nombre = '$Nombre', apellido_P = '$Apellido_P', apellido_M = '$Apellido_M', genero='$Genero', inicio_escolar = '$Inicio_escolar', sección='$sección', grado='$grado' WHERE matricula_alu='$matricula_alu'";

	mysqli_query($conexion, $query) or die("Error" . mysqli_error($conexion));
	header("Location:regisalumnos.php");
	die();

?>