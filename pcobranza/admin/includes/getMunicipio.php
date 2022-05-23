<?php
	
	require ('../conexion.php');
	
	$matricula_alu = $_POST['matricula_alu'];
	$queryM = "SELECT matricula_alu, nombre, apellido_P, apellido_M, grado, sección FROM alumnos WHERE matricula_alu = '$matricula_alu'";
	$resultado = mysqli_query($conexion, $queryM);
	
	$html="";
	
	while($rowM = $resultado->fetch_assoc())
	{
		$nombrecomp = $rowM['nombre']." ". $rowM['apellido_P']." ". $rowM['apellido_M'];
		$html.= "<h4>Alumno: ".$nombrecomp. "  <br> Nivel academico: ". $rowM['sección']." Grado: ". $rowM['grado']. "</h4>"; 
	}
	
	echo $html;
?>		