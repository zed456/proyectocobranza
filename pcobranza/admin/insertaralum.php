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

	$query = "INSERT INTO alumnos (matricula_alu, nombre, apellido_P, apellido_M, genero, inicio_escolar, sección, grado) VALUES ('$matricula_alu', '$Nombre', '$Apellido_P', '$Apellido_M', '$Genero', '$Inicio_escolar', '$sección', '$grado')";
	mysqli_query($conexion, $query) or die("Error" . mysqli_error($conexion));
	header("Location:regisalumnos.php");
	die();

?>