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

$query = "SELECT * FROM alumnos";
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

    <div id="menu" class="container">
      <a class="" href="tablatutor.php">Mostrar Registros</a>
    </div>

    <div class="container mt-5">
      <div class="row">
        <div class="col-md-3">
          <div class="card">
            <div class="card-header">
              <h4 class="text-center">Ingrese datos</h4>
            </div>
            <form class="p-4" action="insertartutor.php" method="POST">
              <input type="text" class="form-control mb-3" name="id_tutor" placeholder="Matricula del tutor.">
              <input type="text" class="form-control mb-3" name="password" placeholder="Contraseña del tutor.">
              <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre del tutor.">
              <input type="text" class="form-control mb-3" name="Apellido_P" placeholder="Apellido Paterno.">
              <input type="text" class="form-control mb-3" name="Apellido_M" placeholder="Apellido Materno.">
              <input type="text" class="form-control mb-3" name="Genero" placeholder="Masculino/Fenenino.">
              <input type="text" class="form-control mb-3" name="Telefono" placeholder="Telefono.">

              <select name="matricula_alu" class="form-control mb-3">
              <?php 
              while ($registro = mysqli_fetch_array($result)) {   

              ?>
              <option value="<?php echo $registro['matricula_alu']; ?>"><?php echo $registro['matricula_alu']; ?></option>

              <?php 
                }
              ?>
              </select>

              <div class="d-grid"><input type="submit" class="btn btn-primary" name=""></div>
            </form>
          </div>

        </div>


        <div class="col-md-9">
          <h1 class="text-center">Mostrar informacion</h1>
          <table class="table custom-table">
            <thead class="text-center">
              <tr> 
                <th scope="col">Matricula</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">Genero</th>
                <th scope="col">Inicio escolar</th>
                <th scope="col">Sección</th>
                <th scope="col">Grado</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr scope="row">
                <?php

                  $query = "SELECT * FROM alumnos";
                  $result = mysqli_query($conexion, $query);
                  while ($registro = mysqli_fetch_array($result)) {   
                ?>

                <td class="text-center"><?php echo $registro['matricula_alu']; ?></td>
                <td class="text-center"><?php echo $registro['nombre']; ?></td>
                <td class="text-center"><?php echo $registro['apellido_P']; ?></td>
                <td class="text-center"><?php echo $registro['apellido_M']; ?></td>
                <td class="text-center"><?php echo $registro['genero']; ?></td>
                <td class="text-center"><?php echo $registro['inicio_escolar']; ?></td>
                <td class="text-center"><?php echo $registro['sección']; ?></td>
                <td class="text-center"><?php echo $registro['grado']; ?></td>
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