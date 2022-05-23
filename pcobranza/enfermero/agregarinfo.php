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
$id = $_GET['valor'];
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
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              Editar datos:
            </div>
            <form class="p-5" action="registrarvisita.php" method="POST">
              <label>Peso:</label>
              <input type="text" class="form-control mb-2" name="peso">
              <label>Altura:</label>
              <input type="text" class="form-control mb-2" name="altura">
              <label>Enfermedades:</label>
              <textarea class="form-control mb-2" name="enfermedades" rows="3" ></textarea>
              <label>Observaciones:</label>
              <textarea class="form-control mb-2" name="observaciones" rows="3" ></textarea>
              <label for="start">Fecha de visita:</label>

              <input class="form-control mb-2" type="date" name="fecha">
              <div class="d-grid">
                <input type="hidden" name="id" value="<?php echo $id;?>">
              </div>
              <br>
              <div class="d-grid mt"><input type="submit" class="btn btn-primary" name=""></div>
              

            </form>
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