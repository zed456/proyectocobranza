<?php 
	require 'conexion.php';
	$id_tutor = $_POST['id_tutor'];
	$password = $_POST['password'];
	$Nombre = $_POST['Nombre'];
	$Apellido_P = $_POST['Apellido_P'];
	$Apellido_M = $_POST['Apellido_M'];
	$Genero = $_POST['Genero'];
	$Teléfono = $_POST['Telefono'];
	$matricula_alu = $_POST['matricula_alu'];

	$query = "SELECT * FROM tutor WHERE tutor.matricula_alu = '$matricula_alu'";
	$result = mysqli_query($conexion, $query);

	if(mysqli_num_rows($result) > 0 ){
		echo '
		<script> 
			alert("Ya esta registrada");
			window.location = "registutor.php";
		</script>';
		exit();
	}

	$query = "INSERT INTO tutor (id_tutor, password, Nombre, Apellido_P, Apellido_M, Genero, Teléfono, matricula_alu) VALUES ('$id_tutor', '$password', '$Nombre', '$Apellido_P', '$Apellido_M', '$Genero', '$Teléfono', '$matricula_alu')";
	mysqli_query($conexion, $query) or die("Error" . mysqli_error($conexion));
	header("Location:registutor.php");
	die();
?>