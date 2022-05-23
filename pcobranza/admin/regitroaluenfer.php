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

$query = "SELECT matricula_alu FROM alumnos";
$resultado = mysqli_query($conexion, $query);


?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- js -->
    <script language="javascript" src="../js/jquery-3.1.1.min.js"></script>
    <script language="javascript">
      $(document).ready(function(){
        $("#cbx_estado").change(function () {
          
          $("#cbx_estado option:selected").each(function () {
            matricula_alu = $(this).val();
            $.post("includes/getMunicipio.php", { matricula_alu: matricula_alu }, function(data){
              $("#cbx_municipio").html(data);
            });            
          });
        })
      });

      $(document).ready(function(){
        $("#cbx_localidad").change(function () {
          
          $("#cbx_localidad option:selected").each(function () {
            id_enfermero = $(this).val();
            $.post("includes/getLocalidad.php", { id_enfermero: id_enfermero }, function(data){
              $("#cbx_munici").html(data);
            });            
          });
        })
      });
      
    </script>

    <title>Vinculacion del alumno-enfermero</title>
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
              Seleccionar:
            </div>

            <form class="p-4" id="combo" name="combo" action="guardar.php" method="POST">
              <div>Seleccionar Alumno: <select class="form-control mb-3" name="matricula_alu" id="cbx_estado">
                <option value="0">Alumno</option>
                <?php while($row = $resultado->fetch_assoc()) { ?>
                  <option value="<?php echo $row['matricula_alu']; ?>"><?php echo $row['matricula_alu']; ?></option>
                <?php } ?>
              </select></div>
              
              <br/>
              
              <div name="cbx_municipio" id="cbx_municipio"></div>
              
              <br/>
              <?php 
              $query = "SELECT id_enfermero FROM enfermero";
              $resultado = mysqli_query($conexion, $query);
              ?>
              <div>Seleccionar Enfermero: <select class="form-control mb-3" name="id_enfermero" id="cbx_localidad">
                <option value="0">Enfermero</option>
                <?php while($row = $resultado->fetch_assoc()) { ?>
                  <option value="<?php echo $row['id_enfermero']; ?>"><?php echo $row['id_enfermero']; ?></option>
                <?php } ?>
              </select></div>

              <br>
              <div name="cbx_munici" id="cbx_munici"></div>
              
              <br />
              <input type="submit" id="enviar" name="enviar" value="Guardar" />
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