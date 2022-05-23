<?php
    include('../conexion.php');

    session_start();

    $nombre = $_POST['nombre'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM enfermero WHERE id_enfermero = '$nombre' AND password = '$password'";
    $resultado = $conexion->query($sql);

    $row = $resultado->fetch_assoc();

    if($row['id_enfermero'] == $nombre && $row['password'] == $password){
        $_SESSION['nombre'] = $row['Nombre']. ' ' .$row['Apellido_P'].' '.$row['Apellido_M'];
        $_SESSION['id_enfermero'] = $row['id_enfermero'];
        header("Location: index.php");
    }else{
        header("Location: login.php");
    }
?>