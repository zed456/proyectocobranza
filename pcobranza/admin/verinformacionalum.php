<?php 

    session_start(); 
    $nombre = $_SESSION['nombre'];

    if(isset($_SESSION['nombre'])){
    }else{

        header('Location: login.php');

    }
?>
<?php 

require 'conexion.php';
$matricula_alu = $_GET['valor'];
$query = "SELECT * FROM alumnos INNER JOIN vinculacion_enalu ON alumnos.matricula_alu = vinculacion_enalu.matricula_alu INNER JOIN enfermero ON enfermero.id_enfermero = vinculacion_enalu.id_enfermero INNER JOIN datos_enfermeria ON vinculacion_enalu.id = datos_enfermeria.id WHERE alumnos.matricula_alu = '$matricula_alu'";
$result = mysqli_query($conexion, $query);

?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Informacion del alumno</title>
  </head>
  <body>
    <div>
    <h1><?php echo 'Bienvenid@ '.$nombre; ?></h1>
    <a href="salir.php">Cerrar sesión</a>
    </div>

    <div class="container mt-5">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center">Mostrar informacion</h1>
          <?php
            while ($registro = mysqli_fetch_array($result)) { 
              $nombrecompletoalu = $registro['nombre'] . ' ' . $registro['apellido_P'] . ' ' . $registro['apellido_M'];
              $nombreenfero = $registro['Nombre'] . ' ' . $registro['Apellido_P'] . ' ' . $registro['Apellido_M'];
          ?>

          <div class="container mt-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Información del alumno: <?php echo $nombrecompletoalu; ?></h5><br>
              <p>Genero: <?php echo $registro['genero']; ?> Peso: <?php echo $registro['peso']; ?> Altura: <?php echo $registro['altura']; ?> <br> Enfermedades: <?php echo $registro['enfermedades']; ?> <br> Observaciones: <?php echo $registro['observaciones']; ?><br> Fecha de visita: <?php echo $registro['fecha']; ?></p>
              <div>
                <h6>Enfermero encargado: <?php echo $nombreenfero; ?></h6>
                <a href="editardatosenfer.php?valor=<?php echo $registro['id_datos'];?>">Editar</a>
                <a href="eliminardatosenfer.php?valor=<?php echo $registro['id_datos'];?>">Eliminar</a>
              </div>

            </div>
          </div>
          </div>
        </div>
      </div>
      <?php
        }?>
      <div>
      </div>
    </div>

    






    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>