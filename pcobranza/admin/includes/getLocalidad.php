<?php
	require ('../conexion.php');

	$id_enfermero = $_POST['id_enfermero'];
	
	$query = "SELECT id_enfermero, Nombre, Apellido_P, Apellido_M, Genero, Teléfono FROM enfermero WHERE id_enfermero = '$id_enfermero'";
	$resultado = mysqli_query($conexion, $query);
	$html="";

	while($rowM = $resultado->fetch_assoc())
	{
		$nombrecompenfermero = $rowM['Nombre']." ". $rowM['Apellido_P']." ". $rowM['Apellido_M'];
		$html.= "<h4>Nombre del enfermero: ".$nombrecompenfermero. "  <br> Genero: ". $rowM['Genero']." Teléfono: ". $rowM['Teléfono']. "</h4>"; 
	}
	echo $html;
?>