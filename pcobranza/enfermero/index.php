<?php 

    session_start(); 
    $nombre = $_SESSION['nombre'];
    $id_enfermero = $_SESSION['id_enfermero'];
    if(isset($_SESSION['nombre'])){

    }else{

        header('Location: login.php');

    }
?>

<?php
require '../conexion.php';

$query = "SELECT * FROM alumnos INNER JOIN vinculacion_enalu ON alumnos.matricula_alu = vinculacion_enalu.matricula_alu WHERE vinculacion_enalu.id_enfermero = '$id_enfermero'";
$result = mysqli_query($conexion, $query);


?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Página alumnos</title>
  </head>
  <body>
    <div>
    
    <h1><?php echo 'Bienvenid@ '.$nombre; ?></h1>
    <a href="salir.php">Cerrar sesión</a>
    </div>

    <div class="container mt-5">
      <div class="row">


        <div class="col-md">
          <h1 class="text-center">Mostrar Alumnos</h1>
          <table class="table custom-table">
            <thead class="text-center">
              <tr> 
                <th scope="col">Matricula</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">Genero</th>
                <th scope="col">Nivel academico</th>
                <th scope="col">Grado</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr scope="row">
                <?php
                  while ($registro = mysqli_fetch_array($result)) {   
                ?>

                <td class="text-center"><?php echo $registro['matricula_alu']; ?></td>
                <td class="text-center"><?php echo $registro['nombre']; ?></td>
                <td class="text-center"><?php echo $registro['apellido_P']; ?></td>
                <td class="text-center"><?php echo $registro['apellido_M']; ?></td>
                <td class="text-center"><?php echo $registro['genero']; ?></td>
                <td class="text-center"><?php echo $registro['sección']; ?></td>
                <td class="text-center"><?php echo $registro['grado']; ?></td>
                <td class="text-center"><a href="agregarinfo.php?valor=<?php echo $registro['id'];?>">Agregar información</a></td>
                <td class="text-center"><a href="verinformacion.php?valor=<?php echo $registro['matricula_alu'];?>">Ver información</a></td>
              </tr>
            </tbody>
            <?php
              }?>
          </table>

        </div>
        
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