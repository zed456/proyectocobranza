<?php
    include('conexion.php');

    session_start();

    $nombre = $_POST['nombre'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE id_admin = '$nombre' AND password = '$password'";
    $resultado = $conexion->query($sql);

    $row = $resultado->fetch_assoc();

    if($row['id_admin'] == $nombre && $row['password'] == $password){
        $_SESSION['nombre'] = $row['Nombre']. ' ' .$row['Apellido_P'].' '.$row['Apellido_M'];
        header("Location: index.php");
    }else{
        header("Location: login.php");
    }


?>