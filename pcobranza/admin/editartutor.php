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
$id_tutor = $_GET['valor'];

$query = "SELECT * FROM tutor where id_tutor = '$id_tutor'";
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
      <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              Editar datos:
            </div>
            <form class="p-4" action="actualizartutor.php" method="POST">
              <?php
                while ($registro = mysqli_fetch_array($result)) {   

              ?>
              <input type="text" class="form-control mb-3" name="Nombre" value="<?php echo $registro['Nombre']; ?>">
              <input type="text" class="form-control mb-3" name="Apellido_P" value="<?php echo $registro['Apellido_P']; ?>">
              <input type="text" class="form-control mb-3" name="Apellido_M" value="<?php echo $registro['Apellido_M']; ?>">
              <input type="text" class="form-control mb-3" name="Genero" value="<?php echo $registro['Genero']; ?>">
              <input type="text" class="form-control mb-3" name="Teléfono" value="<?php echo $registro['Teléfono']; ?>">
              <input type="text" class="form-control mb-3" name="matricula_alu" value="<?php echo $registro['matricula_alu']; ?>">
              <div class="d-grid">
                <input type="hidden" name="id_tutor" value="<?php echo $registro['id_tutor']; ?>">
                <input type="hidden" name="password" value="<?php echo $registro['password']; ?>">
                <input type="submit" class="btn btn-primary" name="">
              </div>
              
            </form>
            <?php
              }?>
          </div>

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