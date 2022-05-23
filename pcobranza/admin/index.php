<?php 

    session_start(); 
    $nombre = $_SESSION['nombre'];


    if(isset($_SESSION['nombre'])){

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>
</head>
<body>
    <div>
    <br/><br/>
    <a href="salir.php">Cerrar sesión</a>
    </div>

    <div>
        <h1><?php echo 'Bienvenid@ '.$nombre?></h1>
        <button><a href="regisalumnos.php">Registrar alumnos</a></button>
        <button><a href="registutor.php">Registrar tutores</a></button>
        <button><a href="regiscajero.php">Registrar Cajero</a></button>
        <button><a href="regisenfermeros.php">Registrar Enfermeros</a></button>
    </div>
</body>
</html>
<?php 
    }else{

        header('Location: login.php');

    }

?>