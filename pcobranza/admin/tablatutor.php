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

$query = "SELECT * FROM tutor JOIN alumnos WHERE tutor.matricula_alu = alumnos.matricula_alu";
$result = mysqli_query($conexion, $query);


?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Página Tutores</title>
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
          <table class="table custom-table">
            <thead class="text-center">
              <tr> 
                <th scope="col">id_tutor</th>
                <th scope="col">password</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">Genero</th>
                <th scope="col">Telefono</th>
                <th scope="col">matricula_alu</th>
                <th scope="col">Nombre del alumno</th>
                <th scope="col">Genero</th>
                <th scope="col">Sección</th>
                <th scope="col">Grado</th>
              </tr>
            </thead>
            <tbody>
              <tr scope="row">
                <?php
                  while ($registro = mysqli_fetch_array($result)) {  

                  $nombrecompleto = $registro['nombre'] . ' ' . $registro['apellido_P'] . ' ' . $registro['apellido_M'];
                ?>

                <td class="text-center"><?php echo $registro['id_tutor']; ?></td>
                <td class="text-center"><?php echo $registro['password']; ?></td>
                <td class="text-center"><?php echo $registro['Nombre']; ?></td>
                <td class="text-center"><?php echo $registro['Apellido_P']; ?></td>
                <td class="text-center"><?php echo $registro['Apellido_M']; ?></td>
                <td class="text-center"><?php echo $registro['Genero']; ?></td>
                <td class="text-center"><?php echo $registro['Teléfono']; ?></td>
                <td class="text-center"><?php echo $registro['matricula_alu']; ?></td>
                <td class="text-center"><?php echo $nombrecompleto; ?></td>
                <td class="text-center"><?php echo $registro['genero']; ?></td>
                <td class="text-center"><?php echo $registro['sección']; ?></td>
                <td class="text-center"><?php echo $registro['grado']; ?></td>
                <td> <a href="editartutor.php?valor=<?php echo $registro['id_tutor'];?>">Editar</a></td>
                <td> <a href="delettutor.php?valor=<?php echo $registro['id_tutor'];?>">Elimar</a></td>
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