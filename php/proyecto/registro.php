<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/registro.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">INCIDENCIAS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://pepe.thsite.top/proyecto/registro.php">Crear incidencia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Incidencias resueltas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Incidencias pendientes</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

  <h1>Registro de incidencias</h1>
  
  <div id="cuadro">
    <form method="POST">
        <label for="planta">Planta: <br></label><br><select name="planta" id="planta" required><br><br>
          <option value="0">Baja</option>
          <option value="1">Primera</option>
          <option value="2">Segunda</option>
        </select><br><br>

        <label for="aula">Aula: <br><select name="aula" id="aula" required><br><br>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
        </select><br><br>

        <label for="descripcion">Describe la incidencia: <br><input type ="text" name="descripcion" placeholder="Descripción"><br><br>

        <label for="alta">Fecha: <br><input type ="date" name="alta"><br><br>

        <label for="revision">Fecha de Revision: <br><input type ="date" name="revision"><br><br>

        <label for="resolucion">Fecha de Resolucion: <br><input type ="date" name="resolucion"><br><br>

        <label for="comentario">Comentario opcional: <br><textarea name="comentario" placeholder="Comentario"></textarea><br><br>

        <input type="submit" value="Anotar Incidencia">
    </form>
  </div>

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
        else if ($_POST['alta']=='')
        {
            echo "<p>La fecha de alta de la incidencia es obligatoria</p>";
        }
        else
        {
            // Añadir a nuestro usuario a la BD
                $query="INSERT INTO incidencias (planta, aula, descripcion, alta, revision, resolucion, comentario) VALUES('".mysqli_real_escape_string($enlace,$_POST['planta'])."','".mysqli_real_escape_string($enlace,$_POST['aula'])."','".mysqli_real_escape_string($enlace,$_POST['descripcion'])."','".mysqli_real_escape_string($enlace,$_POST['alta'])."','".mysqli_real_escape_string($enlace,$_POST['revision'])."','".mysqli_real_escape_string($enlace,$_POST['resolucion'])."','".mysqli_real_escape_string($enlace,$_POST['comentario'])."')";
                if (mysqli_query($enlace,$query)){
                    echo "<p>¡Enhorabuena! Has registrado tu incidencia! Será tratada con la mayor brevedad posible</p>";
                
                }
                else
                {
                    echo "<p>Hubo algún problema al registrar la incidencia. Inténtelo más tarde</p>";
                }
        }

?>
