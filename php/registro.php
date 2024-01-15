<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Features</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
      <a class="nav-item nav-link disabled" href="#">Disabled</a>
    </div>
  </div>
</nav>
<h1>Registro de incidencias</h1>
<form method="POST">
    <label for="planta">Planta: <br></label><input type="text" name="planta" placeholder="Planta"><br><br>
    <label for="aula">Aula: <br><input type ="text" name="aula" placeholder="Aula"><br><br>
    <label for="descripcion">Describe la incidencia: <br><input type ="text" name="descripcion" placeholder="Descripción"><br><br>
    <label for="fechaalta">Fecha: <br><input type ="date" name="fechaalta"><br><br>
    <label for="comentario">Comentario opcional: <br><input type ="text" name="comentario" placeholder="Comentario"><br><br>
    <input type="submit" value="Anotar Incidencia">
</form>
</body>
</html>
<?php

    // Conexion con la base de datos
    header("Content-type:text/html;charset=utf-8");
    include "conexion.php";
    $enlace = mysqli_connect("sql302.thsite.top","thsi_35750964","dTykF!lB","thsi_35750964_bdpruebas");

        if ($_POST['planta']=='')
        {
            echo "<p>El numero de planta es obligatorio</p>";
        }
        else if ($_POST['aula']=='')
        {
            echo "<p>El aula es obligatoria</p>";
        }
        else if ($_POST['descripcion']=='')
        {
            echo "<p>La descripción del problema es obligatoria</p>";
        }
        else if ($_POST['fechaalta']=='')
        {
            echo "<p>La fecha de alta de la incidencia es obligatoria</p>";
        }
        else
        {
            // Añadir a nuestro usuario a la BD
                $query="INSERT INTO incidencias (planta, aula, descripcion, fechaalta, comentario) VALUES('".mysqli_real_escape_string($enlace,$_POST['planta'])."','".mysqli_real_escape_string($enlace,$_POST['password'])."','".mysqli_real_escape_string($enlace,$_POST['descripcion'])."','".mysqli_real_escape_string($enlace,$_POST['fechaalta'])."','".mysqli_real_escape_string($enlace,$_POST['comentario'])."')";
                if (mysqli_query($enlace,$query)){
                    echo "<p>¡Enhorabuena! Has registrado tu incidencia! Será tratada con la mayor brevedad posible</p>";
                
                }
                else
                {
                    echo "<p>Hubo algún problema al registrar la incidencia. Inténtelo más tarde</p>";
                }
        }

?>
