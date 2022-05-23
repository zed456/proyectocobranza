<?php
	require ('conexion.php');
	
	$matricula_alu = $_POST['matricula_alu'];
	$id_enfermero = $_POST['id_enfermero'];

	if ($matricula_alu == 0 and $id_enfermero == 0) {
		# code...
		echo '
		<script> 
			alert("Información no enviada.");
			window.location = "regitroaluenfer.php";
		</script>';
		exit();
	}
	
	$query = "SELECT * FROM vinculacion_enalu WHERE vinculacion_enalu.matricula_alu = '$matricula_alu'";
	$resultado = mysqli_query($conexion, $query);
	
	if(mysqli_num_rows($resultado) > 0 ){
		echo '
		<script> 
			alert("Ya esta registrado");
			window.location = "regitroaluenfer.php";
		</script>';
		exit();
	}

	$sql = "INSERT INTO vinculacion_enalu (id, matricula_alu, id_enfermero) VALUES (NULL, '$matricula_alu', '$id_enfermero');";
	mysqli_query($conexion, $sql) or die("Error" . mysqli_error($conexion));
	header("Location:regitroaluenfer.php");
	die();

?>