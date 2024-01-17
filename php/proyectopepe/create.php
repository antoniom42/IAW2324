<?php  include "header.php" ?>
<?php 
  if(isset($_POST['crear'])) 
    {
        $planta = $conn -> real_escape_string(htmlspecialchars($_POST['planta']));
        $aula = $conn -> real_escape_string(htmlspecialchars($_POST['aula']));
        $descripcion = $conn -> real_escape_string(htmlspecialchars($_POST['descripcion']));
        $comentario = $conn -> real_escape_string(htmlspecialchars($_POST['comentario']));
        $alta = $conn -> real_escape_string(htmlspecialchars($_POST['alta']));
        $revision = $conn -> real_escape_string(htmlspecialchars($_POST['revision']));
        $resolucion = $conn -> real_escape_string(htmlspecialchars($_POST['resolucion']));
      
        $query= "INSERT INTO incidencias(planta, aula, descripcion, alta, revision, resolucion, comentario) VALUES('{$planta}','{$aula}','{$descripcion}','{$alta}','{$revision}','{$resolucion}','{$comentario}')";
        $resultado = $conn->query($query);
    
          if (!$resultado) {
              echo "Algo ha ido mal añadiendo la incidencia: ";
          }
          else
          {
            echo "<script type='text/javascript'>alert('¡Incidencia añadida con éxito!')</script>";
          }         
    }
?>
<h1 class="text-center">Añadir incidencia</h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <label for="planta" class="form-label">Planta</label>
        <select name="planta" id="planta" class="form-control" required>
          <option value="Baja">Baja</option>
          <option value="primera">Primera</option>
          <option value="Segunda">Segunda</option>
        </select>
      </div>
      <div class="form-group">
        <label for="aula" class="form-label">Aula</label>
        <select name="aula" id="aula" class="form-control" required>
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

        </select>
      </div>
      <div class="form-group">
        <label for="descripcion" class="form-label">Descripcion</label>
        <input type="text" name="descripcion"  class="form-control" required>
      </div>
      <div class="form-group">
        <label for="fecha_alta" class="form-label">Fecha Alta</label>
        <input type="date" name="alta"  class="form-control" required>
      </div>
      <div class="form-group">
        <label for="fecha_rev" class="form-label">Fecha Revisión</label>
        <input type="date" name="revision"  class="form-control">
      </div>
      <div class="form-group">
        <label for="fecha_sol" class="form-label">Fecha Solución</label>
        <input type="date" name="resolucion"  class="form-control">
      </div>
      <div class="form-group">
        <label for="comentario" class="form-label">Comentario</label>
        <input type="text" name="comentario"  class="form-control">
      </div>
      <div class="form-group">
        <input type="submit"  name="crear" class="btn btn-primary mt-2" value="Añadir">
      </div>
    </form> 
  </div>
  <div id='volver' class="container text-center mt-5">
    <a href="incidencias.php" class="btn btn-warning mt-5"> Volver </a>
  <div>
<?php include "footer.php" ?>